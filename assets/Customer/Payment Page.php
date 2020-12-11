<?php
include_once 'Header.php';
?>
    <div class="flex-shrink-1 flex-fill m-auto" style="width: 384px;background-color: #1eb896;height: 498px;margin: 0px;padding: 13px;">
        <form><label class="d-md-flex justify-content-md-center" style="font-size: 28px;"><strong>Card Information</strong></label>
            <div class="form-group">
                <div style="height: 320px;">
                    <div class="form-group" style="width: 250px;"><label>Card Number:</label><input class="form-control" type="text" placeholder="1234 5678 1234 5678"></div>
                    <div class="form-group"><label>Card Name:</label><input class="form-control" type="text" style="width: 250px;"></div>
                    <div class="form-group"><label>Expires end of:&nbsp;</label><input class="form-control" type="month" style="width: 135px;"></div>
                    <div class="form-group"><label>Authorized Signature:</label><input class="form-control" type="text" placeholder="123" style="width: 135px;"></div>
                </div>
            </div><a href="OrderInfoCustomer.php"><button class="btn btn-info btn-block d-lg-flex flex-shrink-1 mr-auto justify-content-lg-center" type="button" style="background-color: #6deed2;color: rgb(0,0,0);width: 70%;">Pay now</button></a></form>
    </div>
    <?php
include_once 'footer.php';
?>