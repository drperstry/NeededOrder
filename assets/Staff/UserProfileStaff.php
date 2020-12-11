<?php
session_start();
include_once 'Header.php';
include "../config.php";
$sql="SELECT * FROM userdata WHERE id='".$_SESSION["id"]."'";
$result= mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
?>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;">Profile</h2>


    <form method="post" class="bootstrap-form-with-validation" style="margin: 0px;padding: 0px;margin-right: 0px;margin-left: 68px;">
        <div class="form-group border-primary"><label for="Phone-input" style="margin-right: 34px;">PhoneNumber</label>
        <?php
        echo '<input name="Phone-input" id="Phone-input" style="width: 243px;background-color: rgb(30,184,150);" placeholder="'.$row['phonenumber'].'">';
        ?>
        </div>
        <div class="form-group"><label for="password-input" style="margin-right: 70px;">Password</label>
        <input name="password-input" id="password-input" style="width: 243px;background-color: rgb(30,184,150);">
        <div class="form-group"><label for="name-input" style="margin-right: 94px;">Name</label>
        <?php
        echo '<input name="name-input" id="name-input" style="width: 243px;background-color: rgb(30,184,150);" placeholder="'.$row['name'].'">';
        ?>
        </div>
        <div class="form-group">
        <label for="email-input" style="margin-right: 94px;">E-mail</label>
        <?php
        echo '<input name="email-input" id="email-input" style="width: 243px;background-color: rgb(30,184,150);" placeholder="'.$row['email'].'">';
        ?>
        </div>
        <div class="form-group">
        <label for="location-input" style="margin-right: 80px;">Location</label>
        <?php
        echo '<input name="location-input" id="location-input" style="width: 243px;background-color: rgb(30,184,150);" placeholder="'.$row['PlustCode'].'">';
        ?>
        <div class="form-group">
        <button class="btn btn-primary" type="submit" style="margin-left:100px;background-color: rgb(30,184,150);color: #212529;">Update</button></div>
    </form>
    <?php
include_once 'footer.php';
?>