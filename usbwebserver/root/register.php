<?php 
	include('templates/header.php');
?>

<div id="content" class="clearfix">
	<form action="TEST.asp" method="get">
	<p class="content-title">Registreren</p>
	<div class="inner-table">
	<p>Vul hieronder uw gegevens in.</p>
	<table class="bordercollapse">
		<tr class="bordercollapse">
			<td class="bordercollapse">
				<p>Accountgegevens:</p>
			</td>
			<td>
				<p>Factuuradres:</p>
			</td>
		</tr>
		<tr>
			<td class="bordercollapse">
				<div class="inner-table">
					<table class="borderless">
						<tr>
							<td class="register-text-normal">
								<p>Gebruikersnaam*</p>
							</td>
						</tr>
						<tr>
							<td class="register-text-normal">
								<input name="username" type="text" size="30">
							</td>
						</tr>
						<tr>
							<td class="register-text-normal">
								<p>Wachtwoord*</p>
							</td>
						</tr>
						<tr>
							<td class="register-text-normal">
								<input name="password" type="text" size="30">
							</td>
						</tr>
						<tr>
							<td class="register-text-normal">
								<p>Herhaal wachtwoord*</p>
							</td>
						</tr>
						<tr>
							<td class="register-text-normal">
								<input name="sec_password" type="password" size="30">
							</td>
						</tr>
					</table>
				</div>
			</td>
			<td>
				<div class="inner-table input-right">
					<table>
						<tr>
							<td class="register-text-normal">
								<p>Aanhef*</p>
							</td>
							<td class="register-text-normal">
								<p>Voornaam*</p>
							</td>
							<td class="register-text-normal">
								<p>Tussenv.</p>
							</td>
							<td class="register-text-normal">
								<p>Achternaam*</p>
							</td>
						</tr>
						<tr>
							<td class="register-text-normal">
								<select>
									<option value="M">Dhr</option>
									<option value="V">Mevr</option>
								</select>
							</td>
							<td class="register-text-normal">
								<input type="text" name="firstname">
							</td>
							<td class="register-text-normal">
								<input name="middlename" type="text" size="10">
							</td>
							<td class="register-text-normal">
								<input type="text" name="lastname">
							</td>
						</tr>
						<tr>
							<td colspan="4" class="register-text-normal">
								<p>Emailadres*</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="register-text-normal">
								<input name="email" type="email">
							</td>
							<td colspan="2">
							</td>
						</tr>
						<tr>
							<td colspan="2" class="register-text-normal">
								<p>Straatnaam*</p>
							</td>
							<td>
								
							</td>
							<td class="register-text-normal">
								<p>Huisnummer*</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="register-text-normal">
								<input name="streetname" type="text" size="35">
							</td>
							<td>
								
							</td>
							<td class="register-text-normal">
								<input name="house_number" type="text" size="10">
							</td>
						</tr>
						<tr>
							<td colspan="2" class="register-text-normal">
								<p>Postcode*</p>
							</td>
							<td>
								
							</td>
							<td class="register-text-normal">
								<p>Plaatsnaam*</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="register-text-normal">
								<input name="zipcode" type="text" size="35">
							</td>
							<td>
								
							</td>
							<td class="register-text-normal">
								<input name="city" type="text">
							</td>
						</tr>
						<tr>
							<td colspan="4" class="register-text-normal">
								<p>Mobiel*</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="register-text-normal">
								<input name="mobiel" type="text">
							</td>
							<td colspan="2">
							</td>
						</tr>
					</table>
				</div>
		</td>
		</tr>
		
	</table>
	</div>
	<input id="button-send" value="Aanmelden" type="submit" >
	</form>
</div>

<?php 
	include('templates/footer.php');
?>