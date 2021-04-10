<?php
    $product_shuffle = $product->getData();
?>

<section id="bestseller">
    <p class=" mb-5 py-2 px-4 text-center font-size-100 font-quick">PRODUCTS</p>
    <div class="container d-flex">
        <div id="filter" class="col-sm-2 button-group text-right font-quick grid">
            <p class="font-size-30 font-quick"><strong>&nbspSort By:</strong></p><br>
            <button class="btn is-checked" data-filter="*">All Categories</button><br>
            <button class="btn" data-filter=".cake">Cakes</button><br>
            <button class="btn" data-filter=".muffin">Muffins</button><br>
            <button class="btn" data-filter=".bread">Breads</button><br>
            <button class="btn" data-filter=".cookie">Cookies</button><br>
            <button class="btn" data-filter=".pie">Pies</button><br>
            <button class="btn" data-filter=".brownie">Brownies</button><br>
            <button class="btn" data-filter=".other">Others & Specials</button><br>
        </div>

        <!--Product Line-->
        <div class="grid col-sm-10">
            <?php array_map(function($item){?>
            <div class="grid-item m-2 border <?php echo $item['item_category'];?>">
                <div class="item py-2 px-2" style="width:200px;">
                    <div class="product font-quick">
                        <a href="#"><img src="<?php echo $item['item_image']??"./assets/Inventory/Other%20&%20Specials/chefspecial.jpeg";?>" class="w-100" alt="chefspecial"></a>
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
            </div>
            <?php },$product_shuffle)?>
        </div>
        <!--!Product Line-->
    </div>
</section>