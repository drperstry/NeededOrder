<?php
include_once 'Header.php';
?>
    <div class="m-auto" style="background-color: #1eb896;width: 358px;margin: 4px;padding: 19px;">
        <h1 class="d-md-flex justify-content-md-center">Address Information</h1>
        <div>
            <form>
                <div class="form-group d-md-flex justify-content-md-start"><label>Street:<input class="form-control" type="text" style="background-color: rgb(109,238,210);"></label></div>
                <div class="form-group d-md-flex justify-content-md-start"><label class="d-inline-block">Bulding:<input class="form-control" type="text" style="background-color: rgb(109,238,210);"></label></div><label>More information<textarea class="form-control" style="width: 197px;background-color: rgb(109,238,210);"></textarea></label>
                <div
                    class="form-group"><select class="form-control" style="margin-right: 12px;background-color: rgb(109,238,210);margin-bottom: 11px;"><optgroup label="Order Time"><option value="12">Now</option><option value="13">Later on</option></optgroup></select>
                    <input
                        class="form-control" type="date" style="background-color: rgb(109,238,210);"></div><a class="btn btn-primary btn-block" role="button" style="background-color: #6deed2;color: rgb(0,0,0);width: 136px;" href="PaymentMethod.php">procced</a></form>
    </div>
    </div>
    <?php
include_once 'footer.php';
?>