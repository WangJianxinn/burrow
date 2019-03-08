
<?php
	@mysql_connect("localhost","root","242262")or die ("mysql连接失败");
	@mysql_select_db("stars")or die("DB选择失败");
	mysql_query("set names 'utf-8'");
?>