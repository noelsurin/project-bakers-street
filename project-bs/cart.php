<?php
ob_start();
//include header.php file
include("header.php");

?>

<?php

/*include cart if it is not empty*/
count($product->getData('cart')) ? include("Template/_cart.php") : include("Template/notfound/_cart_notfound.php");
/*include cart if it is not empty*/

/*include design area*/
include("Template/_design.php");
/*include design area*/

/*include browse area*/
include("Template/_browse.php");
/*include browse area*/

?>

<?php
//include footer.php file
include("footer.php");
?>
