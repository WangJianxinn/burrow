package jianxinxin;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;

import jianxin.connect.DBconnection;
import jianxin.system.DBsystem;

public class DBconnectDao {
	public static List getAllstudent() {

		List all=new ArrayList();
		try{
			Connection con = DBconnection.getConnection();
			PreparedStatement ps=con.prepareStatement("select s_name,s_no,s_dept,s_sex,s_credits from student_informations");
			ResultSet rs = ps.executeQuery();
			
			while (rs.next()) {
				DBsystem st = new DBsystem();
				st.setS_name(rs.getString("s_name"));
				st.setS_no(rs.getString("s_no"));
				st.setS_dept(rs.getString("s_dept"));
				st.setS_sex(rs.getString("s_sex"));
				st.setS_credits(rs.getString("s_credits"));
				
				all.add(st);
			}
			rs.close();
			return all;
			}catch (Exception e) {
				e.printStackTrace();
				System.out.println(e.getMessage());
			}return all;
	}
	
	
	public static void insertstudent(DBsystem po){
		try{
			Connection con = DBconnection.getConnection();
			
			PreparedStatement ps=con.prepareStatement("insert into student_informations(s_no,s_name,s_dept,s_sex,s_credits) value(?,?,?,?,?)");
			ps.setString(1,po.getS_no());
			ps.setString(2,po.getS_name());
			ps.setString(3,po.getS_dept());
			ps.setString(4,po.getS_sex());
			ps.setString(5,po.getS_credits());
			ps.execute();
			
			
			
			}catch (Exception e) {
				e.printStackTrace();
				System.out.println(e.getMessage());
			}
		
	}
	
	
	public static void deletestudent(DBsystem pos) {
		try {
			Connection con = DBconnection.getConnection();
			PreparedStatement ps = con.prepareStatement("delete from student_informations where s_no = ? ");
			ps.setString(1,pos.getS_no());
			ps.execute();

		} catch (Exception e) {
			e.printStackTrace();
			System.out.println(e.getMessage());
		}
	}

	
	public static DBsystem  searstudent(DBsystem p) {
		
		try {
			Connection con = DBconnection.getConnection();
			PreparedStatement ps = con.prepareStatement("select s_no,s_name from student_informations where s_no = ? ");
			ps.setString(1, p.getS_no());
			ResultSet rs = ps.executeQuery();
			if (rs.next()) {
				DBsystem db = new DBsystem();
				db.setS_no(rs.getString("s_no"));
				db.setS_name(rs.getString("s_name"));
				rs.close();
				return db;
			} else {
				rs.close();
				return new DBsystem();
			}

		} catch (Exception e) {
			e.printStackTrace();
			return new DBsystem();
		}
	}
	
}
		
			
			