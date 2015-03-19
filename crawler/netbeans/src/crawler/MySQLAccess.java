/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crawler;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.Instant;

public class MySQLAccess {
  private Connection connect = null;
  private Statement statement = null;
  private PreparedStatement preparedStatement = null;
  private ResultSet resultSet = null;

  public Connection makeConnection() throws Exception {
    try {
      // This will load the MySQL driver, each DB has its own driver
      Class.forName("com.mysql.jdbc.Driver");
      // Setup the connection with the DB
      connect = DriverManager.getConnection("jdbc:mysql://localhost/dealerpricedb?user=root&password=");
      return connect;
    } catch(ClassNotFoundException | SQLException e) {
      throw e;
    } 
  }
  
  public void runQuery()  throws Exception{
      // Statements allow to issue SQL queries to the database
      statement = connect.createStatement();
      // Result set get the result of the SQL query
      resultSet = statement.executeQuery("select * from product_details order by id DESC");
      int rows;
      rows = 0;
      if (resultSet.last()) {
            rows = resultSet.getRow();
            resultSet.beforeFirst();
        }
      int limit;
      limit = 10000;
      int i;
      int offset;
      offset = 0;
      int loopIncrease = rows/limit;
      boolean firsttime = true;
      for(i=0; i <= loopIncrease; i++)
      {
          if(firsttime)
          {
              resultSet = statement.executeQuery("select * from product_details order by id DESC LIMIT "+limit);
              checkLatestPrices(resultSet);
              firsttime = false;
          }
          else
          {
                resultSet = statement.executeQuery("select * from product_details order by id DESC LIMIT "+offset+", "+limit);
                checkLatestPrices(resultSet);
          }
          //System.out.println("with limit "+offset+", "+limit);
          offset+=limit;
      }
      
  }

    /**
     *
     * @param productId
     * @throws Exception
     */
    public void runQueryOnProduct(String productId)  throws Exception{
      // Statements allow to issue SQL queries to the database
      statement = connect.createStatement();
      // Result set get the result of the SQL query
      resultSet = statement.executeQuery("select * from product_details where product_id = "+productId);
      checkLatestPrices(resultSet);     
  }
  private void checkLatestPrices(ResultSet resultSet) throws SQLException {
    // ResultSet is initially before the first data set
    while (resultSet.next()) {
      String id = resultSet.getString("id");
      String pid = resultSet.getString("product_id");
      String url = resultSet.getString("affiliate_url");
      HttpThread t = new HttpThread(id, pid, url, this);
      t.start();
    }
  }
  public void updateStorePrice(String productDetailsId, double mrp, double price, double discount, double rating, double ratingCount)
  {
      //System.out.println("Product Details Id "+productDetailsId);
      //System.out.println("mrp "+mrp);
      //System.out.println("price "+price);
      if(price > 0)
      try{
      String sql = "UPDATE product_details set mrp=?, price=?, discount=?, rating=?, rating_people=? WHERE id=?";
      preparedStatement = connect.prepareStatement(sql);
      //Bind values into the parameters.
      preparedStatement.setDouble(1, mrp);  // This would set age
      preparedStatement.setDouble(2, price); // This would set ID
      preparedStatement.setDouble(3, discount); // This would set ID
      if(rating > 0)
      preparedStatement.setDouble(4, rating); // This would set ID
      if(ratingCount > 0)
      preparedStatement.setDouble(5, ratingCount); // This would set ID
      preparedStatement.setInt(6, Integer.parseInt(productDetailsId)); // This would set ID
      
      // Let us update age of the record with ID = 102;
      int rows = preparedStatement.executeUpdate();
      //System.out.println("Product Details Rows impacted : " + rows );
      }catch(SQLException | NumberFormatException se){
      }
  }
  public boolean checkDataInDB(String productId)  throws Exception{
      // Statements allow to issue SQL queries to the database
      statement = connect.createStatement();
      // Result set get the result of the SQL query
      ResultSet tresultSet = statement.executeQuery("select * from products where id="+productId);
      String img = "";
      String key = "";
      String specs = "";
      while (tresultSet.next()) {
        img = tresultSet.getString("images");
        key = tresultSet.getString("key_features");
        specs = tresultSet.getString("specifications");
       }
      return ((key.isEmpty()) || (specs.isEmpty()) || (img.isEmpty()));
  }
  
    /**
     *
     * @param ProductId
     * @param imageUrls
     * @param keyfeatures
     * @param specifications
     * @param overview
     */
    public void updateProductData(String ProductId, String imageUrls, String keyfeatures, String specifications, String overview)
  {
      //System.out.println("Product Id "+ProductId);
      //System.out.println("URls  "+imageUrls);
     // System.out.println("Key "+keyfeatures);
      try{
      //if(checkDataInDB(ProductId))
      //{
      String sql = "UPDATE products set images=?, key_features=?, specifications=?, overview=?, last_updated=? WHERE id=?";
      preparedStatement = connect.prepareStatement(sql);
      //Bind values into the parameters.
      preparedStatement.setString(1, imageUrls);  // This would set age
      preparedStatement.setString(2, keyfeatures); // This would set ID
      preparedStatement.setString(3, specifications); // This would set ID
      preparedStatement.setString(4, overview); // This would set ID
      long unixTimestamp = Instant.now().getEpochSecond();
      preparedStatement.setLong(5, unixTimestamp); // This would set ID
      preparedStatement.setInt(6, Integer.parseInt(ProductId)); // This would set ID
      
      // Let us update age of the record with ID = 102;
      int rows = preparedStatement.executeUpdate();
      //System.out.println("Product table Rows impacted : " + rows );
     // }
      }catch(SQLException | NumberFormatException se){
      }
  }

  // You need to close the resultSet
  public void close() {
    try {
      if (resultSet != null) {
        resultSet.close();
      }

      if (statement != null) {
        statement.close();
      }

      if (connect != null) {
        connect.close();
      }
    } catch (Exception e) {

    }
  }

} 
