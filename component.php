<?php


function component($productimg, $productprice, $productdescription,$productname, $productid){
	$element = "

		<div class=\"col-md-3 col-sm-6 my-3 my-pl-25 h-25\">
          <form action=\"catalog.php\" method=\"post\">
          	<div class=\"card shadow\">
          <div>
          <img src=\"$productimg\" alt=\"$productimg\" class=\"img-fluid card-img-top\">
          </div>
          <div class=\"card-body\">
          	<h4 class=\"card-title\">$productname</h4>
          <h6>
          	<i class=\"fas fa-star\"></i>
          	<i class=\"fas fa-star\"></i>
          	<i class=\"fas fa-star\"></i>
          	<i class=\"fas fa-star\"></i>
          	<i class=\"far fa-star\"></i>
          </h6>
          <p class=\"card-text\">$productdescription</p>
          <h6>
          	<center><h5 class=\"text-secondary\">$$productprice</h5></center>
          </h6>

          <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
               <input type='hidden' name='product_id' value='$productid'>
             </div>
          </div>
      </form>
	</div>

	";
	echo $element;
}


function cartElement($productimg, $productname, $productprice, $productid, $qty){
	$element = "


	<form action = \"cart.php?action=remove&ProductID=$productid\" method = \"post\" class=\"cart-items\">
        <div class = \"border rounded\">
            <div class = \"row bg-white\">
                <div class = \"col-md-3 pl-0\">
                    <img src = $productimg alt=\"image1\" class = \"img-fluid\">
                </div>
        <div class = \"col-md-9\">
            <h5 class = \"pt-2\">$productname</h5>
            <small class = \"text-secondary\"> Adults (+18)</small>
            <h5 class = \"pt-2\">$productprice</h5>
            <button type = \"submit\" class = \"btn btn-danger mx-2\" name = \"remove\">Remove Your Items</button>
            <input type=\"hidden\" name=\"qty\" value=\"<?php echo $qty; ?>\" />
            <button type=\"submit\" class=\"btn btn-success mx-2\" name = \"update\">Update Cart</button>
        </div>
        <div class = \"col-md-3 py-5\">
        <div>
<div>

        <span class=\"cart-quantity cart-header cart-column\">QTY:</span>
	 	<input type=\"number\" id=\"upcart\" name=\"qty\" value=\" echo $qty;\" min=\"0\" maxlength=\"4\" size=\"4\">

    </div>
    <script src=\"js/test.js\"></script>
    <script src=\"../js/update.js\"></script>

                </div>
               </div>
              </div>
            </div>
          </form>
	";
	echo $element;

}
