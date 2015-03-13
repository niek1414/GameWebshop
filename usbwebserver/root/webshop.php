<?php 
	include('functions/database_functions.php');
	include('templates/header.php');
	
	// connection
	$link = database_connect();
?>

<div id="content" class="clearfix">
		<div id="search-wrapper">
			<form method="get">
                <?php if (isset($_GET['cat']) && is_numeric($_GET['cat'])) {
					echo('<input type="hidden" name ="cat" value="' .$_GET['cat']. '">');
				} ?>
				<input type="text" name="search">
				<input type="submit" value="Zoek">
			</form>
		</div>
		<div id="submenu">
			<div id="subcategories">
				<ul>
                <?php
					// query to get categories
					$query = "SELECT * FROM categorie" or die("Error in the query.." . mysqli_error($link)); 
				
					//execute the query. 
					$result = mysqli_query($link, $query);
					
					// show categories
					echo('<li><a href="./webshop.php">Alles</a></li>');
					while($row = mysqli_fetch_array($result)) { 
						echo('<li><a href="?cat='.$row["CATEGORIENUMMER"]. '">'.$row["CATEGORIENAAM"]. '</a></li>');
					}
				?>
				</ul>
			</div>
		</div>
		<div id="products">
            
            <?php
				// build query to get products
				$query = "SELECT * FROM product ";
				if (isset($_GET['cat']) && is_numeric($_GET['cat'])) {
					$query .= "WHERE CATEGORIE = " .$_GET['cat']. " ";
				}
				if (isset($_GET['search'])) {
					if (isset($_GET['cat'])) {
						$query .= "AND PRODUCTNAAM LIKE '%" .mysqli_real_escape_string($link, $_GET['search']). "%' ";
					} else {
						$query .= "WHERE PRODUCTNAAM LIKE '%" .mysqli_real_escape_string($link, $_GET['search']). "%' ";
					}
				}
				if (isset($_GET['sort']) && is_numeric($_GET['sort'])) {
					$query .= "LIMIT " .$_GET['sort']." ";
				}
				
				// execute the query. 
				$result = mysqli_query($link, $query); 
				
				if (mysqli_num_rows($result) > 0) {
					
					// sorter
					echo('<div id="sorter">');
					echo('<p>'.mysqli_num_rows($result).' Producten | toon</p>');
					echo('<form method="get">');
					
					if (isset($_GET['cat']) && is_numeric($_GET['cat'])) {
						echo('<input type="hidden" name ="cat" value="' .$_GET['cat']. '">');
					}
					if (isset($_GET['search'])) {
						echo('<input type="hidden" name ="search" value="' .mysqli_real_escape_string($link, $_GET['search']). '">');
					}
					echo('
								<select name="sort">
									<option value="3">3</option>
									<option value="50">50</option>
									<option value="100">100</option>
									<option value="200">200</option>
								</select>
								<p>per pagina</p>
								<input type="submit" value="Toon">
							</form>
						</div>
					');
					
					// productboxes
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
									<form class="cartbutton" action="/cart.php" method="post">
										<input type="hidden" name="productnummer" value="' .$row["PRODUCTNUMMER"]. '">
										<input type="submit" name="action" value="In winkelwagen">
									</form>
								</div>
							</div>
						');
					}
				} else {
					echo('<p>Deze categorie is leeg.<p>');
				}
			
			?>
			
		</div>
</div>

<?php
	mysqli_close($link);
	
	include('templates/footer.php');
?>