<?php
include_once 'Header.php';
?>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;">Home Page</h2>
    <div>
        <form id="SignUpForm" method="post" style="background-color: #1eb896;padding: 29px;"><input class="form-control" type="search" placeholder="Search For a store/restaurant" style="background-color: rgb(109,238,210);">
            <ul class="list-group">
                <li class="list-group-item" style="padding-right: 0px;margin-top: 41px;"><a href="StorePageCustomer.php" style="color: rgb(0,0,0);">McDonald's</a><img id="Logo" src="../assets/img/McDonalds.png" style="width: 79px;margin: 0px;margin-right: 10px;"><label id="Description" style="width: 328px;font-size: 11px;margin-top: 16px;">Burgers, Fries &amp; More. Quality Ingredients.</label></li>
                <li
                    class="list-group-item" style="padding-right: 0px;margin-top: 25px;"><span>Burger King</span><img id="Logo" src="../assets/img/Burger%20King.png" style="width: 79px;margin-right: 10px;"><label id="Description" style="width: 328px;font-size: 11px;margin-top: 16px;">from Fire Grilled Burgers and Crispy Tenders to Sides and Deserts.</label></li>
                    <li
                        class="list-group-item" style="padding-right: 0px;margin-top: 25px;"><span>تموينات صالح</span><img id="Logo" src="../assets/img/Grocery%20Store.jpg" style="width: 127px;margin-right: 10px;"><label id="Description" style="width: 328px;font-size: 11px;margin-top: 16px;">جميع ما تريد من تموينات ومشروبات وحلويات وبطاطسات</label></li>
            </ul>
        </form>
    </div>
    <?php
include_once 'footer.php';
?>