
<?php
   include_once("connection.php");
   $contents_id=$_GET["contents_id"];
   mysql_query("delete from review where contents_id=$contents_id");
   mysql_query("delete from contents where contents_id=$contents_id");
   $message="相关帖子删除成功！";
   header("Location:providerList.php?message=$message");
?>