package jianxinxin;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;

import jianxin.connect.DBconnection;
import jianxin.system.DBsystem3;

public class DBconnectDao3 {
	public static List getAllteach() {

		List all=new ArrayList();
		try{
			Connection con = DBconnection.getConnection();
			PreparedStatement ps=con.prepareStatement("select s_no,t_no,subject from teach");
			ResultSet rs = ps.executeQuery();
			
			while (rs.next()) {
				DBsystem3 st = new DBsystem3();
				st.setT_no(rs.getString("t_no"));
				st.setS_no(rs.getString("s_no"));
				st.setSubject(rs.getString("subject"));
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
		
			
			