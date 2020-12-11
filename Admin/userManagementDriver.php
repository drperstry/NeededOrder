<?php
include_once 'Header.php';
?>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;">Manage Users</h2>
    <div class="card">
        <div class="card-header" style="background-color: #26EBC0;">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item"><a class="nav-link" href="userManagementStaff.php" style="background-color: #26ebc0;color: #003049;">Staff</a></li>
                <li class="nav-item"><a class="nav-link active" href="userManagementDriver.php" style="background-color: #1eb896;">Driver</a></li>
                <li class="nav-item"><a class="nav-link" href="userManagementCustomer.php" style="color: #003049;">Customer</a></li>
            </ul>
        </div>
        <div class="card-body" style="background-color: #1eb896;">
<<<<<<< HEAD
            <h4 class="card-title">Driver</h4>
=======
            <h4 class="card-title">Driver<label class="text-left" style="margin-left: 31px;margin-bottom: 8px;margin-right: 0px;font-size: 16px;">Search&nbsp;&nbsp;<input class="border rounded-0 border-primary" type="search" style="width: 155px;background-color: #6deed2;" autofocus="" autocomplete="on"></label></h4>
>>>>>>> 241e07ab2af16e6cf193e51f47b47eb5cac9b52b
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
<<<<<<< HEAD
                    <?php
                        include "../config.php";
                        $sql="SELECT * FROM userdata WHERE Utype= 'Driver'";
                        $result= mysqli_query($link, $sql);
                        $otherstatus="Active";
                            while($row = mysqli_fetch_assoc($result)){
                                if($row['status'] <=> "banned"){
                                $otherstatus="banned";
                                }
                                else{
                                $otherstatus="Active";
                                }
                                echo "<tr>";
                                echo "<form method='post' action='ChangeUsersTable.php'>";
                                echo "<td>";
                                echo "<input type='text' name='Username' value='".$row['Username']."'placeholder='".$row['Username']."'";
                                echo "</td>";
                                echo "<td>"; 
                                echo "<select name='status' style='background-color: #6deed2;'>";
                                echo "<optgroup label='Change Status'>";
                                echo "<option value='".$row['status']."' >".$row['status']."</option>";
                                echo "<option value='".$otherstatus."' >".$otherstatus."</option>";
                                echo "</optgroup>";
                                echo "</select>";
                                echo "<button name='submit' type='submit'>Change status</button>";
                                echo "</td>";
                                echo "</form>";
                                echo "</tr>";
                                echo "</tbody>";
                                echo "</table>";
                                }
?>
=======
                        <tr>
                            <td>Ahmed123</td>
                            <td><select style="background-color: #6deed2;"><optgroup label="Change Status"><option value="1" selected="">Active</option><option value="2">ban</option></optgroup></select></td>
                        </tr>
                        <tr>
                            <td>Salem212</td>
                            <td><select style="background-color: #6deed2;"><optgroup label="Change Status"><option value="1" selected="">Active</option><option value="2">ban</option></optgroup></select></td>
                        </tr>
>>>>>>> 241e07ab2af16e6cf193e51f47b47eb5cac9b52b
                    </tbody>
                </table>
        </div>
    </div>
    <?php
include_once 'footer.php';
?>