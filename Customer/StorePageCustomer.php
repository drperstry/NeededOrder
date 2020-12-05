<?php
include_once 'Header.php';
?>
    <header class="bg-white" style="background-color: rgb(157,255,243);">
        <div style="background-color: #6deed2;color: rgb(0,143,100);margin: 0px;padding: 15px;"><img class="rounded-circle" src="../assets/img/MaC.png" width="100" height="100" style="margin-right: 3px;">
            <h1 class="text-center d-inline float-none align-items-center m-auto align-items-md-center">McDonald's</h1><a class="float-right d-sm-flex justify-content-sm-end align-items-sm-center" href="Customer%20HP.html"><i class="material-icons">arrow_back</i>Back</a></div>
    </header>
    <div>
        <h1 class="text-center d-inline float-none d-sm-flex align-items-center m-auto justify-content-sm-start align-items-md-center">Large Meal&nbsp;</h1>
        <div role="tablist" id="accordion-1">
            <div class="card">
                <div class="card-header my-auto" role="tab" style="background-color: #26ebc0;"><img class="float-left order-1 m-auto" style="height: 68px;width: 71px;" src="../assets/img/burger-chken.jpg">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1">Big Tasty</a><input class="float-right order-3 ml-auto" type="number" style="width: 67px;height: 52px;" min="0" max="10"
                            step="1" value="0"></h5><label class="float-right">25 SR&nbsp;</label></div>
                <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1" style="background-color: #6deed2;">
                    <div class="card-body">
                        <div><label class="mb-auto"><strong>Modify Your Sandwich</strong></label>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">without Lettuce</label></div>
                            <div class="form-check" style="background-color: #6deed2;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Onion</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Tomato</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Cheese</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Sauce</label></div>
                        </div>
                        <div><label class="d-md-flex mb-auto justify-content-md-start"><strong>Choose Drinks</strong></label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Drink" value="5"><label class="form-check-label" for="formCheck-3">Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Mirinda</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet 7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Orange Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Apple Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="0" checked=""><label class="form-check-label" for="formCheck-1">none</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header my-auto" role="tab" style="background-color: #26ebc0;"><img class="float-left order-1 m-auto" style="height: 68px;width: 71px;" src="../assets/img/burger-chken.jpg">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2">Grand Chicken</a><input class="float-right order-3 ml-auto" type="number" style="width: 67px;height: 52px;" min="0" max="10"
                            step="1" value="0"></h5><label class="float-right">25 SR&nbsp;</label></div>
                <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1" style="background-color: #6deed2;">
                    <div class="card-body">
                        <div><label class="mb-auto"><strong>Modify Your Sandwich</strong></label>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">without Lettuce</label></div>
                            <div class="form-check" style="background-color: #6deed2;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Onion</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Tomato</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Cheese</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Sauce</label></div>
                        </div>
                        <div><label class="d-md-flex mb-auto justify-content-md-start"><strong>Choose one Drink</strong></label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Drink" value="5"><label class="form-check-label" for="formCheck-3">Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Mirinda</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet 7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Orange Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Apple Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="0" checked=""><label class="form-check-label" for="formCheck-1">none</label></div>
                        </div>
                        <div><label class="d-md-flex mb-auto justify-content-md-start"><strong>Choose one</strong></label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Drink" value="5"><label class="form-check-label" for="formCheck-3">Special</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Spicy</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Deluxe</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header my-auto" role="tab" style="background-color: #26ebc0;"><img class="float-left order-1 m-auto" style="height: 68px;width: 71px;" src="../assets/img/burger-chken.jpg">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3" href="#accordion-1 .item-3">Big Mac</a><input class="float-right order-3 ml-auto" type="number" style="width: 67px;height: 52px;" min="0" max="10"
                            step="1" value="0"></h5><label class="float-right">19 SR&nbsp;</label></div>
                <div class="collapse item-3" role="tabpanel" data-parent="#accordion-1" style="background-color: #6deed2;">
                    <div class="card-body">
                        <div><label class="mb-auto"><strong>Modify Your Sandwich</strong></label>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">without Lettuce</label></div>
                            <div class="form-check" style="background-color: #6deed2;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Onion</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Tomato</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Cheese</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Sauce</label></div>
                        </div>
                        <div><label class="d-md-flex mb-auto justify-content-md-start"><strong>Choose Drinks</strong></label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Drink" value="5"><label class="form-check-label" for="formCheck-3">Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Mirinda</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet 7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Orange Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Apple Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="0" checked=""><label class="form-check-label" for="formCheck-1">none</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header my-auto" role="tab" style="background-color: #26ebc0;"><img class="float-left order-1 m-auto" style="height: 68px;width: 71px;" src="../assets/img/burger-chken.jpg">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-4" href="#accordion-1 .item-4">Chicken Mac</a><input class="float-right order-3 ml-auto" type="number" style="width: 67px;height: 52px;" min="0" max="10"
                            step="1" value="0"></h5><label class="float-right">21 SR&nbsp;</label></div>
                <div class="collapse item-4" role="tabpanel" data-parent="#accordion-1" style="background-color: #6deed2;">
                    <div class="card-body">
                        <div><label class="mb-auto"><strong>Modify Your Sandwich</strong></label>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">without Lettuce</label></div>
                            <div class="form-check" style="background-color: #6deed2;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Onion</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Tomato</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Cheese</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Sauce</label></div>
                        </div>
                        <div><label class="d-md-flex mb-auto justify-content-md-start"><strong>Choose Drinks</strong></label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Drink" value="5"><label class="form-check-label" for="formCheck-3">Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Mirinda</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet 7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Orange Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Apple Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="0" checked=""><label class="form-check-label" for="formCheck-1">none</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header my-auto" role="tab" style="background-color: #26ebc0;"><img class="float-left order-1 m-auto" style="height: 68px;width: 71px;" src="../assets/img/burger-chken.jpg">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-5" href="#accordion-1 .item-5">Mc Royale</a><input class="float-right order-3 ml-auto" type="number" style="width: 67px;height: 52px;" min="0" max="10"
                            step="1" value="0"></h5><label class="float-right">22 SR&nbsp;</label></div>
                <div class="collapse item-5" role="tabpanel" data-parent="#accordion-1" style="background-color: #6deed2;">
                    <div class="card-body">
                        <div><label class="mb-auto"><strong>Modify Your Sandwich</strong></label>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">without Lettuce</label></div>
                            <div class="form-check" style="background-color: #6deed2;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Onion</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Tomato</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Cheese</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Sauce</label></div>
                        </div>
                        <div><label class="d-md-flex mb-auto justify-content-md-start"><strong>Choose Drinks</strong></label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Drink" value="5"><label class="form-check-label" for="formCheck-3">Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Mirinda</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet 7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Orange Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Apple Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="0" checked=""><label class="form-check-label" for="formCheck-1">none</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h1 class="text-center d-inline float-none align-items-center m-auto align-items-md-center">Medium Meal</h1>
        <div role="tablist" id="accordion-2">
            <div class="card">
                <div class="card-header my-auto" role="tab" style="background-color: #26ebc0;"><img class="float-left order-1 m-auto" style="height: 68px;width: 71px;" src="../assets/img/burger-chken.jpg">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-2 .item-1" href="#accordion-2 .item-1">Big Tasty</a><input class="float-right order-3 ml-auto" type="number" style="width: 67px;height: 52px;" min="0" max="10"
                            step="1" value="0"></h5><label class="float-right">24 SR&nbsp;</label></div>
                <div class="collapse item-1" role="tabpanel" data-parent="#accordion-2" style="background-color: #6deed2;">
                    <div class="card-body">
                        <div><label class="mb-auto"><strong>Modify Your Sandwich</strong></label>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">without Lettuce</label></div>
                            <div class="form-check" style="background-color: #6deed2;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Onion</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Tomato</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Cheese</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Sauce</label></div>
                        </div>
                        <div><label class="d-md-flex mb-auto justify-content-md-start"><strong>Choose Drinks</strong></label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Drink" value="5"><label class="form-check-label" for="formCheck-3">Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Mirinda</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet 7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Orange Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Apple Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="0" checked=""><label class="form-check-label" for="formCheck-1">none</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header my-auto" role="tab" style="background-color: #26ebc0;"><img class="float-left order-1 m-auto" style="height: 68px;width: 71px;" src="../assets/img/burger-chken.jpg">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-2 .item-2" href="#accordion-2 .item-2">Grand Chicken</a><input class="float-right order-3 ml-auto" type="number" style="width: 67px;height: 52px;" min="0" max="10"
                            step="1" value="0"></h5><label class="float-right">24 SR&nbsp;</label></div>
                <div class="collapse item-2" role="tabpanel" data-parent="#accordion-2" style="background-color: #6deed2;">
                    <div class="card-body">
                        <div><label class="mb-auto"><strong>Modify Your Sandwich</strong></label>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">without Lettuce</label></div>
                            <div class="form-check" style="background-color: #6deed2;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Onion</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Tomato</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Cheese</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Sauce</label></div>
                        </div>
                        <div><label class="d-md-flex mb-auto justify-content-md-start"><strong>Choose one Drink</strong></label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Drink" value="5"><label class="form-check-label" for="formCheck-3">Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Mirinda</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet 7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Orange Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Apple Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="0" checked=""><label class="form-check-label" for="formCheck-1">none</label></div>
                        </div>
                        <div><label class="d-md-flex mb-auto justify-content-md-start"><strong>Choose one</strong></label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Drink" value="5"><label class="form-check-label" for="formCheck-3">Special</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Spicy</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Deluxe</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header my-auto" role="tab" style="background-color: #26ebc0;"><img class="float-left order-1 m-auto" style="height: 68px;width: 71px;" src="../assets/img/burger-chken.jpg">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-2 .item-3" href="#accordion-2 .item-3">Big Mac</a><input class="float-right order-3 ml-auto" type="number" style="width: 67px;height: 52px;" min="0" max="10"
                            step="1" value="0"></h5><label class="float-right">18 SR&nbsp;</label></div>
                <div class="collapse item-3" role="tabpanel" data-parent="#accordion-2" style="background-color: #6deed2;">
                    <div class="card-body">
                        <div><label class="mb-auto"><strong>Modify Your Sandwich</strong></label>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">without Lettuce</label></div>
                            <div class="form-check" style="background-color: #6deed2;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Onion</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Tomato</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Cheese</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Sauce</label></div>
                        </div>
                        <div><label class="d-md-flex mb-auto justify-content-md-start"><strong>Choose Drinks</strong></label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Drink" value="5"><label class="form-check-label" for="formCheck-3">Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Mirinda</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet 7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Orange Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Apple Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="0" checked=""><label class="form-check-label" for="formCheck-1">none</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header my-auto" role="tab" style="background-color: #26ebc0;"><img class="float-left order-1 m-auto" style="height: 68px;width: 71px;" src="../assets/img/burger-chken.jpg">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-2 .item-4" href="#accordion-2 .item-4">Chicken Mac</a><input class="float-right order-3 ml-auto" type="number" style="width: 67px;height: 52px;" min="0" max="10"
                            step="1" value="0"></h5><label class="float-right">20 SR&nbsp;</label></div>
                <div class="collapse item-4" role="tabpanel" data-parent="#accordion-2" style="background-color: #6deed2;">
                    <div class="card-body">
                        <div><label class="mb-auto"><strong>Modify Your Sandwich</strong></label>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">without Lettuce</label></div>
                            <div class="form-check" style="background-color: #6deed2;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Onion</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Tomato</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Cheese</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Sauce</label></div>
                        </div>
                        <div><label class="d-md-flex mb-auto justify-content-md-start"><strong>Choose Drinks</strong></label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Drink" value="5"><label class="form-check-label" for="formCheck-3">Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Mirinda</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet 7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Orange Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Apple Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="0" checked=""><label class="form-check-label" for="formCheck-1">none</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header my-auto" role="tab" style="background-color: #26ebc0;"><img class="float-left order-1 m-auto" style="height: 68px;width: 71px;" src="../assets/img/burger-chken.jpg">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-2 .item-5" href="#accordion-2 .item-5">Mc Royale</a><input class="float-right order-3 ml-auto" type="number" style="width: 67px;height: 52px;" min="0" max="10"
                            step="1" value="0"></h5><label class="float-right">21 SR&nbsp;</label></div>
                <div class="collapse item-5" role="tabpanel" data-parent="#accordion-2" style="background-color: #6deed2;">
                    <div class="card-body">
                        <div><label class="mb-auto"><strong>Modify Your Sandwich</strong></label>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">without Lettuce</label></div>
                            <div class="form-check" style="background-color: #6deed2;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Onion</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Tomato</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Cheese</label></div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Without Sauce</label></div>
                        </div>
                        <div><label class="d-md-flex mb-auto justify-content-md-start"><strong>Choose Drinks</strong></label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Drink" value="5"><label class="form-check-label" for="formCheck-3">Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Mirinda</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet Pepsi</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Diet 7 Up</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Orange Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="5"><label class="form-check-label" for="formCheck-1">Apple Juice</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="Drink" value="0" checked=""><label class="form-check-label" for="formCheck-1">none</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><a class="btn btn-info btn-block btn-lg float-none d-sm-flex flex-grow-1 flex-shrink-1 justify-content-sm-center" role="button" style="background-color: #1eb896;height: 46px;" href="DeliveryInfoPage.php">Submit Order</a>
    <?php
include_once 'footer.php';
?>