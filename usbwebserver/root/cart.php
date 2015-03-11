<?php 
	include('templates/header.php');
	include('functions/to_cart.php');
	
	// connection
	$link = mysqli_connect("localhost","root","usbw","webshop") or die("Error " . mysqli_error($link)); 
?>

<div id="content" class="clearfix">

  <div id="button-head">
    <form action="webshop.php">
        <button>Verder winkelen</button>
    </form>
  </div>
  <form method="post">
  <div class="content-title content-title-cart">Winkelwagen</div>	
	<?php
        if (isset($_SESSION['cartItems'])){
            echo('
                <table class="full-table">
                    <tr class="bordercollapse">
                        <td class="bordercollapse">
                            <p>Afbeelding</p>
                        </td>
                        <td class="bordercollapse">
                            <p>Productnaam</p>
                        </td>
                        <td class="bordercollapse">
                            <p>Prijs</p>
                        </td>
                        <td class="bordercollapse">
                            <p>Aantal</p>
                        </td>
                        <td class="bordercollapse">
                            <p>Subtotaal</p>
                        </td>
                        <td class="bordercollapse">
                            <p>Verwijderen</p>
                        </td>
                    </tr>
                ');
                
			$subtotal = 0;
            foreach ($_SESSION['cartItems'] as $item => $amount){
                // query to get categories
                $query = "SELECT * FROM product WHERE PRODUCTNUMMER = " .$item or die("Error in the query.." . mysqli_error($link)); 
            
                //execute the query. 
                $result = mysqli_query($link, $query);
                
                $row = mysqli_fetch_array($result);
                
                echo('
                    <tr class="bordercollapse">
                        <th class="bordercollapse">
                            <img src="' .$row["AFBEELDING_KLEIN"]. '" width="200" alt="Product image">
                        </th>
                        <th class="bordercollapse">
                            <p>' .$row["PRODUCTNAAM"]. '</p>
                        </th>
                        <th class="bordercollapse">
                            <p>&euro; ' .number_format((float)($row["PRIJS"]), 2, ',', ''). '</p>
                        </th>
                        <th class="bordercollapse">
                            <input name = "'.$item.'" type="text" value="' .$amount. '" size="2" maxlength="2">
                        </th>
                        <th class="bordercollapse">
                            <p>&euro; ' .number_format((float)($row["PRIJS"] * $amount), 2, ',', ''). '</p>
                        </th>
                        <th class="bordercollapse">
							<button name="action" value="'.$item.'">Verwijderen</button>
                        </th>
                    </tr>
                ');
				
				$subtotal += $row["PRIJS"] * $amount;
            }
			$shipping = 6.95;
			$total = $subtotal + $shipping;
            echo('</table>');
			echo('
				<div id="content-footer-wrapper">
					<table class="checkout-table">
						<tr>
							<td class="bordercollapse">
								<p>Subtotaal:</p>
							</td>
							<th class="bordercollapse">
								<p>€ '.number_format((float)$subtotal, 2, ',', '').'</p>
							</th>
						</tr>
						<tr>
							<td class="bordercollapse">
								<p>Verzendkosten:</p>
							</td>
							<th class="bordercollapse">
								<p>€ '.number_format((float)$shipping, 2, ',', '').'</p>
							</th>
						</tr>
						<tr>
							<td class="bordercollapse">
								<p>Totaal:</p>
							</td>
							<th class="bordercollapse">
								<p>€ '.number_format((float)$total, 2, ',', '').'</p>
							</th>
						</tr>
						<tr>
							<td>
								<input type="submit" name="action" value="Herbereken">
							</td>
							<th>
								<button name="action" value="checkout">Afrekenen</button>
							</th>
						</tr>
					</table>
					<button name="action" value="empty">Leeg winkelwagen</button>
				</div>
			');
        } else { 
            echo ('Uw winkelwagen is leeg.');
        }
	?>
		
	</form>
</div>

<?php 
	include('templates/footer.php');
?>