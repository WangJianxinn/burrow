package Connection;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
public class connect {
	protected Connection conn;
	private String url,driver,username,password;
	public connect(){
		driver="com.mysql.jdbc.Driver";
		url="jdbc:mysql://localhost:3306/user";
		username="root";
		password="242262";
		try {
			Class.forName(driver);
			conn = DriverManager.getConnection(url,username,password);			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}		
	}
	public Connection getConnection(){
		return this.conn;
	}
}
