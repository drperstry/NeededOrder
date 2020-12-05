<?php
include_once 'Header.php';
?>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;background-color: #1eb896;">Home Page</h2>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;">Accepted Orders</h2>
    <div class="table-responsive border rounded-0" style="color: #1eb896;background-color: #1eb896;">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>From</th>
                    <th>to</th>
                    <th style="margin-right: 0px;">Customer Number</th>
                    <th style="margin-right: 0px;">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="OrderInfoDriver.php" style="color: #1e2833;">1002</a></td>
                    <td>7HRGC32P+F9<br></td>
                    <td>7HRGC32P+F9<br></td>
                    <td style="color: #212529;">+966503214642</td>
                    <td><select style="background-color: #6deed2;"><optgroup label="Change Status"><option value="1" selected="">just accpeted</option><option value="2">on the way</option><option value="3">cancel delivery</option></optgroup></select>
                        <button
                            class="btn btn-primary border rounded-0 border-primary" type="button" style="background-color: #6deed2;color: #212529;margin-left: 9px;">Update</button>
                    </td>
                </tr>
                <tr>
                    <td><a href="OrderInfoDriver.php" style="color: #1e2833;">1232</a></td>
                    <td>7HRA232P+F9<br></td>
                    <td>7HRGA22P+F9<br></td>
                    <td>+966501414642<br></td>
                    <td><select style="background-color: #6deed2;"><optgroup label="Change Status"><option value="1" selected="">just accpeted</option><option value="2">on the way</option><option value="3">cancel delivery</option></optgroup></select>
                        <button
                            class="btn btn-primary border rounded-0 border-primary" type="button" style="background-color: #6deed2;color: #212529;margin-left: 9px;">Update</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;margin-top: 33px;">New Orders</h2>
    <div class="table-responsive border rounded-0" style="color: #1eb896;background-color: #1eb896;">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>From</th>
                    <th>to</th>
                    <th>Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1312</td>
                    <td>7HRGC32P+F9<br></td>
                    <td>7HRGC32P+F9<br></td>
                    <td style="color: #212529;">15:23<br></td>
                    <td><button class="btn btn-primary border rounded-0 border-primary" type="button" style="background-color: #6deed2;color: #212529;">Take</button></td>
                </tr>
                <tr>
                    <td>1315</td>
                    <td>7HRGC32P+F9<br></td>
                    <td>7HRGC32P+F9<br></td>
                    <td>16:00<br></td>
                    <td><button class="btn btn-primary border rounded-0 border-primary" type="button" style="background-color: #6deed2;color: #212529;">Take</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
include_once 'footer.php';
?>