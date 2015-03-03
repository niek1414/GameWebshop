<?php
	session_start();
	
	// loading a page
	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		// check session
		if (isset($_SESSION['loggedIn'])) {
			echo "Logged in";
			echo '<br>Username: ' . $_SESSION['username'];
		} else {
			echo "Not logged in";
		}
	} else {
		switch($_POST['action']) {
			case 'Log in': {
				
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				// connection
				$link = mysqli_connect("localhost","root","usbw","webshop") or die("Error " . mysqli_error($link)); 
				
				// query
				$query = "SELECT COUNT(*) as SUCCESS FROM gebruiker
				  WHERE GEBRUIKERSNAAM = '" . $username . "'
				  AND WACHTWOORD = '" . $password . "'"
				  or die("Error in the query.." . mysqli_error($link)); 
				
				// execute the query. 
				$result = mysqli_query($link, $query); 
				
				// get result
				$data=mysqli_fetch_assoc($result);
				
				// check result
				if ($data['SUCCESS'] == 1) {
					echo "Successfully logged in!";
					$_SESSION['loggedIn'] = true;
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					echo '<br>Username: ' . $_SESSION['username'];
				} else {
					echo "<script type='text/javascript'>alert('Login failed!')</script>";
				}
				
			} break;
			case 'Log out': {
				session_destroy();
				echo "Just logged out";
			} break;
		}
	}
	
	/* notes 
	
	//display information: 
	while($row = mysqli_fetch_array($result)) { 
		echo $row["GEBRUIKERSNAAM"] . "<br>"; 
	}
	
	  end notes */
?>