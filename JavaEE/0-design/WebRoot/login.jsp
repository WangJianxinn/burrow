<%@ page language="java" import="java.util.*" pageEncoding="utf-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>登录/注册</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	
	<link rel="stylesheet" href="css.css" type="text/css" media="all">

  </head>
  
  <body>

	<h1>登录/注册 表单</h1>

	<div class="container w3layouts agileits">

		<div class="login w3layouts agileits">
			<h2>登 录</h2>
			<form action="check.jsp" method="post">
				<input type="text" Name="username" placeholder="用户名" required="">
				<input type="password" Name="password" placeholder="密码" required="">
			
			<ul class="tick w3layouts agileits">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>记住我</label>
				</li>
			</ul>
			<div class="send-button w3layouts agileits">
				
					<input type="submit" value="登 录">
				
			</div>
			</form>
			
			<div class="social-icons w3layouts agileits">
				<p>- 其他方式登录 -</p>
				<ul>
					<li class="qq"><a href="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=100270989&redirect_uri=https%3A%2F%2Fpassport.csdn.net%2Faccount%2Flogin%3Foauth_provider%3DQQProvider&state=test">
					<span class="icons w3layouts agileits"></span>
					<span class="text w3layouts agileits">QQ</span></a></li>
					<li class="weixin w3ls"><a href="https://openapi.baidu.com/oauth/2.0/authorize?response_type=code&client_id=cePqkUpKCBrcnQtARTNPxxQG&redirect_uri=https%3A%2F%2Fpassport.csdn.net%2Faccount%2Flogin%3Foauth_provider%3DBaiduProvider">
					<span class="icons w3layouts"></span>
					<span class="text w3layouts agileits">百度</span></a></li>
					<li class="weibo aits"><a href="https://api.weibo.com/oauth2/authorize?client_id=2601122390&response_type=code&redirect_uri=https%3A%2F%2Fpassport.csdn.net%2Faccount%2Flogin%3Foauth_provider%3DSinaWeiboProvider">
					<span class="icons agileits"></span>
					<span class="text w3layouts agileits">微博</span></a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<div class="clear"></div>
		</div><div class="copyrights"> from <a href="http://www.cssmoban.com/" >a</a></div>
		<div class="register w3layouts agileits">
		
			
			<h2>注 册</h2>
			<form action="everything" method="get">
				<input type="text" Name="username" placeholder="用户名" required="">
				<input type="password" Name="password" placeholder="密码" required="">
				<input type="text" Name="email" placeholder="邮箱" required="">
				<input type="text" Name="phone" placeholder="手机号码" required="">
			
			<div class="send-button w3layouts agileits">
				<form>
					<input type="submit" value="免费注册">
				</form>
			</div>
			</form>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	</div>

	<div class="footer w3layouts agileits">
		<p>Copyright &copy; individual <a href="http://www.hrbcu.edu.cn/" target="_blank" title="模板之家">哈尔滨商业大学
	</div>

</body>
<!-- //Body -->

</html>