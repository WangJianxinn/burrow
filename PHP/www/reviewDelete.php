
<?php
   include_once("connection.php");
   $review_id=$_GET["review_id"];
   $sql="delete from review where review_id=$review_id";
   $result_set=mysql_query($sql);
   header("Location:userList.php");
?>