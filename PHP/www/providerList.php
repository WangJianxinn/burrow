
  <?php
   include_once("connection.php");
   if(isset($_GET["message"]))
   {
      echo $_GET["message"]."<br>";
   }
   $search_sql="select * from contents order by contents_id desc";
   $keyword="";
   if(isset($_GET["keyword"]))
   {
      $keyword=$_GET["keyword"];
	  //设置模糊查询的SQL语句
	  $search_sql="select * from contents where title like '%$keyword%' order by contents_id desc";//修改
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
            <span>帖子管理页面</span>
        </div>
        <div class="search">
           <form action="providerList.php" method="get">
            <a href="providerAdd.php">添加帖子</a>
            </form>
        </div>
        <!--供应商操作表格-->
        <form action="">
        <table class="providerTable" cellpadding="0" cellspacing="0">
            <tr class="firstTr">
                <th width="20%">帖子名称</th>
                <th width="10%">发帖人</th>
                <th width="10%">发帖时间</th>
                <th width="30%">操作</th>
            </tr>
<?php
	include("connection.php");
	$rowCount=0;
	$pageSize=3;
	$pageCount=0;
	$pageNow=1;
	$sql="select count(*) from `contents`";
	$query=mysql_query($sql);
	if($rs=mysql_fetch_row($query)){
		$rowCount=$rs[0];
	}
	$pageCount=ceil($rowCount/$pageSize);
	if(!empty($_GET['pageNow'])){
		echo $pageNow=$_GET['pageNow'];

	}
	if(!empty($_GET['subs'])){
		$sc=$_GET['sc'];
		$w="`title` like '%$sc%'";
	}else{
		$w=1;
	}
	$n=($pageNow-1)*$pageSize;
	$sql="select * from `contents` where $w order by `contents_id` desc limit $n,$pageSize";
	$query=mysql_query($sql);
	while($rs=mysql_fetch_array($query)){
	
?>



<?php
  	$result_set=mysql_query($search_sql);
	if(mysql_num_rows($result_set)==0)
	{
	   exit("暂无记录！");
	}
	//while($row=mysql_fetch_array($result_set))
	{?>

            <tr>
                <td><?php echo $rs['title']?></td>
                <td><?php echo $rs['user_id']?></td>
                <td><?php echo $rs['publish_time']?></td>
                <td>
                    <a href="providerView.php"><img src="img/read.png" alt="查看" title="查看"/></a>
                    <a href="providerUpdate.php"><img src="img/xiugai.png" alt="修改" title="修改"/></a>
                    <a href="providerDelete.php?contents_id=<?php echo $rs['contents_id']?>"><img src="img/schu.png" alt="删除" title="删除"/>  </a>
               
                </td>
            </tr>
  <?php
  }}
?>         
<?php

	//}
	if($pageNow>1){
		$prePage=$pageNow-1;
		echo "<a href='providerList.php?pageNow=$prePage'>上一页</a>&nbsp;&nbsp;";
	}
	for($i=1;$i<=5;$i++){
		echo "<a href='providerList.php?pageNow=$i'>$i</a>&nbsp;&nbsp;";
	}
	echo "...";
	if($pageNow<$pageCount){
		$nextPage=$pageNow+1;
		echo "<a href='providerList.php?pageNow=$nextPage'>下一页</a>&nbsp;&nbsp;";

	}
    echo "当前是第{$pageNow}页/共{$pageCount}页";
	echo "<br>";
	?>
        </table>
       </form>
    </div>
</section>

<!--点击删除按钮后弹出的页面-->
<div class="zhezhao"></div>
<div class="remove" id="removeProv">
   <div class="removerChid">
       <h2>提示</h2>
       
   </div>
</div>


<footer class="footer">
</footer>

<script src="js/jquery.js"></script>
<script src="js/js.js"></script>
<script src="js/time.js"></script>

</body>
</html>