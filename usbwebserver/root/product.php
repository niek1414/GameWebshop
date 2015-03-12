<?php 
	include('functions/database_functions.php');
	include('templates/header.php');
	
	// connection
	$link = database_connect();
?>

<div id="content" class="clearfix">
	<div id="back">
    	<form action="webshop.php">
			<button id="back-button">Terug</button>
        </form>
	</div>
    <?php 
		if (isset($_GET['id']) && is_numeric($_GET['id'])) {
			// query
			$query = "SELECT * FROM product WHERE PRODUCTNUMMER = ".$_GET['id'];
			
			// execute the query. 
			$result = mysqli_query($link, $query); 
			
			if (mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_array($result);
				
				echo('
					<div id="product-wrapper">
						<div id="product-image">
							<img src="'.$row['AFBEELDING_GROOT'].'" alt="'.$row['PRODUCTNAAM'].'" width="300">
						</div>
						<div id="product-details">
							<P>'.utf8_encode($row['OMSCHRIJVING']).'</p>
						</div>
				');
				
				if ($row['VOORRAAD'] > 0) {
					echo('
						<div id="stock" class="green">
							<p>Op voorraad</P>
							<p>(Direct leverbaar)</P>
						</div>
					');
				} else {
					echo('
						<div id="stock" class="red">
							<p>Niet op voorraad</P>
							<p>(Levertijd verlengd)</P>
						</div>
					');
				}
				
				
				echo('</div>');
				
				echo('<div id="cart">
					<p>Aantal: </P>
					<form class="tocart" action="/cart.php" method="post">
						<input type="text" name="aantal" maxlength="2">
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
						echo('
							<div class="productbox">
								<div class="productbox-head">
									<a href="./product.php?id=' .$row["PRODUCTNUMMER"]. '">' .$row["PRODUCTNAAM"]. '</a>
								</div>
								<div class="productbox-main">
									<a href="./product.php?id=' .$row["PRODUCTNUMMER"]. '"><img src="' .$row["AFBEELDING_KLEIN"]. '" alt="image" ></a>
								</div>
								<div class="productbox-foot">
									<p class="pricetext">€ ' .$row["PRIJS"]. '</p>
									<form class="cartbutton" action="#" method="post">
										<input type="submit" name="action" value="In Winkelwagen">
									</form>
								</div>
							</div>
						');
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