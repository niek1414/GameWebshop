<?php 
	include('templates/header.php');
?>

<div id="content" class="clearfix">
	<div id="back">
		<form action="TEST.asp" method="get">
			<input id="back-button" type="submit" value="Terug">
		</form>
	</div>
	<div id="product-wrapper">
		<div id="product-image">
			<img src="img/sm3dl.jpg" alt="image" width="300">
		</div>
		<div id="product-details">
			<P>
				Bacon ipsum dolor amet flank bacon drumstick filet mignon.
				Turkey salami pork belly picanha pork chop tail brisket tongue kielbasa prosciutto landjaeger pastrami.
				Bresaola cow prosciutto ribeye spare ribs pig flank kevin andouille shank ham hock drumstick rump ham.
				Meatball frankfurter ham chuck.
			</p>
		</div>
		<div id="stock">
			<p>Op voorraad: Myess</P>
		</div>
	</div>
	<div id="cart">
		<p>Aantal: </P>
		<form class="tocart" action="TEST.asp" method="get">
			<input type="text" name="cartamount">
			<input type="submit" value="In Winkelwagen">
		</form>
	</div>
	<div id="related-wrapper">
			<div id="related-text">
				<p>Gerelateerde producten</P>
			</div>
			
			<div class="productbox">
				<div class="productbox-head">
					<a href="./product.html">Super Mario 3D Land</a>
				</div>
				<div class="productbox-main">
					<a href="./product.html"><img src="img/sm3dl.jpg" alt="image" width="200" height="200"></a>
				</div>
				<div class="productbox-foot">
					<p class="pricetext">€ 45.00</p>
					<form class="cartbutton" action="TEST.asp" method="get">
						<input type="submit" value="In Winkelwagen">
					</form>
				</div>
			</div>
			
			<div class="productbox">
				<div class="productbox-head">
					<a href="./product.html">Super Mario 3D Land</a>
				</div>
				<div class="productbox-main">
					<a href="./product.html"><img src="img/sm3dl.jpg" alt="image" width="200" height="200"></a>
				</div>
				<div class="productbox-foot">
					<p class="pricetext">€ 45.00</p>
					<form class="cartbutton" action="TEST.asp" method="get">
						<input type="submit" value="In Winkelwagen">
					</form>
				</div>
			</div>
			
			<div class="productbox">
				<div class="productbox-head">
					<a href="./product.html">Super Mario 3D Land</a>
				</div>
				<div class="productbox-main">
					<a href="./product.html"><img src="img/sm3dl.jpg" alt="image" width="200" height="200"></a>
				</div>
				<div class="productbox-foot">
					<p class="pricetext">€ 45.00</p>
					<form class="cartbutton" action="TEST.asp" method="get">
						<input type="submit" value="In Winkelwagen">
					</form>
				</div>
			</div>
			
			<div class="productbox">
				<div class="productbox-head">
					<a href="./product.html">Super Mario 3D Land</a>
				</div>
				<div class="productbox-main">
					<a href="./product.html"><img src="img/sm3dl.jpg" alt="image" width="200" height="200"></a>
				</div>
				<div class="productbox-foot">
					<p class="pricetext">€ 45.00</p>
					<form class="cartbutton" action="TEST.asp" method="get">
						<input type="submit" value="In Winkelwagen">
					</form>
				</div>
			</div>
			
	</div>
</div>

<?php 
	include('templates/footer.php');
?>