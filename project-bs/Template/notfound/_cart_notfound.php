
<!--shopping cart-->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-quick font-size-40">SHOPPING CART</h5>

        <!--Shopping Cart Item-->
        <div class="row">
            <div class="col-sm-9">
                <!--Empty Cart-->
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-12 text-center py-2">
                            <img src="./assets/empty-cart-png-Transparent-Images.png" alt="empty-cart" class="img-fluid text-center" style="height: 200px;">
                        </div>
                    </div>
                <!--!Empty Cart-->
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