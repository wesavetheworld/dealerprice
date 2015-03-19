/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crawler;

import java.io.BufferedReader;
import java.io.InputStreamReader;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.HttpClientBuilder;

 
public class HttpCClient {
 
  private String cookies;
  private final HttpClient client;
  private final String USER_AGENT = "Mozilla/5.0";

    public HttpCClient() {
        this.client = HttpClientBuilder.create().build();
    }

  public String GetPageContent(String url) throws Exception {
 
	HttpGet request = new HttpGet(url);
 
	request.setHeader("User-Agent", USER_AGENT);
	request.setHeader("Accept",
		"text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8");
	request.setHeader("Accept-Language", "en-US,en;q=0.5");
 
	HttpResponse response = client.execute(request);
	int responseCode = response.getStatusLine().getStatusCode();
 
	//System.out.println("\nSending 'GET' request to URL : " + url);
	//System.out.println("Response Code : " + responseCode);
 
	BufferedReader rd = new BufferedReader(new InputStreamReader(response.getEntity().getContent()));
 
	StringBuilder result;
        result = new StringBuilder();
	String line;
	while ((line = rd.readLine()) != null) {
		result.append(line);
	}
 
	// set cookies
	setCookies(response.getFirstHeader("Set-Cookie") == null ? "" : 
                     response.getFirstHeader("Set-Cookie").toString());
 
	return result.toString();
 
  }
 
  public String getCookies() {
	return cookies;
  }
 
  public void setCookies(String cookies) {
	this.cookies = cookies;
  }
 
}