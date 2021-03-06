<?php
include_once 'Header.php';
?>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;">Manage Users</h2>
    <div class="card">
        <div class="card-header" style="background-color: #26EBC0;">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item"><a class="nav-link" href="userManagementStaff.php" style="background-color: #26ebc0;color: #003049;">Staff</a></li>
                <li class="nav-item"><a class="nav-link" href="userManagementDriver.php" style="color: #003049;">Driver</a></li>
                <li class="nav-item"><a class="nav-link active" href="userManagementCustomer.php" style="background-color: #1eb896;">Customer</a></li>
            </ul>
        </div>
        <div class="card-body" style="background-color: #1eb896;">
            <h4 class="card-title">Customer</h4>
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
                    <?php
                        include "../config.php";
                        $sql="SELECT * FROM userdata WHERE Utype= 'Customer'";
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
                    </tbody>
                </table>
                
        </div>
    </div>
    <?php
include_once 'footer.php';
?>