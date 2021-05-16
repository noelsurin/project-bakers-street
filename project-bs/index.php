<?php
    ob_start();
    //include header.php file
    include("header.php");
?>

<?php
    /*include banner area*/
    include("Template/_banner-area.php");
    /*include banner area*/

    /*include introduction area*/
    include("Template/_introduction.php");
    /*include introduction area*/
?>
<form class="mt-5 mb-5 py-4 px-4 text-center font-size-40 font-rale bg-white" action="#">
    <button type="submit" class="bg-light"><a href="./shop-now.php" class="text-decoration-none text-dark">SHOP NOW</a></button>
</form>
<?php
    /*include category area*/
    include("Template/_category.php");
    /*include category area*/

    /*include design area*/
    include("Template/_design.php");
    /*include design area*/

    /*include bestseller area*/
    include("Template/_bestseller.php");
    /*include bestseller area*/

    /*include testimonials area*/
    include("Template/_testimonials.php");
    /*include testimonials area*/
?>

<?php
    //include footer.php file
    include("footer.php");
?>
