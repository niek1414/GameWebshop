<?php
	if (isset($_SESSION['loggedIn'])){
		echo('
			<table>
				<tr>
					<td>
						U bent ingeloged als:
					</td>
				</tr>
				<tr>
					<td id="login-name">
						' .$_SESSION['firstname']. ' ' .$_SESSION['middlename']. ' ' .$_SESSION['lastname']. '
					</td>
				</tr>
				<tr>
					<td>
						<input id="logout-button" type="submit" name="action" value="Log uit">
					</td>
				</tr>
			</table>
		');
	} else {
		echo('
			<table>
				<tr>
					<td class="login-first-row">
						Gebruikersnaam
					</td>
					<td>	
						<input type="text" name="username">
					</td>
				</tr>
				<tr>
					<td class="login-first-row">
						Wachtwoord
					</td>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td class="login-first-row">
						<input type="checkbox" name="remember" value="true"> Onthouden <a href="./forgot.html">Vergeten?</a>                           
						
					</td>
					<td>
						<input id="login-button" type="submit" name="action" value="Log in">
						<a href="./register.php">Registreren</a>
					</td>
				</tr>
			</table>
		');
	}
?>