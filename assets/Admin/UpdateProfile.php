<?php
session_start();
include "../config.php";

$P_Phonenumber=$_POST["Phone-input"];
$P_password=$_POST["password-input"];
$P_name=$_POST["name-input"];
$P_email=$_POST["email-input"];
$P_location=$_POST["location-input"];
$Phonenumber=mysqli_real_escape_string($link,$P_Phonenumber);
$password=mysqli_real_escape_string($link,$P_password);
$name=mysqli_real_escape_string($link,$P_name);
$email=mysqli_real_escape_string($link,$P_email);
$location=mysqli_real_escape_string($link,$P_location);

$sql="UPDATE userdata SET phonenumber ='".$P_Phonenumber."'
, name ='".$P_name."', password ='".$P_password."', email ='".$P_email."', PlustCode ='".$P_location."' WHERE id='".$_SESSION['id']."';";

$result= mysqli_query($link, $sql);
if($_SESSION['id'] <=> "21"){
header("location: ???");
}
header("location: UserProfileAdmin.php");

?>