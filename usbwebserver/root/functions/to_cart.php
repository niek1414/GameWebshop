<?php	
	//check POST and productnummer exists and is numeric.
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
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
	}
?>