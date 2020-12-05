<?php
include_once 'Header.php';
?>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;">Profile</h2>
    <form class="bootstrap-form-with-validation" style="margin: 0px;padding: 0px;margin-right: 0px;margin-left: 68px;">
        <div class="form-group border-primary"><label for="text-input" style="margin-right: 58px;">PhoneNumber</label><input class="form-control" type="text" id="text-input" name="text-input" style="width: 243px;margin-bottom: 0px;margin-left: 0px;background-color: rgb(30,184,150);" placeholder="sami112"></div>
        <div
            class="form-group"><label for="password-input" style="margin-right: 71px;">Password</label><input class="form-control" type="password" id="password-input" name="password-input" style="width: 250px;margin-right: 0px;background-color: rgb(30,184,150);" placeholder="*****"></div>
            <div
                class="form-group"><label for="password-input" style="margin-right: 94px;">Name</label><input class="form-control" type="text" id="text-input-1" name="text-input" style="width: 142px;margin-right: 35px;margin-left: 0px;margin-bottom: 9px;background-color: rgb(30,184,150);color: rgb(33,37,41);"
                    placeholder="sami"><input class="form-control" type="text" id="text-input-2" name="text-input" style="width: 144px;color: #212529;background-color: rgb(30,184,150);" placeholder="alhuwais"></div>
                <div class="form-group"><label for="email-input" style="margin-right: 46px;">E-mail</label><input class="form-control" type="email" id="email-input" name="email-input" style="width: 252px;background-color: rgb(30,184,150);" placeholder="sami@gmail.com"></div>
                <div
                    class="form-group"><label for="text-input" style="margin-right: 58px;">Location</label><input class="form-control" type="text" id="text-input" name="text-input" style="width: 243px;margin-bottom: 0px;margin-left: 0px;background-color: rgb(30,184,150);color: #212529;"
                        placeholder="1324SARW"></div>
                    <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(30,184,150);color: #212529;">Update</button></div>
    </form>
    <?php
include_once 'footer.php';
?>