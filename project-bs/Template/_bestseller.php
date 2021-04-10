<?php
 $product_shuffle = $bestseller->getData();
?>

<!--Shop by Bestseller-->
<section id="category">
    <div class="container py-5">
        <section id="category">
            <p class=" mb-5 py-2 px-4 text-center font-size-100 font-quick">BESTSELLERS</p>
            <hr>

            <!--Owl Carousel-->
            <div class="owl-carousel owl-theme justify-content-between">
                <?php foreach($product_shuffle as $item){?>
                <div class="item py-2 px-2">
                    <div class="product font-quick">
                        <a href="#"><img src="<?php echo $item['item_image']??"./assets/Inventory/Cakes/cheesecake.jpeg";?>" class="w-100" alt="cheesecake"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name']??"Unknown";?></h6>
                            <div class="rating text-warning font-size-14">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>

                            <div class="price py-2">
                                <span>Rs.<?php echo $item['item_price']??'0'?></span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-14 color-pink-second-bg">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <!--!Owl Carousel-->

    </div>

</section>
<!-- !Shop by Bestseller-->