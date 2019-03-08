
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
        <p><span>下午好！</span><span style="color: #fff21b"> 欢迎你！</span></p>
        <a href="login.php">退出</a>
    </div>
</header>
<!--时间-->
<section class="publicTime">
    <span id="time">2015年1月1日 11:11  星期一</span>
    <a href="#">温馨提示：为了能正常浏览，请使用高版本浏览器！（IE10+）</a>
</section>
<!--主体内容-->
<section class="publicMian">
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
        <img class="wColck" src="img/clock.jpg" alt=""/>
        <div class="wFont">
            <h2>Admin</h2>
            <p>欢迎来到玛法达·Las estrellas!</p>
			<span id="hours"></span>
        </div>
    </div>
</section>
<footer class="footer">
</footer>
<script src="js/time.js"></script>
<div style="text-align:center;">
</div>
</body>
</html>