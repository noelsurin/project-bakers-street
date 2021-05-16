<?php
    $item_id = $_GET['item_id']??1;
    foreach($product->getData() as $item):
        if($item['item_id'] == $item_id):

            //request method post
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['product_submit'])){
                    //call method addToCart
                    $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
                }
            }
?>

<section id="product" class="py-3">
    <div class="container">
        <div class="row py-5">
            <div class="col-sm-6 text-end" >
                <img src="<?php echo $item['item_image']??"./assets/Inventory/Breads/baguette.jpeg" ?>" alt="product" class="img-fluid w-50" >
                <div class="form-row pt-4 font-size-16 font-quick">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control w-50 my-1">BUY NOW</button>
                    </div>
                    <div class="col">
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id']?? '1';?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if(in_array($item['item_id'], $Cart->getCartId($product->getData('cart'))?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control w-50 my-1">Already in Cart</button>';
                            }
                            else{
                                echo '<button type="submit" name="browse_submit" class="btn btn-warning font-size-16 form-control w-50 my-1">Add to Cart</button>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h5 class="font-quick font-size-75 d-flex"><?php echo $item['item_name']??"Unknown"?></h5>
                <div class="d-flex">
                    <div class="rating text-warning font-size-14">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <a href="#" class="text-decoration-none px-2 font-quick font-size-14">207 ratings</a>
                </div>

                <!-- product price-->
                <table class="my-3">
                    <tr class="font-size-14 font-quick">
                        <td class="px-0">M.R.P <strike>Rs. <?php echo $item['item_price'] * 1.3; ?></strike></td>
                    </tr>
                    <tr class="font-size-20 font-quick">
                        <td><strong>Discounted Price</strong></td>
                        <td><span class="text-danger font-size-30">&nbsp;Rs. <?php echo $item['item_price']?? 0?></span><small class="text-dark font-size-14">&nbsp;&nbsp;inclusive of all taxes</small></td>
                    </tr>
                </table>
                <!-- !product price-->

                <!--Policy-->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5 mx-4">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-fire border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-quick font-size-16 text-decoration-none">Freshly<br>Baked</a>
                        </div>
                        <div class="return text-center mr-5 mx-4">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-quick font-size-16 text-decoration-none">1 Day Delivery<br>Guaranteed</a>
                        </div>
                        <div class="return text-center mr-5 mx-4">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-quick font-size-16 text-decoration-none">Hygenic AF</a>
                        </div>
                    </div>
                </div>
                <!-- !Policy-->

                <!--Order details-->
                <div id="order-details" class="font-quick d-flex flex-column text-dark mt-3">
                    <small>Delivery By:  Apr 22</small>
                    <small><i class="fas fa-map-marker-alt color-second"></i>&nbsp;&nbsp;Deliver to Customer - 110091</small>
                </div>
                <!--!Order details-->

                <!--product qty-->
                <div class="row my-3 mt-5">
                    <div class="col-6">
                        <div class="qty d-flex">
                            <h6 class="font-quick">Qty</h6>
                            <div class="px-4 dflex font-quick">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-25 bg-light" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--!product qty-->

                <!--Pack size-->
                <div class="size my-4 mt-4">
                    <h6 class="font-quick">Pack Size:</h6>
                    <div class="d-flex justify-content-between w-50">
                        <div class="font-quick border p-2">
                            <button class="btn p-0 font-size-16">Pack of 4</button>
                        </div>
                        <div class="font-quick border p-2">
                            <button class="btn p-0 font-size-16">Pack of 6</button>
                        </div>
                        <div class="font-quick border p-2">
                            <button class="btn p-0 font-size-16">Pack of 8</button>
                        </div>
                    </div>
                </div>
                <!--!Pack size-->
            </div>

            <div class="col-12 mt-5">
                <h4 class="font-quick">Product Description</h4>
                <hr>
                <p class="font-quick font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque maximus
                    nisl ac arcu porttitor, eu sollicitudin tellus lobortis. Quisque justo sem, ultrices tempus purus id, volutpat
                    interdum dolor. Aliquam vestibulum nulla dapibus, sodales tortor lobortis, viverra felis. Interdum et malesuada
                    fames ac ante ipsum primis in faucibus. Ut convallis ligula lorem, non condimentum ipsum consequat et.
                    Nam vitae sapien ex. Sed nec condimentum dui, sed placerat ante. Curabitur eget enim lacinia, sodales lorem in,
                    elementum tortor. Curabitur nunc risus, commodo eleifend congue vitae, facilisis non mi. Nam luctus justo non
                    velit placerat sagittis. Nulla bibendum ornare purus. Sed quis fermentum urna, ac ullamcorper massa. Etiam quis
                    risus vel augue tincidunt mattis quis a nibh.</p>
                <p class="font-quick font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque maximus
                    nisl ac arcu porttitor, eu sollicitudin tellus lobortis. Quisque justo sem, ultrices tempus purus id, volutpat
                    interdum dolor. Aliquam vestibulum nulla dapibus, sodales tortor lobortis, viverra felis. Interdum et malesuada
                    fames ac ante ipsum primis in faucibus. Ut convallis ligula lorem, non condimentum ipsum consequat et.
                    Nam vitae sapien ex. Sed nec condimentum dui, sed placerat ante. Curabitur eget enim lacinia, sodales lorem in,
                    elementum tortor. Curabitur nunc risus, commodo eleifend congue vitae, facilisis non mi. Nam luctus justo non
                    velit placerat sagittis. Nulla bibendum ornare purus. Sed quis fermentum urna, ac ullamcorper massa. Etiam quis
                    risus vel augue tincidunt mattis quis a nibh.</p>
            </div>
        </div>
    </div>
</section>

<?php
endif;
endforeach;
?>