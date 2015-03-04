<?php 
	include('templates/header.php');
	include('functions/sign_up.php');
?>
<div id="content" class="clearfix">
	<form action="#" method="post">
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
								<input name="username" type="text" size="30" required>
							</td>
						</tr>
						<tr>
							<td class="register-text-normal">
								<p>Wachtwoord*</p>
							</td>
						</tr>
						<tr>
							<td class="register-text-normal">
								<input name="password" type="password" size="30" required>
							</td>
						</tr>
						<tr>
							<td class="register-text-normal">
								<p>Herhaal wachtwoord*</p>
							</td>
						</tr>
						<tr>
							<td class="register-text-normal">
								<input name="sec_password" type="password" size="30" required>
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
								<select name="sexe">
									<option value="M">Dhr</option>
									<option value="V">Mevr</option>
								</select>
							</td>
							<td class="register-text-normal">
								<input type="text" name="firstname" required>
							</td>
							<td class="register-text-normal">
								<input name="middlename" type="text" size="10">
							</td>
							<td class="register-text-normal">
								<input type="text" name="lastname" required>
							</td>
						</tr>
						<tr>
							<td colspan="4" class="register-text-normal">
								<p>Emailadres*</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="register-text-normal">
								<input name="email" type="email" required>
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
								<input name="streetname" type="text" size="35" required>
							</td>
							<td>
								
							</td>
							<td class="register-text-normal">
								<input name="house_number" type="nummer" size="10" required>
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
								<input name="zipcode" type="text" size="35" required>
							</td>
							<td>
								
							</td>
							<td class="register-text-normal">
								<input name="city" type="text" required>
							</td>
						</tr>
						<tr>
							<td colspan="4" class="register-text-normal">
								<p>Mobiel*</p>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="register-text-normal">
								<input name="mobiel" type="text" required>
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
	<input id="button-send" value="Aanmelden" name="action" type="submit" >
	</form>
</div>

<?php 
	include('templates/footer.php');
?>