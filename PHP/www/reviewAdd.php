
		<?php
include "connection.php";
if(!empty($_POST['sub'])){
	$content=$_POST['content'];
	$currentDate = date("Y-m-d H:i:s");
	$ip=$_SERVER["SERVER_ADDR"];
	$state=1;
	$sql="insert into review values(null,null,'$content','$currentDate',$state,'$ip')";
	mysql_query($sql);
	header("Location:userList.php");}
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
        <p><span>下午好！</span><span style="color: #fff21b">欢迎你！</span></p>
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
                <li><a href="password.php">密码修改</a></li>
                <li><a href="login.php">退出系统</a></li>
            </ul>
        </nav>
    </div>
    <div class="right">
        <div class="location">
            <strong>你现在所在的位置是:</strong>
            <span>评论管理页面 >> 添加评论页面</span>
        </div>

        <div class="providerAdd">
            <form action="" method="post">
                <!--div的class 为error是验证错误，ok是验证成功-->
                <div>
                    <label for="content">内容：</label>
                    <input type="text" name="content" id="content"/>
                </div>
                <div class="providerAddBtn">
                    <!--<a href="#">保存</a>-->
                    <!--<a href="userList.html">返回</a>-->
                    <input type="submit" name="sub" value="发帖" />
                    <input type="button" value="返回" onclick="history.back(-1)"/>
                </div>
            </form>
        </div>
<?php
include "connection.php";
if(!empty($_POST['sub'])){
	$user_id=1;
    $category_id=$_POST['category_id'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$currentDate = date("Y-m-d H:i:s");
	$clicked=0;
	$sql="insert into contents values(null,$user_id,$category_id,'$title','$content','$currentDate',$clicked,null)";
	mysql_query($sql);
	header("Location:userList.php?message=$message");}
?>
    </div>
</section>
<footer class="footer">
</footer>
<script src="js/time.js"></script>

</body>
</html>