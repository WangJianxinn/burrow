<%@ page language="java"  pageEncoding="UTF-8"%>
<%@page import="System.system"%>
<%@page import="Method.method"%>
<%@page import="java.util.*"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>填写信息</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	
	<link rel="stylesheet" href="scc2.css" type="text/css" media="all">

  </head>
  
  <body>

	<h2>.</h2>

	<div class="container w3layouts agileits">

			<h2>------填写 用户 信息------</h2>
			
			<form action="nothing" method="get">
				<input type="text" Name="username" placeholder="要删除的用户名" required="">
				<div class="send-button w3layouts agileits">
				<input type="submit" value="删除">
				</div>
			</form>
			
			
			<form action="all" method="get">
				<input type="text" Name="username" placeholder="要查询的用户名" required="">
				<div class="send-button w3layouts agileits">
				<input type="submit" value="查询">
				</div>
			</form>
			
			
			
			<form action="update" method="get">
				<input type="text" Name="username" placeholder="要修改的用户名" required="">
				<input type="text" Name="password" placeholder="新的密码" required="">
				<input type="text" Name="email" placeholder="新的邮箱" required="">
				<input type="text" Name="phone" placeholder="新的电话" required="">
				<div class="send-button w3layouts agileits">
				<input type="submit" value="修改">
				</div>
			</form>
		
			<div class="clear"></div>
		</div>
	<div class="clear"></div>
	
</body>
</html>