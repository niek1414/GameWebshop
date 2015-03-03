<?php 
	include('templates/header.php');
?>

<div id="content" class="clearfix">
		<div id="search-wrapper">
			<form action="TEST.asp" method="get">
				<input type="text" name="searchtext">
				<input type="submit" value="Zoek">
			</form>
		</div>
		<div id="submenu">
			<div id="subcategories">
				<ul>
				<li><a href="#">Subcategorie 1</a></li>
				<li><a href="#">Subcategorie 2</a></li>
				<li><a href="#">Subcategorie 3</a></li>
				<li><a href="#">Subcategorie 4</a></li>
				<li><a href="#">Subcategorie 5</a></li>
				</ul>
			</div>
		</div>
		<div id="products">
			<div id="sorter">
				<p>9001 Producten | toon</p>
				<select>
					<option value="20">20</option>
					<option value="50">50</option>
					<option value="100">100</option>
					<option value="200">200</option>
				</select>
				<p>per pagina</p>
			</div>
			
			<div class="productbox">
				<div class="productbox-head">
					<a href="./product.php">Super Mario 3D Land</a>
				</div>
				<div class="productbox-main">
					<a href="./product.php"><img src="img/sm3dl.jpg" alt="image" width="200" height="200"></a>
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
					<a href="./product.php">Super Mario 3D Land</a>
				</div>
				<div class="productbox-main">
					<a href="./product.php"><img src="img/sm3dl.jpg" alt="image" width="200" height="200"></a>
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
					<a href="./product.php">Super Mario 3D Land</a>
				</div>
				<div class="productbox-main">
					<a href="./product.php"><img src="img/sm3dl.jpg" alt="image" width="200" height="200"></a>
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
					<a href="./product.php">Super Mario 3D Land</a>
				</div>
				<div class="productbox-main">
					<a href="./product.php"><img src="img/sm3dl.jpg" alt="image" width="200" height="200"></a>
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
					<a href="./product.php">Super Mario 3D Land</a>
				</div>
				<div class="productbox-main">
					<a href="./product.php"><img src="img/sm3dl.jpg" alt="image" width="200" height="200"></a>
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