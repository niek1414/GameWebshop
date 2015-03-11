<?php
	$link = mysqli_connect("localhost","root","usbw","webshop") or die("Error " . mysqli_error($link));

	//check POST and productnummer exists and is numeric.
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		// add items to cart
		if(isset($_POST['productnummer']) && is_numeric($_POST['productnummer'])){
			
			//check if current session cartItems
			if (!isset($_SESSION['cartItems'])){
				$_SESSION['cartItems'] = array();
			}
			
			//check if product already is in cart
			if (isset($_SESSION['cartItems'][$_POST['productnummer']])){
				
				//check if amount is given. (from product.php)
				if (isset($_POST['aantal'])){
					$_SESSION['cartItems'][$_POST['productnummer']] += $_POST['aantal'];
				} else {
					$_SESSION['cartItems'][$_POST['productnummer']]++;
				}
				
			} else {
				if (isset($_POST['aantal'])){
					$_SESSION['cartItems'][$_POST['productnummer']] = $_POST['aantal'];
				} else {
					$_SESSION['cartItems'][$_POST['productnummer']] = 1;
				}
			}				
		}
		
		// loop through items
		foreach ($_SESSION['cartItems'] as $item => $amount){
			// update cart
			if (isset($_POST[$item])){
				$_SESSION['cartItems'][$item] = $_POST[$item];
			}
			
			// checkout (if logged in)
			if ($_POST['action'] == 'checkout') {
				if (isset($_SESSION['loggedIn'])) {
					// query
					$query = "UPDATE product SET VOORRAAD = VOORRAAD - ".$_SESSION['cartItems'][$item]." WHERE PRODUCTNUMMER = ".$item; 
					
					// execute the query. 
					mysqli_query($link, $query);
					
					// change action to empty cart
					$_POST['action'] = 'empty';
				} else {
					$err_msg="U moet aangemeld zijn om uw bestelling af te ronden.";
				}
			}
			
			// delete cart item
			if ($_POST['action'] == 'delete?id=' + $item) {
				unset($_SESSION['cartItems'][$item]);
			}
		}
		
		// remove cart from session if empty or commanded by button
		if (count($_SESSION['cartItems']) == 0 || $_POST['action'] == 'empty') {
			unset($_SESSION['cartItems']);
		}
		
	}
?>