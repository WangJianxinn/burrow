<%@ page language="java" import="java.util.*,jianxinxin.*,jianxin.system.*" pageEncoding="utf-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>My JSP 'DBcon.jsp' starting page</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<!--
	<link rel="stylesheet" type="text/css" href="styles.css">
	-->

  </head>
  
  <body> 
  <form>
  	<fieldset>
  		<legend><h2>学生—教师管理系统模拟</h2></legend><br>
  		 <a href="addDBcon.jsp">填加学生信息</a>
     <a href="delDBcon.jsp">删除学生信息</a>
     <a href="searDBcon.jsp">查询学生信息</a>
     <%
    	 List students = DBconnectDao.getAllstudent(); 
     %>
     
     <form>
     <fieldset>
     <legend align="center"><b>学生个人信息</b></legend>
     <table align="center" width="400px" height="120px">
     	<tr>
     		<th>学生姓名</th>
     		<th>学号</th>
     		<th>学生所在系</th>
     		<th>性别</th>
     		<th>学分</th>
     	</tr>
     	<%
         for(int i = 0 ; i < students.size() ; i++){
         
             DBsystem st = (DBsystem)students.get(i) ; %>
         <tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;<%= st.getS_name() %></td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<%= st.getS_no()   %></td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<%= st.getS_dept() %></td>
              <td>&nbsp;&nbsp;&nbsp;<%= st.getS_sex() %></td>
              <td>&nbsp;&nbsp;<%= st.getS_credits() %></td>
         </tr>
        <%     
         }
      
       %> 
     </table> 
    
     </fieldset>
     </form>
    
     
     
     
     
     <%
    	 List teachers = DBconnectDao2.getAllteacher(); 
     %>
     <form>
     <fieldset>
     <legend align="center"><b>教师个人信息</b></legend>
     <table align="center" width="400px" height="120px">
     	<tr>
     		<th>教师姓名</th>
     		<th>教师编号</th>
     		<th>教师所在系</th>
     	</tr>
     	<%
         for(int i = 0 ; i < teachers.size() ; i++){
         
             DBsystem2 st = (DBsystem2)teachers.get(i) ; %>
         <tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<%= st.getT_name() %></td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<%= st.getT_no()   %></td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<%= st.getT_dept() %></td>
         </tr>
        <%     
         }
      
       %> 
     </table> 
     </fieldset>
     </form>
     
     
     
     
      <%
    	 List teach = DBconnectDao3.getAllteach(); 
     %>
     <form>
     <fieldset>
     <legend align="center"><b>授课信息</b></legend>
     <table align="center" width="400px" height="150px">
     	<tr>
     		<th>教师姓名</th>
     		<th>学生姓名</th>
     		<th>传授科目</th>
     	</tr>
     	<%
         for(int i = 0 ; i < teach.size() ; i++){
         
             DBsystem3 st = (DBsystem3)teach.get(i) ; %>
         <tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<%= st.getT_no() %></td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<%= st.getS_no()   %></td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<%= st.getSubject() %></td>
         </tr>
        <%     
         }
      
       %> 
     </table> 
     </fieldset>
     </form>
     
     </fieldset>
     </form>
     
     
   </body>
</html>
