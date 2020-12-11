<?php
include "../config.php";

 $postedStatus=$_POST["status"];
 $status=mysqli_real_escape_string($link,$postedStatus);
 $postedUsername=$_POST["Username"];
 $Username=mysqli_real_escape_string($link,$postedUsername);

$sql="UPDATE userdata SET status ='".$postedStatus."' WHERE username='".$postedUsername."';";

$result= mysqli_query($link, $sql);
header("location: userManagementStaff.php");
?>