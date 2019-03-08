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
    
    <title>登录成功</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	
	<link rel="stylesheet" href="scc2.css" type="text/css" media="all">

  </head>
  
  <body>

	<h1>恭喜你 操作成功！</h1>

	<div class="container w3layouts agileits">

			<h2>----向您 重新 展示 数据库中 用户信息----</h2>
			
			 <%
    	 List users =method.getAlluser(); 
     %>
 <table height="200px" width="750px" style="color:#FFFFFF">
     	<tr>
     		<th align="left">用户<th>
     		<th align=left">密</th>
     		<th align="right">邮箱</th>
     		<th align="right">电话</th>
     		
     	</tr>
     	<%
         for(int i = 0 ; i < users.size() ; i++){
         
             system st = (system)users.get(i) ; %>
         <tr>
              <td align="center"><%= st.getUsername() %></td>
              <td align="right"><%for(int a=0;a<15;a++){out.println("&nbsp;");}%><%= st.getPassword() %></td>
              <td></td>
              <td align="right"><%for(int a=0;a<15;a++){out.println("&nbsp;");}%><%= st.getEmail() %></td>
              <td align="right"><%for(int a=0;a<15;a++){out.println("&nbsp;");}%><%= st.getPhone() %></td>
    
         </tr>
        <%     
         }
      
       %> 
     </table> 
    
			<div class="social-icons w3layouts agileits">
				<p>- 选择查询方式 -</p>
				<ul>
					<li class="qq"><a href="select.jsp">
					<span class="icons w3layouts agileits"></span>
					<span class="text w3layouts agileits">删除用户</span></a></li>
					<li class="weixin w3ls"><a href="select.jsp">
					<span class="icons w3layouts"></span>
					<span class="text w3layouts agileits">查询用户</span></a></li>
					<li class="weibo aits"><a href="select.jsp">
					<span class="icons agileits"></span>
					<span class="text w3layouts agileits">修改用户</span></a></li>
					
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	<div class="clear"></div>
	
</body>
</html>