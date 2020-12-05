<?php
include_once 'Header.php';
?>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;margin-top: 0px;">Recent Orders</h2>
    <div class="table-responsive border rounded-0" style="color: #1eb896;background-color: #1eb896;">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Store</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1312</td>
                    <td>KFC<br></td>
                    <td>1/3/2019</td>
                    <td style="color: #212529;">15:23<br></td>
                    <td style="color: #212529;">221 SAR<br></td>
                    <td>Delivered</td>
                </tr>
                <tr>
                    <td>3215</td>
                    <td>Mac<br></td>
                    <td>11/12/2020<br></td>
                    <td>00:01<br></td>
                    <td>123 SAR<br></td>
                    <td>on the way</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
include_once 'footer.php';
?>