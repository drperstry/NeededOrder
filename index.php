<?php
include "config.php";


if(isset($_POST["email"]) && isset($_POST["password"])){
$PostedPass=$_POST["password"];
$password=mysqli_real_escape_string($link,$PostedPass);
$PostedEmail=$_POST["email"];
$Email=mysqli_real_escape_string($link,$PostedEmail);


$sql1="SELECT * FROM userdata WHERE email='".$PostedEmail."';";
$result= mysqli_query($link, $sql1);
$row = mysqli_fetch_assoc($result); //fetch data
$hashedpass=$row['mypass'];
$userType=$row['UType'];
$Astatus=$row['status'];
if(!password_verify($PostedPass, $hashedpass)){
    echo "wrong pass";
    header("location: index.php?error=WrongPassOrEmail");
    exit();
}
else if($Astatus<=>"Active"){
    header("location: index.php?error=banned");
}
else {
    echo "good pass";
    session_start();
    $_SESSION["email"]= $Email;
    $_SESSION["type"]= $userType;
    $_SESSION["id"]= $row['id'];
    header("location: ".$userType."/".$userType."HP.php");
    exit();
}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign In</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles2.css">
</head>

<body style="background-color: #6DEED2;">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #1eb896;">
        <div class="container-fluid"><img src="assets/img/logo.png" style="width: 93px;height: 71px;"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse text-right" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item text-right" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
        </div>
        </div>
    </nav>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;">Login</h2>
    
    <form id="LoginForm" method="post" style="background-color: #1eb896;padding: 29px;">
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration"></div>
        <div class="form-group" style="padding: 3px;margin: 0;margin-top: 33px;margin-bottom: 20px;"><label>E-mail&nbsp; &nbsp; &nbsp;</label><input class="form-control" type="email" name="email" placeholder="Email" style="background-color: rgb(109,238,210);"></div>
        <div class="form-group" style="margin-top: 50px;margin-bottom: 60px;"><label>Password</label><input class="form-control" type="password" name="password" placeholder="Password" style="background-color: rgb(109,238,210);"></div>
<<<<<<< HEAD:Index.php
        <div class="form-group" style="margin-bottom: 4px;"><a class="forgot" href="#" style="margin-left: 106px;">Forgot password?</a>
        <button class="btn btn-primary btn-block" name="submit" type="submit" style="width: 120px;padding-right: 0;padding-left: 0;margin-left: 20px;background-color: #6deed2;color: #070101;">login</button>
        <a class="btn btn-primary" role="button" href="SignUp.php" style="width: 120px;padding-right: 0;padding-left: 0;margin-left: 20px;background-color: rgb(109,238,210);color: rgb(33,37,41);">SignUp</a>
        </div>
=======
        <div class="form-group" style="margin-bottom: 4px;"><a class="forgot" href="#" style="margin-left: 106px;">Forgot password?</a><a class="btn btn-primary" role="button" href="Staff/StaffHP.php" style="width: 120px;padding-right: 0;padding-left: 0;margin-left: 106px;background-color: rgb(109,238,210);color: rgb(33,37,41);">Log In</a></div>
>>>>>>> 241e07ab2af16e6cf193e51f47b47eb5cac9b52b:index.php
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>