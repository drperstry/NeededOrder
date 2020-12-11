<?php
include_once 'Header.php';
?>
    <div>
        <h1 class="d-md-flex justify-content-md-center" style="margin-bottom: 15px;">Add items</h1>
        <div>
            <div class="table-responsive" style="background-color: #1eb896;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Item Name</th>
                            <th style="width: 180px;">Item ID</th>
                            <th style="width: 180px;">Item Type</th>
                            <th style="width: 120px;">Price</th>
                            <th style="width: 140px;">Discount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="file" style="width: 210px;" accept="image/*"></td>
                            <td><input type="text" style="width: 80%;background-color: #ffffff;">&nbsp;</td>
                            <td><input type="text" style="width: 80%;color: #6deed2;">&nbsp;</td>
                            <td><input type="text" style="width: 80%;">&nbsp;</td>
                            <td>&nbsp;<input type="number" style="width: 80%;" min="0" max="500"></td>
                            <td>&nbsp;<input type="number" style="width: 80%;" min="0" max="100"></td>
                            <td><button class="btn btn-info btn-block" type="button" style="background-color: #6deed2;color: #1e2833;">Add</button>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h1 class="d-md-flex justify-content-md-center" style="margin-bottom: 24px;margin-top: 34px;">Manage items</h1>
            <div class="table-responsive table-bordered" style="background-color: #1eb896;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Item Name</th>
                            <th style="width: 180px;">Item ID</th>
                            <th style="width: 180px;">Item Type</th>
                            <th style="width: 120px;">Price</th>
                            <th style="width: 140px;">Discount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="../assets/img/burger-chken.jpg" style="width: 65%;height: 23%;"></td>
                            <td>Big Mac</td>
                            <td>&nbsp;1</td>
                            <td>Chicken Burger Meal</td>
                            <td><input type="number" style="width: 80%;" min="0" max="500"></td>
                            <td><input type="number" style="width: 80%;" min="0" max="100"></td>
                            <td><button class="btn btn-info btn-block" type="button" style="background-color: #6deed2;color: #1e2833;">Delete</button>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
include_once 'footer.php';
?>