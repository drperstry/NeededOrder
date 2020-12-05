<?php
include_once 'Header.php';
?>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;">Manage Users</h2>
    <div class="card">
        <div class="card-header" style="background-color: #26EBC0;">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item"><a class="nav-link active" href="userManagementStaff.php" style="background-color: #1eb896;">Staff</a></li>
                <li class="nav-item"><a class="nav-link" href="userManagementDriver.php" style="background-color: #26ebc0;color: #003049;">Driver</a></li>
                <li class="nav-item"><a class="nav-link" href="userManagementCustomer.php" style="color: #003049;">Customer</a></li>
            </ul>
        </div>
        <div class="card-body" style="background-color: #1eb896;">
            <h4 class="card-title">Staff<label class="text-left" style="margin-left: 31px;margin-bottom: 8px;margin-right: 0px;font-size: 16px;">Search&nbsp;&nbsp;<input class="border rounded-0 border-primary" type="search" style="width: 155px;background-color: #6deed2;" autofocus="" autocomplete="on"></label></h4>
            <div
                class="table-responsive border rounded-0 shadow-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th>UserName</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mac#2214</td>
                            <td><select style="background-color: #6deed2;"><optgroup label="Change Status"><option value="1" selected="">Active</option><option value="2">ban</option></optgroup></select></td>
                        </tr>
                        <tr>
                            <td>KFC#1242</td>
                            <td><select style="background-color: #6deed2;"><optgroup label="Change Status"><option value="1" selected="">Active</option><option value="2">ban</option></optgroup></select></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
    </div>
    <?php
include_once 'footer.php';
?>