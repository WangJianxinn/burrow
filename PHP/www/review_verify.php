
<?php
   include("connection.php");
   $review_id=$_GET["review_id"];
   $sql="update review set state='checked' where review_id=$review_id";
   mysql_query($sql);
   header("Location:userList.php");
 
?>