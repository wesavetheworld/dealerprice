/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crawler;


import java.sql.Connection;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Boney
 */
public class Crawler {
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
      MySQLAccess dao;
      dao = new MySQLAccess();
       try {
           Connection con;
           con = dao.makeConnection();
           if(con != null)
           {
               if(args.length==0)
                   dao.runQuery();
               else
                   dao.runQueryOnProduct(args[0]);
           }
       } catch (Exception ex) {
           Logger.getLogger(Crawler.class.getName()).log(Level.SEVERE, null, ex);
       }
    }
    
}

