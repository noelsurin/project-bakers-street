<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }
    }
?>

<!--shopping cart-->
<section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 class="font-quick font-size-40">SHOPPING CART</h5>

                <!--Shopping Cart Item-->
                <div class="row">
                    <div class="col-sm-9">
                        <?php
                            foreach($product->getData('cart') as $item):
                                $cart = $product->getProduct($item['item_id']);
                                $subTotal[] = array_map(function($item){
                        ?>
                        <!--Cart Item-->
                        <div class="row border-top py-2 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image']??"./assets/Inventory/Breads/baguette.jpeg"?>" alt="cart" class="img-fluid w-100">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-quick font-size-30"><?php echo $item['item_name']?? "Unknown";?></h5>
                                <!--Product Rating-->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-14">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-quick font-size-14">203 Ratings</a>
                                </div>
                                <!--!Product Rating-->

                                <!--Product Qty-->
                                <div class="qty d-flex mt-5 pt-2">
                                    <div class="d-flex font- w-25 font-rale">
                                        <button class="qty-up border bg-light" data-id="<?php echo $item['item_id']?? '0';?>"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="<?php echo $item['item_id']?? '0';?>" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                        <button class="qty-down border bg-light" data-id="<?php echo $item['item_id']?? '0';?>"><i class="fas fa-angle-down"></i></button>
                                    </div>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id']?? 0;?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn font-quick text-danger px-3 border-right">Delete</button>
                                    </form>

                                    <button type="submit" class="btn font-quick text-danger px-3">Save for Later</button>
                                </div>
                                <!--!Product Qty-->
                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-quick">
                                    Rs.<span class="product_price" data-id="<?php echo $item['item_id']?? '0';?>"><?php echo $item['item_price']?? 0;?></span>
                                </div>
                            </div>
                        </div>
                        <!--!Cart Item-->
                        <?php
                                    return $item['item_price'];
                            },$cart); //closing array map function
                          endforeach;
                        ?>
                    </div>
                    <!--Subtotal-->
                    <div class="col-sm-3">
                        <div class="sub-total border text-center mt-2">
                            <h6 class="font-rale font-size-12 text-success py-3"><i class="fas fa-check"></i> Order is eligible for FREE Delivery</h6>
                            <div class="border-top py-4">
                                <h5 class="font-quick font-size-20">Subtotal(<?php echo isset($subTotal) ? count($subTotal) : 0; ?> Items):&nbsp;<span class="text-danger">Rs.<span class="text-danger" id="deal-price"><?php echo isset($subTotal)? $Cart->getSum($subTotal): 0;?></span></span></h5>
                                <button type="submit" class="btn btn-warning mt-3 color-pink-bg">Proceed to Buy</button>
                            </div>
                        </div>
                    </div>
                    <!--!Subtotal-->
                </div>
                <!--!Shopping Cart Item-->
            </div>
        </section>
        <!--!shopping cart-->