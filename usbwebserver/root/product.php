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
				echo('<P>'.utf8_encode($row['OMSCHRIJVING']).'</p>');
				echo('</div>');
				echo('<div id="stock">');
				echo('<p>Voorraad: '.$row['VOORRAAD'].'</P>');
				echo('</div>');
				echo('</div>');
				
				echo('<div id="cart">
					<p>Aantal: </P>
					<form class="tocart" action="/cart.php" method="post">
						<input type="text" name="aantal">
						<input type="hidden" name="productnummer" value="' .$row["PRODUCTNUMMER"]. '">
						<input type="submit" name="action" value="In Winkelwagen">
					</form>
				</div>
				
				<div id="related-wrapper">
					<div id="related-text">
						<p>Gerelateerde producten</P>
					</div>');
				
				// query to get related products
				$query = "SELECT * FROM product INNER JOIN product_gerelateerd_product ON(product.PRODUCTNUMMER = product_gerelateerd_product.PRODUCTNUMMER) WHERE PRODUCTNUMMER_GERELATEERD_PRODUCT = ".$_GET['id'];
				
				// execute the query. 
				$result = mysqli_query($link, $query); 
				
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_array($result)) { 
						echo('<div class="productbox">');
						echo('<div class="productbox-head">');
						echo('<a href="./product.php?id=' .$row["PRODUCTNUMMER"]. '">' .$row["PRODUCTNAAM"]. '</a>');
						echo('</div>');
						echo('<div class="productbox-main">');
						echo('<a href="./product.php?id=' .$row["PRODUCTNUMMER"]. '"><img src="' .$row["AFBEELDING_KLEIN"]. '" alt="image" ></a>');
						echo('</div>');
						echo('<div class="productbox-foot">');
						echo('<p class="pricetext">€ ' .$row["PRIJS"]. '</p>');
						echo('<form class="cartbutton" action="#" method="post">');
						echo('<input type="submit" name="action" value="In Winkelwagen">');
						echo('</form>');
						echo('</div>');
						echo('</div>');
					} 
				} else {
					echo "<p>Dit product heeft geen gerelateerde producten.";
				}
					
				echo('</div>');
				
				
			} else {
				echo('<P>Dit product bestaat niet of bevindt zich niet langer in ons systeem.</p>');
			}
		} else {
			echo('<P>Ongeldig product!</p>');
		}
	?>

</div>

<?php 
	mysqli_close($link);
	
	include('templates/footer.php');
?>