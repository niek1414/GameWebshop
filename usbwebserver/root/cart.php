<?php 
	include('templates/header.php');
	include('functions/to_cart.php');
	
	// connection
	$link = mysqli_connect("localhost","root","usbw","webshop") or die("Error " . mysqli_error($link)); 
?>

<div id="content" class="clearfix">

  <div id="button-head"><button type="submit" name="back" onclick="location.href='<?php echo $_SERVER['HTTP_REFERER']; ?>'">Verder winkelen</button></div>
  <form action="TEST.asp" method="get">
  <div class="content-title content-title-cart">Winkelwagen</div>	
	<?php
        if (isset($_SESSION['cartItems'])){
            echo('
                <table class="full-table">
                    <tr class="bordercollapse">
                        <td class="bordercollapse">
                            <p>Image</p>
                        </td>
                        <td class="bordercollapse">
                            <p>Productnaam</p>
                        </td>
                        <td>
                            <p>Prijs</p>
                        </td>
                        <td>
                            <p>Aantal</p>
                        </td>
                        <td>
                            <p>Subtotaal</p>
                        </td>
                        <td>
                            <p>Verwijderen</p>
                        </td>
                    </tr>
                ');
                
            foreach ($_SESSION['cartItems'] as $item => $amount){
                // query to get categories
                $query = "SELECT * FROM product WHERE PRODUCTNUMMER = " .$item or die("Error in the query.." . mysqli_error($link)); 
            
                //execute the query. 
                $result = mysqli_query($link, $query);
                
                $row = mysqli_fetch_array($result);
                
                //echo(' '.$row['PRODUCTNAAM'].':'.$amount.' ');
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
                            <input name="'.$item.'" type="text" value="' .$amount. '" size="2" maxlength="2">
                        </th>
                        <th class="bordercollapse">
                            <p>&euro; ' .number_format((float)($row["PRIJS"] * $amount), 2, ',', ''). '</p>
                        </th>
                        <th class="bordercollapse">
                            <button type="submit" name="requery">Verwijderen</button>
                        </th>
                    </tr>
                ');
            }
            echo('</table>');
			echo('
				<div id="content-footer-wrapper">
					<table class="half-table">
						<tr>
							<td>
								<button type="submit" name="requery">Herberekenen</button>
							</td>
							<td class="bordercollapse">
								<p>Totaal bedrag:</p>
							</td>
							<th class="bordercollapse">
								<p>€41,00</p>
							</th>
						</tr>
						<tr>
							<th colspan="2">
							
							</th>
							<th>
								<input type="submit" value="Afrekenen">
							</th>
						</tr>
					</table>
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