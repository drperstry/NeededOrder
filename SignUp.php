<?php
include "config.php";

session_start();
if(isset($_POST['password']) && isset($_POST["Fname"]) && isset($_POST["Lname"]) && isset($_POST["Email"]) && isset($_POST["Location"]) && isset($_POST["PhoneNumber"]) && isset($_POST["Role"]) && isset($_POST["Username"])){
$password=mysqli_real_escape_string($link,$_POST["password"]);
$Fname=mysqli_real_escape_string($link,$_POST["Fname"]);
$Lname=mysqli_real_escape_string($link,$_POST["Lname"]);
$Email=mysqli_real_escape_string($link,$_POST["Email"]);
$Location=mysqli_real_escape_string($link,$_POST["Location"]);
$PhoneNumber=mysqli_real_escape_string($link,$_POST["PhoneNumber"]);
$Role=mysqli_real_escape_string($link,$_POST["Role"]);
$uname = mysqli_real_escape_string($link,$_POST["Username"]);

$sql1="INSERT INTO userdata (name, email, phonenumber, plustCode, Utype, Username, Mypass, status) VALUES (?, ?, ?, ?, ? , ?, ?, ?);";

$stmt1 =mysqli_stmt_init($link);
$name=$Fname;
$name.=$Lname;
$Astatus="Active";
$hashpass=password_hash($password, PASSWORD_DEFAULT);
if(!mysqli_stmt_prepare($stmt1,$sql1)){
    echo "wrong in stmt";
    
}
else{
    mysqli_stmt_bind_param($stmt1, "ssisssss", $name, $Email, $PhoneNumber, $Location, $Role, $uname, $hashpass, $Astatus);
    mysqli_stmt_execute($stmt1);
    header("location: index.php");
}}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles2.css">
</head>

<body style="background-color: #6DEED2;">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #1eb896;">
        <div class="container-fluid"><img src="assets/img/logo.png" style="width: 93px;height: 71px;">
            <div class="collapse navbar-collapse text-right" id="navcol-1"></div>
        </div>
    </nav>
    <div>
        <form id="SignUpForm" method="post"  style="margin-left: 0;background-color: #1eb896;padding: 29px;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"></div>
            <div class="form-group" style="padding: 3px;margin: 0;margin-top: 33px;margin-bottom: 20px;"><label>Username&nbsp; &nbsp;&nbsp;</label><input class="form-control" type="text" name="Username" style="background-color: #6deed2;" placeholder="Username"></div>
            <div class="form-group" style="margin-bottom: 20px;"><label>Password&nbsp; &nbsp; &nbsp;</label><input class="form-control" type="password" name="password" placeholder="Password" style="background-color: #6deed2;"></div>
            <div class="form-group" style="margin-bottom: 20;height: 22px;"><label>Name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</label><input class="form-control" type="text" style="width: 30%;display: inline-block;margin-bottom: 30px;background-color: #6deed2;" name="Fname" placeholder="First Name"><input class="form-control"
                    type="text" style="width: 30%;background-color: #6deed2;" name="Lname" placeholder="Last Name"></div>
            <div class="form-group" style="padding: 3px;margin: 0;margin-top: 33px;margin-bottom: 20px;"><label>E-mail&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label><input class="form-control" type="email" name="Email" placeholder="Email" style="background-color: #6deed2;"></div>
            <div class="form-group" style="padding: 3px;margin: 0;margin-top: 33px;margin-bottom: 20px;"><label>Location&nbsp; &nbsp; &nbsp;</label><input class="form-control" type="text" style="background-color: #6deed2;" name="Location" placeholder="Location Plus Code"><a href="https://support.google.com/maps/answer/7047426?co=GENIE.Platform%3DAndroid&amp;hl=en"><img src="assets/img/info.png" style="width: 40px;height: 40px;"></a></div>
            <div
                class="form-group" style="padding: 3px;margin: 0;margin-top: 33px;margin-bottom: 20px;"><label>Phone Number&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</label><input class="form-control" type="text" style="width: 50%;background-color: #6deed2;" name="PhoneNumber" placeholder="Phone Number (e,g 05********)"></div>
    <div class="form-group" style="padding: 3px;margin: 0;margin-top: 33px;margin-bottom: 20px;"><label>Choose a Role&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</label><select class="form-control" name="Role" style="width: 50%;background-color: #6deed2;"><optgroup  label="Choose a Role"><option value="Customer" selected="">Customer</option><option value="Driver">Delivery Man</option><option value="Staff">Store Staff</option></optgroup></select></div>
    <div
        class="form-group"><button class="btn btn-primary btn-block" name="submit" type="submit" style="width: 162px;padding-right: 0;padding-left: 0;margin-left: 0;margin-right: 43px;background-color: #6deed2;color: #070101;">Sign Up</button></div>
        </form>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>