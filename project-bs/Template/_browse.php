<?php
$product_shuffle = $product->getData();
shuffle($product_shuffle);

//request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['browse_submit'])){
        //call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<!--Shop by Bestseller-->
<section id="category">
    <div class="container py-5">
        <section id="category">
            <p class=" mb-5 py-2 px-4 text-center font-size-100 font-quick">BROWSE</p>
            <hr>

            <!--Owl Carousel-->
            <div class="owl-carousel owl-theme justify-content-between">
                <?php foreach($product_shuffle as $item){?>
                    <div class="item py-2 px-2">
                        <div class="product font-quick">
                            <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']);?>"><img src="<?php echo $item['item_image']??"./assets/Inventory/Cakes/cheesecake.jpeg";?>" class="w-100" alt="cheesecake"></a>
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
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']?? '1';?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                    <?php
                                    if(in_array($item['item_id'], $Cart->getCartId($product->getData('cart'))?? [])){
                                        echo '<button type="submit" disabled class="btn btn-success font-size-14 color-pink-second-bg">Already in Cart</button>';
                                    }
                                    else{
                                        echo '<button type="submit" name="browse_submit" class="btn btn-warning font-size-14 color-pink-second-bg">Add to Cart</button>';
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <!--!Owl Carousel-->

    </div>

</section>
<!-- !Shop by Bestseller-->