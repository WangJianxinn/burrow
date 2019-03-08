<?php
	include"connection.php";
	//$user_id=$_POST['user_id'];
	$sql="select * from users";
	$result=mysql_query($sql);

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
                    <li id="active"><a href="billList.php">用户信息</a></li>
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
                <span>用户信息页面</span>
            </div>
            <div class="search">
                <a href="userAdd.php">添加用户</a>
            </div>
            <!--账单表格 样式和供应商公用-->
             <table class="providerTable" cellpadding="0" cellspacing="0">
                <tr class="firstTr">
                    <th width="10%">用户编号</th>
                    <th width="20%">用户名称</th>
                    <th width="10%">用户性别</th>
                    <th width="10%">出生日期</th>
                    <th width="10%">用户电话</th>
                    <th width="10%">用户地址</th>
                    <th width="30%">用户类别</th>
                </tr>
                <?php while($users=mysql_fetch_array($result)){?>
                <tr>
                    <td><?php echo $users['user_id'];?></td>
                    <td><?php echo $users['username'];?></td>
                    <td><?php echo $users['sex'];?></td>
                    <td><?php echo $users['age'];?></td>
                    <td><?php echo $users['phone'];?></td>
                    <td><?php echo $users['address'];?></td>
                    <td><?php echo $users['kind'];?></td>
                </tr>
                <?php }?>
            </table>
        </div>
    </section>

<!--点击删除按钮后弹出的页面-->
<div class="zhezhao"></div>
<div class="remove" id="removeBi">
    <div class="removerChid">
        <h2>提示</h2>
        <div class="removeMain">
            <p>你确定要删除该订单吗？</p>
            <a href="#" id="yes">确定</a>
            <a href="#" id="no">取消</a>
        </div>
    </div>
</div>

    <footer class="footer">
    </footer>

<script src="js/jquery.js"></script>
<script src="js/js.js"></script>
<script src="js/time.js"></script>

</body>
</html>