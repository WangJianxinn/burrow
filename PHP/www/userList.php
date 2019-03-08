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
                    <li><a href="providerList.php">帖子列表</a></li>
                    <li  id="active"><a href="userList.php">评论管理</a></li>
                    <li><a href="password.php">密码修改</a></li>
                    <li><a href="login.php">退出系统</a></li>
                </ul>
            </nav>
        </div>
        <div class="right">
            <div class="location">
                <strong>你现在所在的位置是:</strong>
                <span>评论管理页面</span>
            </div>
            <div class="search">
                <a href="reviewAdd.php">添加评论</a>
            </div>
            <!--用户-->
            <?php
   include("connection.php");
   $search_sql="select * from review order by review_id desc";
   $result_set=mysql_query($search_sql);
	while($row=mysql_fetch_array($result_set))
	{
   ?>
      
            <table class="providerTable" cellpadding="0" cellspacing="0">
                <tr class="firstTr">
                    <th width="10%">评论内容</th>
                    <th width="20%">日期</th>
                    <th width="10%">IP地址</th>
                    <th width="10%">状态</th>
                    <th width="10%">操作</th>
                </tr>
                <tr>
                    <td><?php echo $row['content']?></td>
                    <td><?php echo $row['publish_time']?></td>
                    <td><?php echo $row['ip']?></td>
                    <td><?php echo $row['state']?></td>
                    <td>
                    <?php if($row['state']=="1"){
                    	echo "<a href='review_verify.php?review_id=".$row["review_id"]."'>审核</a>";
                    }
                    ?>
                    
                        
                        <a href="reviewDelete.php?review_id=<?php echo $row['review_id']?>"><img src="img/schu.png" alt="删除" title="删除"/></a>
                    </td>
                </tr>
            </table>
           
<?php
  }
?>
        </div>
    </section>

<!--点击删除按钮后弹出的页面-->
<div class="zhezhao"></div>
<div class="remove" id="removeUse">
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