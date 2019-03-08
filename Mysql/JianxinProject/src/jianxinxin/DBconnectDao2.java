package jianxinxin;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;

import jianxin.connect.DBconnection;
import jianxin.system.DBsystem2;

public class DBconnectDao2 {
	public static List getAllteacher() {

		List all=new ArrayList();
		try{
			Connection con = DBconnection.getConnection();
			PreparedStatement ps=con.prepareStatement("select t_no,t_name,t_dept from teacher_informations");
			ResultSet rs = ps.executeQuery();
			
			while (rs.next()) {
				DBsystem2 st = new DBsystem2();
				st.setT_name(rs.getString("t_name"));
				st.setT_no(rs.getString("t_no"));
				st.setT_dept(rs.getString("t_dept"));
				all.add(st);
			}
			rs.close();
			return all;
			}catch (Exception e) {
				e.printStackTrace();
				System.out.println(e.getMessage());
			}return null;
	}
	
}
		
			
			