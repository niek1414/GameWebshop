<?php
	session_start();
	
	// loading a page
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		switch($_POST['action']) {
			case 'Log in': {
				
				// connection
				$link = database_connect();
				
				$username = mysqli_real_escape_string($link, $_POST['username']);
				$password = mysqli_real_escape_string($link, md5($_POST['password']));
				
				// query
				$query = "SELECT * FROM gebruiker
				  WHERE GEBRUIKERSNAAM = '" . $username . "'
				  AND WACHTWOORD = '" . $password . "'"
				  or die("Error in the query.." . mysqli_error($link)); 
				
				// execute the query. 
				$result = mysqli_query($link, $query); 
				
				// get result
				$data=mysqli_fetch_assoc($result);
				
				// check result
				if (mysqli_num_rows($result) == 1) {
					//echo "Successfully logged in!";
					$_SESSION['loggedIn']	= true;
					$_SESSION['username'] 	= $username;
					$_SESSION['password'] 	= $password;
					$_SESSION['firstname'] 	= $data['VOORNAAM'];
					$_SESSION['middlename'] = $data['TUSSENVOEGSEL'];
					$_SESSION['lastname'] 	= $data['ACHTERNAAM'];
				} else {
					$err_msg = "Uw wachtwoord of gebruikersnaam is incorrect. Probeer het A.U.B. opnieuw.";
				}
				
				mysqli_close($link);
				
			} break;
			case 'Log uit': {
				unset($_SESSION['loggedIn']);
				unset($_SESSION['username']);
				unset($_SESSION['password']);
				unset($_SESSION['firstname']);
				unset($_SESSION['middlename']);
				unset($_SESSION['lastname']);
			} break;
		}
	}
?>