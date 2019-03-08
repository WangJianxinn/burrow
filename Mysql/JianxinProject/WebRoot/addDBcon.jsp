<%@ page language="java" import="java.util.*,DBconServlet.*" pageEncoding="utf-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>My JSP 'addDBcon.jsp' starting page</title>
    
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
  		<form action="anything">
  		<center>
  		<h2>填加学生信息页面</h2>
    		学生学号:<input type="text" name="s_no" size="20">（必填选项）<br><br>
    		学生姓名:<input type="text" name="s_name" size="20">（必填选项）<br><br>
    		学生院系:<input type="text" name="s_dept" size="20">（非必填项）<br><br>
    		学生性别:<input type="text" name="s_sex" size="20">（非必填项）<br><br>
    		学生学分:<input type="text" name="s_credits" size="20">（非必填项）<br><br>
    		<input type="submit" value="提交">
    		<input type="reset" value="重置">
    	</center>
    	</form>
  </body>
</html>
