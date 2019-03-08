
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
                <li id="active"><a href="providerList.php">帖子列表</a></li>
                <li><a href="userList.php">评论管理</a></li>
                <li><a href="password.php">密码修改</a></li>
                <li><a href="login.php">退出系统</a></li>
            </ul>
        </nav>
    </div>
    <div class="right">
        <div class="location">
            <strong>你现在所在的位置是:</strong>
            <span>帖子管理页面 >> 信息查看</span>
        </div>
       <?php
        include_once("connection.php");
    $search_sql="select * from contents order by contents_id desc"; 
  	$result_set=mysql_query($search_sql);
	if(mysql_num_rows($result_set)==0)
	{
	   exit("暂无记录！");
	}
	while($row=mysql_fetch_array($result_set))
	{?>
        <div class="providerView">
            <p><strong>标题：</strong><span><?php echo $row['title']?></span></p>
            <p><strong>内容：</strong><span><?php echo $row['content']?></span></p>
            <p><strong>发布时间：</strong><span><?php echo $row['publish_time']?></span></p>
            <p><strong>点击量：</strong><span><?php echo $row['clicked']?></span></p>
            <p><strong>发布人：</strong><span>15918230478</span></p>
            <p><strong>联系方式：</strong><span>描述</span></p>
            <?php
  }
?>
            <a href="providerList.php">返回</a>
        </div>
    </div>
</section>
<footer class="footer">
</footer>
<script src="js/time.js"></script>

</body>
</html>