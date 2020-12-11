<?php
include_once 'Header.php';
?>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;">Generate report</h2>
    <div class="card">
        <div class="card-header" style="background-color: #26EBC0;">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item"><a class="nav-link" href="GenerateReportStaff.php" style="background-color: rgba(30,184,150,0);color: #495057;">Staff</a></li>
                <li class="nav-item"><a class="nav-link" href="GenerateReportDriver.php" style="color: #495057;width: 102px;">Driver</a></li>
                <li class="nav-item"><a class="nav-link active" href="GenerateReportCustomer.php" style="background-color: #1eb896;color: #495057;">Customer</a></li>
            </ul>
        </div>
        <div class="card-body" style="background-color: #1eb896;">
            <h4 class="card-title">Customer</h4>
            <p class="card-text">Generate report for&nbsp;<input type="date" style="color: #003049;background-color: #6deed2;"></p><button class="btn btn-primary" type="button" style="background-color: #6deed2;color: #003049;">Generate</button></div>
    </div>
    <?php
include_once 'footer.php';
?>