<?php
include_once 'Header.php';
?>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;">Home Page</h2><label>Store Status :&nbsp;</label><select><optgroup label="Status of Store"><option value="12" selected="">Closed</option><option value="14">Opened</option></optgroup></select>
    <div class="card"></div>
    <div class="table-responsive border rounded-0" style="color: #1eb896;background-color: #1eb896;">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>From</th>
                    <th style="margin-right: 0px;">Customer Number</th>
                    <th>Total Price (SAR)</th>
                    <th style="margin-right: 0px;">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1102</td>
                    <td>Abdulmajeed Alshaya<br></td>
                    <td style="color: #212529;">+966503214642</td>
                    <td>108</td>
                    <td><button class="btn btn-primary border rounded-0 border-primary" type="button" style="background-color: #6deed2;color: #212529;margin-left: 9px;">Accept Order</button><button class="btn btn-primary border rounded-0 border-primary" type="button"
                            style="background-color: #6deed2;color: #212529;margin-left: 9px;">Reject Order</button></td>
                </tr>
                <tr>
                    <td>3423</td>
                    <td>Abdulrahman alhuwais<br></td>
                    <td>+966501414642<br></td>
                    <td>1502</td>
                    <td><button class="btn btn-primary border rounded-0 border-primary" type="button" style="background-color: #6deed2;color: #212529;margin-left: 9px;">Accept Order</button><button class="btn btn-primary border rounded-0 border-primary" type="button"
                            style="background-color: #6deed2;color: #212529;margin-left: 9px;">Reject Order</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
include_once 'footer.php';
?>