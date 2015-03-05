<?php 
	include('templates/header.php');
	
	// connection
	$link = mysqli_connect("localhost","root","usbw","webshop") or die("Error " . mysqli_error($link)); 
?>

<div id="content" class="clearfix">
	<div id="back">
		<input id="back-button" type="button" value="Terug" onclick="location.href='<?php echo $_SERVER['HTTP_REFERER']; ?>'">
	</div>
    <?php 
		if (isset($_GET['id']) && is_numeric($_GET['id'])) {
			// query
			$query = "SELECT * FROM product WHERE PRODUCTNUMMER = ".$_GET['id'];
			
			// execute the query. 
			$result = mysqli_query($link, $query); 
			
			if (mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_array($result);
				
				echo('<div id="product-wrapper">');
				echo('<div id="product-image">');
				echo('<img src="'.$row['AFBEELDING_GROOT'].'" alt="'.$row['PRODUCTNAAM'].'" width="300">');
				echo('</div>');
				echo('<div id="product-details">');
				echo('<P>'.$row['OMSCHRIJVING'].'</p>');
				echo('</div>');
				echo('<div id="stock">');
				echo('<p>Voorraad: '.$row['VOORRAAD'].'</P>');
				echo('</div>');
				echo('</div>');
			} else {
				echo('<P>Dit product bestaat niet of bevindt zich niet langer in ons systeem.</p>');
			}
		} else {
			echo('<P>Ongeldig product!</p>');
		}
	?>
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
	mysqli_close($link);
	
	include('templates/footer.php');
?>