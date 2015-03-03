<?php 
	include('templates/header.php');
?>

<div id="content" class="clearfix">
<form action="TEST.asp" method="get">
  <div id="button-head"><button type="submit" name="back">Verder winkelen</button></div>
  <div class="content-title content-title-cart">Winkelwagen</div>
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
			<tr class="bordercollapse">
				<th class="bordercollapse">
					<img src="img/sm3dl.jpg" width="200" height="200" alt="Product image">
				</th>
				<th class="bordercollapse">
					<p>Super Mario 3D Land</p>
				</th>
				<th class="bordercollapse">
					<p>€20,50</p>
				</th>
				<th class="bordercollapse">
					<input name="searchtext" type="text" value="1" size="2" maxlength="2">
				</th>
				<th class="bordercollapse">
					<p>€20,50</p>
				</th>
				<th class="bordercollapse">
					<button type="submit" name="requery">Verwijderen</button>
				</th>
			</tr>
			<tr class="bordercollapse">
				<th class="bordercollapse">
					<img src="img/sm3dl.jpg" width="200" height="200" alt="Product image">
				</th>
				<th class="bordercollapse">
					<p>Super Mario 3D Land</p>
				</th>
				<th class="bordercollapse">
					<p>€20,50</p>
				</th>
				<th class="bordercollapse">
					<input name="searchtext" type="text" value="1" size="2" maxlength="2">
				</th>
				<th class="bordercollapse">
					<p>€20,50</p>
				</th>
				<th class="bordercollapse">
					<button type="submit" name="requery">Verwijderen</button>
				</th>
			</tr>
		</table>
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
	</form>
</div>

<?php 
	include('templates/footer.php');
?>