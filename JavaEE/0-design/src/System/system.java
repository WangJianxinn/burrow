package System;

import java.sql.*;

import javax.servlet.http.HttpServletRequest;

import Connection.connect;

public class system extends connect{
	private String username,password;
	public system(String username,String password){
		super();
		this.username = username;
		this.password = password;
	}
	
	public system(){
		super();
		this.username = "z";
		this.password = "z";
	}
	
	public system(HttpServletRequest request){
		super();
		String username = request.getParameter("username");
		String password = request.getParameter("password");
		this.username = username==null?"":username;
		this.password = password==null?"":password;
	}

	public String getUsername() {
		return username;
	}

	public void setUsername(String username) {
		this.username = username;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}
	
	public boolean check(){
		boolean state = false;
		PreparedStatement stmt;
		ResultSet rs;
		
		String sql="select * from new_user where username=? and password=?";
		try {
			stmt=conn.prepareStatement(sql);
			stmt.setString(1, this.username);
			stmt.setString(2, this.password);
			rs = stmt.executeQuery();
			state=rs.next();			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}		
		return state;
	}
	


	private String email;
	private String phone;
	
	public String getEmail() {
		return email;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	public String getPhone() {
		return phone;
	}
	public void setPhone(String phone) {
		this.phone = phone;
	}
	
	
	
}
