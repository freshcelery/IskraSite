<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Iskra CSS -->
<link rel="stylesheet" type="text/css" href="CSS/Iskra.css">

<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<!-- nyroModal Javascript and CSS -->
<link rel="stylesheet" href="Javascript/jquery.nyroModal/styles/nyroModal.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="Javascript/jquery.nyroModal/js/jquery.nyroModal.custom.min.js"></script>
<!--[if IE 6]>
	<script type="text/javascript" src="js/jquery.nyroModal-ie6.min.js"></script>
<![endif]-->

<script type="text/javascript">
$(function() {
  $('.nyroModal').nyroModal();
});//end loading of nyromodal


$(function(){

	var currentPic = '';

	$('.nyroModal').click(function(){
		var picture = '';
		picture = $('#store_image').attr('src');
		$('.store_checkout_image').attr('src', picture);
	});

	$('.fade_store').mouseover(function(){

		var currentPic = $(this).attr('src');
		$('.fade_store').fadeTo(0.15);
		$(this).parent().parent().find('.store_checkout_image').eq(0).attr('src', currentPic);
	});//end mouseover

	$('.currentItem').mouseout(function(){
		$('.fade_store').fadeTo(1);
	});//end mouseout

});//end function

// Fat Free Checkout javascript
function EJEJC_lc(th) { return false; }
</script>
<script type="text/javascript" src="https://www.e-junkie.com/ecom/box.js"></script>

</head>

<title> Iskra Crust </title>

<body>
<div id="container">
<div id="header">
	<img id="head" src="Images/IskraLogo1.png">
	<!-- VIEW CART button code. -->
	<div id="checkout_div"> 
		<form action="https://www.e-junkie.com/ecom/fgb.php?c=cart&cl=1&ejc=2&merchant_id=your_google_merchant_id&business=your_paypal_email">
			<input type="button" value="Checkout" target="ej_ejc" class="ec_ejc_thkbx" onClick="javascript:return EJEJC_lc(this);" />
		</form>
	</div>
</div>

<div id="navbar">
<a class="button" href="front.html">Home</a>
<a class="button" href="store.html">Merch</a>
<a class="button" href="bio.html">Bio</a>
<a class="button" href="media.html">Media</a>
<a class="button" href="contact.html">Contact Us</a>
</div>

<div id="main">
<?php

	for($i=0;$i<4;$i++){
	echo "<div id='storefront'>";
		echo"<a class='nyroModal' rel='group' href='#shop'><img id='store_image' src='Images/test-shirt.jpg' alt='Bureval Shirt'/></a>";
		echo"Bureval T-shirt";
		echo"<br />";
		echo"$20.00";

	echo"<div id='shop' class='shop' style='display: none; width: 800px;'>";
		echo"<div id='store_checkout_title'>";
			echo"Bureval T-shirt";
		echo"</div>";
		echo"<div id='store_checkout_border'>";
			echo"<div id='store_checkout_image_div'>";
				echo"<img id='big_store_image_".$i."' default-image='Images/test-shirt.jpg' src='Images/test-shirt.jpg' alt='Bureval Shirt' class='store_checkout_image'/>";
				echo"<div id='small_images'>";
					echo"<img id='store_image_1' src='Images/placeholder1.jpg' alt='Front' class='fade_store'/>";
					echo"<img id='store_image_2' src='Images/test-shirt.jpg' alt='Back' class='fade_store'/>";
				echo"</div>";
			echo"</div>";
			echo"<div id='store_checkout'>";

				echo"<!-- ADD TO CART button code. -->";
				echo"<form action='https://www.e-junkie.com/ecom/fgb.php?c=cart&cl=1&ejc=2' target='ej_ejc' method='POST'>";

				echo"<div id='checkout_options'>";	

				echo"<!-- paypal email(remove if not using PayPal) -->";
				echo"<input type='hidden' name='business' value='iskracrust@mail.com'/>";
		
				echo"<!-- site url -->";
				echo"<input type='hidden' name='site_url' value='http://www.iskracrust.com'/>";

				echo"<!-- contact email (where we can notify of the updates) -->";
				echo"<input type='hidden' name='contact_email' value='iskracrust@mail.com'/>";
				echo"<p>$20.00 CAN</p>";
				echo"<!-- item options (can be removed if not required) -->";
				echo"<label>Size</label>";
				echo"<input type='hidden' name='on0' value='Size'/>";
					echo"<select name='os0' >";
						echo"<option value='Small'>Small</option>";
						echo"<option value='Medium'>Medium</option>";
						echo"<option value='Large'>Large</option>";
					echo"</select>";
				echo"<br />";
				echo"<label>Colour</label>";
					echo"<input type='hidden' name='on1' value='Color'/>";
					echo"<select name='os1'>";
						echo"<option value='Black'>Black</option>";
						echo"<option value='Gray'>Gray</option>";
						echo"<option value='White'>White</option>";
					echo"</select>";
			
					echo"<!-- item name -->";
					echo"<input type='hidden' name='item_name' value='Bureval_Shirt'/>";
					
					echo"<!-- item number (should be different for each product)-->";
					echo"<input type='hidden' name='item_number' value='1'/>";
		
					echo"<!-- item price -->";
					echo"<input type='hidden' name='amount' value='20.00'/>";
					echo"<br />";
					
					echo"<label>Quantity</label>";
					echo"<!-- initial quantity -->";
					echo"<input  type='hidden' name='quantity' value='1'/>";
					echo"<select name='quantity'>";
						echo"<option value='1'>1</option>";
						echo"<option value='2'>2</option>";
						echo"<option value='3'>3</option>";
						echo"<option value='4'>4</option>";
						echo"<option value='5'>5</option>";
					echo"</select>";
					echo"<br />";
					
					echo"</div>";
					echo"<div id='item_description'>";
					echo"<p> This is a fucking t-shirt, dipshit! </p>";
					echo"</div>";

					echo"<div id='add_to_cart'>";
					echo"<!-- currency (USD for Google Checkout USA, GBP for Google Checkout UK. For PayPal: any currency that PayPal supports -->";
					echo"<input type='hidden' name='currency_code' value='CAD'/>";
					echo"<input type='button' value='Add to cart' id='add_to_cart_button' onClick='javascript:return EJEJC_frm(this);'>";
				
					echo"</div>";
				echo"</form>";
			echo"</div>";
		echo"</div>";
	echo"</div>";
echo"</div>";
}
?>
</div>

<div id="audiobar">
<iframe style="border: 0; width: 100%; height: 100%;" src="http://bandcamp.com/EmbeddedPlayer/album=4077876054/size=large/bgcol=333333/linkcol=ffffff/transparent=true/" seamless><a href="http://iskracrust.bandcamp.com/album/european-tour-demo">European Tour Demo by Iskra</a></iframe>
</div>

<div id="footer">
<p> Created by: Cory Purnell </p>
</div>

</div>
</body>
</html>