<?php	
	// loading a page
	if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'Aanmelden') {
		//check if password equals second password
		
		$link = mysqli_connect("localhost","root","usbw","webshop") or die("Error " . mysqli_error($link)); 
		
		if(mysqli_real_escape_string($link, $_POST['password']) == mysqli_real_escape_string($link, $_POST['sec_password'])) {
				
		// query
		$query = "INSERT INTO gebruiker (GEBRUIKERSNAAM, VOORNAAM, TUSSENVOEGSEL, ACHTERNAAM, STRAATNAAM, HUISNUMMER, POSTCODE, WOONPLAATS, EMAIL, SEXE, WACHTWOORD)".
		  "VALUES ('" . mysqli_real_escape_string($link, $_POST['username']) . "',
		    '" . mysqli_real_escape_string($link, $_POST['firstname']) . "',
		    '" . mysqli_real_escape_string($link, $_POST['middlename']) . "',
			'" . mysqli_real_escape_string($link, $_POST['lastname']) . "',
			'" . mysqli_real_escape_string($link, $_POST['streetname']) . "',
			'" . mysqli_real_escape_string($link, $_POST['house_number']) . "',
			'" . mysqli_real_escape_string($link, $_POST['zipcode']) . "',
			'" . mysqli_real_escape_string($link, $_POST['city']) . "',
			'" . mysqli_real_escape_string($link, $_POST['email']) . "',
			'" . mysqli_real_escape_string($link, $_POST['sexe']) . "',
			'" . md5(mysqli_real_escape_string($link, $_POST['password'])) . "')"
			or die("Error in the query.." . mysqli_error($link)); 
			
			// execute the query. 
			mysqli_query($link, $query); 
			$err_msg = "U bent succesvol aangemeld.";
		} else {
			$err_msg = "De twee ingevoerde wachtwoorden komen niet overeen.";
		}
	}
?>