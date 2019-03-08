package Method;

import java.sql.*;
import java.util.*;

import Connection.connection;
import Connection.connect;
import System.system;


public class method extends connect {
	
	public static List getAlluser() {

		List all=new ArrayList();
		try{
			Connection con = connection.getConnection();
			PreparedStatement ps=con.prepareStatement("select username,password,email,phone from new_user");
			ResultSet rs = ps.executeQuery();
			
			while (rs.next()) {
				system st = new system();
				st.setUsername(rs.getString("username"));
				st.setPassword(rs.getString("password"));
				st.setEmail(rs.getString("email"));
				st.setPhone(rs.getString("phone"));
				
				all.add(st);
			}
			rs.close();
			return all;
			}catch (Exception e) {
				e.printStackTrace();
				System.out.println(e.getMessage());
			}return all;
	}
	
	
	public static void insertuser(system po){
		try{
			Connection con = connection.getConnection();
			
			PreparedStatement ps=con.prepareStatement("insert into new_user(username,password,email,phone) value(?,?,?,?)");
			ps.setString(1,po.getUsername());
			ps.setString(2,po.getPassword());
			ps.setString(3,po.getEmail());
			ps.setString(4,po.getPhone());
			ps.execute();
			
			
			
			}catch (Exception e) {
				e.printStackTrace();
				System.out.println(e.getMessage());
			}
		
	}	
	
	
	public static void deleteuser(system pos) {
		try {
			Connection con = connection.getConnection();
			PreparedStatement ps = con.prepareStatement("delete from new_user where username = ? ");
			ps.setString(1,pos.getUsername());
			ps.execute();

		} catch (Exception e) {
			e.printStackTrace();
			System.out.println(e.getMessage());
		}
	}
	
	
	
	public static system  searchuser(system p) {
		
		try {
			Connection con = connection.getConnection();
			PreparedStatement ps = con.prepareStatement("select username,password,email,phone from new_user where username = ? ");
			ps.setString(1, p.getUsername());
			ResultSet rs = ps.executeQuery();
			if (rs.next()) {
				system db = new system();
				db.setUsername(rs.getString("username"));
				db.setPassword(rs.getString("password"));
				db.setEmail(rs.getString("email"));
				db.setPhone(rs.getString("phone"));
				rs.close();
				return db;
			} else {
				rs.close();
				return new system();
			}

		} catch (Exception e) {
			e.printStackTrace();
			return new system();
		}
	}

	public static void updateuser(system pb){
		try{
			Connection con = connection.getConnection();
			
			PreparedStatement ps=con.prepareStatement("update new_user set password=?,email=?,phone=? where username=?");		
			ps.setString(1,pb.getPassword());
			ps.setString(2,pb.getEmail());
			ps.setString(3,pb.getPhone());
			ps.setString(4,pb.getUsername());//切记，赋值对应好。
			ps.execute();
			
			}catch (Exception e) {
				e.printStackTrace();
				System.out.println(e.getMessage());
			}
		
	}	
	
		
}