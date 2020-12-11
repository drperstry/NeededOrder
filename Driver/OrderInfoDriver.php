<?php
include_once 'Header.php';
?>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 128px;">Order Information</h2>
    <div>
        <form id="OrderInfoForm" method="post" style="margin-left: 0;background-color: rgba(109,238,210,0);padding: 29px;">
            <ul class="list-group" style="margin-bottom: 262px;">
                <li class="list-group-item" style="height: 400px;padding-right: 0px;margin-top: 41px;"><img id="Logo" src="../assets/img/McDonalds.png" style="width: 79px;">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Abdulmajeed</th>
                                    <th>Alshaya</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ordered From</td>
                                    <td>McDonald's</td>
                                </tr>
                                <tr>
                                    <td>Plus Code</td>
                                    <td>XFZX213XDSXC<br></td>
                                </tr>
                                <tr>
                                    <td>Payment Method</td>
                                    <td>Cash On Delivery</td>
                                </tr>
                                <tr>
                                    <td>Total Price</td>
                                    <td>45</td>
                                </tr>
                                <tr>
                                    <td id="OrderInfo" colspan="2" style="font-size: 24px;">O R D E R&nbsp; &nbsp;I N F O R M A T I O N</td>
                                </tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="list-group-item"><span></span>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Amount</th>
                                    <th>price(SAR)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BigMac-SuperSize</td>
                                    <td>1</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>Mc Florry</td>
                                    <td>1</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Delivery</td>
                                    <td>8</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
            </ul>
        </form>
    </div>
    <?php
include_once 'footer.php';
?>