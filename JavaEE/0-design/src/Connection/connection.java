package Connection;

import java.sql.Connection;
import java.sql.DriverManager;

public class connection {

	
	private static final String url = "jdbc:mysql://localhost:3306/user" ; 
	private static final String username = "root" ; 
	private static final String password = "242262" ; 
	
	public static Connection getConnection(){
		try{
			 Class.forName("com.mysql.jdbc.Driver") ;
			 return DriverManager.getConnection(url, username, password);
		}catch(Exception e ){
			e.printStackTrace();
			return null ; 
		}
	}
	
}
