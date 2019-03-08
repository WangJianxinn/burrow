<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>超市账单管理系统</title>
    <link rel="stylesheet" href="css/public.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<!--头部-->
    <header class="publicHeader">
        <h1>超市账单管理系统</h1>
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
                    <li ><a href="billList.php">用户信息</a></li>
                    <li><a href="providerList.php">帖子列表</a></li>
                    <li><a href="userList.php">评论管理</a></li>
                    <li id="active"><a href="password.php">密码修改</a></li>
                    <li><a href="login.php">退出系统</a></li>
                </ul>
            </nav>
        </div>
        <div class="right">
            <div class="location">
                <strong>你现在所在的位置是:</strong>
                <span>密码修改页面</span>
            </div>
            <div class="providerAdd">
                <?php 
if(!empty($_POST['submit'])){
	include "connection.php";
	$newpassword=$_POST['newpassword'];
	$renewpassword=$_POST['renewpassword'];
	$username=$_POST['username'];
	if($newpassword!=$renewpassword){
			exit("两次输入密码不一致");
		}else{
			$sql="update `users` set `password`='$newpassword' where `username`='$username'";
			mysql_query($sql);
			echo "密码修改成功！";
		}
}
?>
<form action="#" method="post">
                    <!--div的class 为error是验证错误，ok是验证成功-->
                    <div>
                        <label for="username">用户名：</label>
                        <input type="text" name="username" id="username" required/>
                        <span >*请输入用户名</span>
                    </div>
                    <div>
                        <label for="newPassword">新密码：</label>
                        <input type="password" name="newpassword" id="newPassword" required/>
                        <span >*请输入新密码</span>
                    </div>
                    <div>
                        <label for="reNewPassword">确认新密码：</label>
                        <input type="password" name="renewpassword" id="reNewPassword" required/>
                        <span >*请输入新确认密码，保证和新密码一致</span>
                    </div>
                    <div class="providerAddBtn">
                        <!--<a href="#">保存</a>-->
                        <input type="submit"  name="submit" value="保存"/>
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