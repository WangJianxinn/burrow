

<?php
	include "connection.php";
	if(!empty($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from users where username='$username'and password='$password'";
		$resultSet=mysql_query($sql);
		if(mysql_num_rows($resultSet)>0){
				header("Location:index.php");
		}else{
				header("Location:login.php");
				
			}	
	}
	
?>
<head lang="en">
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="login_bg">
    <section class="loginBox">
        <header class="loginHeader">
            <h1>玛法达·Las estrellas</h1>
        </header>
        <section class="loginCont">
            <form class="loginForm" method="post">
                <div class="inputbox">
                    <label for="user">用户名：</label>
                    <input id="user" type="text" name="username" placeholder="请输入用户名" required/>
                </div>
                <div class="inputbox">
                    <label for="mima">密码：</label>
                    <input id="mima" type="password" name="password" placeholder="请输入密码" required/>
                </div>
                <div class="subBtn">
                    <input type="submit" name="submit" value="登录" />
                    <input type="reset" value="重置"/>
                </div>

            </form>
        </section>
    </section>

</body>