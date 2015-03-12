<?php
	function database_connect() {
		$link = mysqli_connect("localhost","root","usbw","webshop") or die("Error " . mysqli_error($link));
		return $link;
	}
?>