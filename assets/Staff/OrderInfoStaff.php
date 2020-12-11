<?php
include_once 'Header.php';
?>
    <h2 class="text-center" style="margin: 20px;margin-bottom: 30px;">Order Information</h2>
    <div>
        <form id="OrderInfoForm" method="post" style="margin-left: 0;background-color: rgba(109,238,210,0);padding: 18px;margin-top: 100px;">
            <ul class="list-group">
                <li class="list-group-item" style="padding: 4px;"><span></span>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>price(SAR)</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BigMac-SuperSize</td>
                                    <td>28</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Mc Florry</td>
                                    <td>9</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Delivery</td>
                                    <td colspan="2" text-align="right">8</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td colspan="2">45</td>
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