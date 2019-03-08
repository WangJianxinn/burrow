<?php
	include("connection.php");
	if(!empty($_POST['submit'])){
		//判断用户名是否占用
		$username=$_POST['username'];
		$usernameSQL="select * from users where username='$username'";
		$resultSet=mysql_query($usernameSQL);
		if(mysql_num_rows($resultSet)>0){
			exit("用户名已经被占用，请更换其他用户名！");
		}
		//确认两次密码输入是否一致
		$password=$_POST['password'];
		$confirmpassword=$_POST['confirmpassword'];
		if($password!=$confirmpassword){
			exit("两次输入密码不一致");
		}
		$sex=$_POST['sex'];
		$age=$_POST['age'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$kind=$_POST['kind'];
		$sql="insert into `users`(`user_id`,`username`,`password`,`sex`,`age`,`phone`,`address`,`kind`) 
		      values(null,'$username','$password','$sex','$age',$phone,'$address','$kind')";
		mysql_query($sql);
		$userid=mysql_insert_id();
		$userSQL="select * from users where user_id=$userid";
		$userResult=mysql_query($userSQL);
		header("Location:billList.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>玛法达·Las estrellas</title>
    <link rel="stylesheet" href="css/public.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<!--头部-->
<header class="publicHeader">
    <h1>玛法达·Las estrellas</h1>

    <div class="publicHeaderR">
        <p><span>下午好！</span><span style="color: #fff21b"> Admin</span> , 欢迎你！</p>
        <a href="login.php">退出</a>
    </div>
</header>
<!--时间-->
<section class="publicTime">
    <span id="time">2015年1月1日 11:11  星期一</span>
    <a href="#">温馨提示：为了能正常浏览，请使用高版本浏览器！（IE10+）</a>
</section>
<!--主体内容-->
<section class="publicMian ">
    <div class="left">
        <h2 class="leftH2"><span class="span1"></span>功能列表 <span></span></h2>
        <nav>
            <ul class="list">
                <li><a href="billList.php">用户信息</a></li>
                <li ><a href="providerList.php">帖子列表</a></li>
                <li id="active"><a href="userList.php">评论管理</a></li>
                <li><a href="password.php">密码修改</a></li>
                <li><a href="login.php">退出系统</a></li>
            </ul>
        </nav>
    </div>
    <div class="right">
        <div class="location">
            <strong>你现在所在的位置是:</strong>
            <span>用户管理页面 >> 用户添加页面</span>
        </div>
        <div class="providerAdd">
            <form action=" " method="post">
                <!--div的class 为error是验证错误，ok是验证成功-->
                <div>
                    <label for="userName">用户名称：</label>
                    <input type="text" name="username" id="userName"/>
                    <span >*请输入用户名称</span>
                </div>
                <div>
                    <label for="userpassword">用户密码：</label>
                    <input type="password" name="password" id="userpassword"/>
                    <span>*密码长度必须大于6位小于20位</span>

                </div>
                <div>
                    <label for="userRemi">确认密码：</label>
                    <input type="password" name="confirmpassword" id="userRemi"/>
                    <span>*请输入确认密码</span>
                </div>
                <div>
                    <label >用户性别：</label>

                    <select name="sex">
                        <option value="man">男</option>
                        <option value="woman">女</option>
                    </select>
                    <span></span>
                </div>
                <div>
                    <label for="data">年龄：</label>
                    <input type="text" name="age" id="data"/>
                    <span >*</span>
                </div>
                <div>
                    <label for="userphone">用户电话：</label>
                    <input type="text" name="phone" id="userphone"/>
                    <span >*</span>
                </div>
                <div>
                    <label for="userAddress">用户地址：</label>
                    <input type="text" name="address" id="userAddress"/>
                </div>
                <div>
                    <label >用户类别：</label>
                    <input type="radio" name="kind"/>巨蟹族
                    <input type="radio" name="kind"/>白羊族
                    <input type="radio" name="kind"/>天秤族

                </div>
                <div class="providerAddBtn">
                    <!--<a href="#">保存</a>-->
                    <!--<a href="userList.php">返回</a>-->
                    <input type="submit" value="保存" name="submit"/>
                    <input type="button" value="返回" onclick="history.back(-1)"/>
                </div>
            </form>
        </div>

    </div>
</section>
<footer class="footer">
</footer>
<script src="js/time.js"></script>

</body>
</html>