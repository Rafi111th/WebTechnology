<?php
	session_start();
	// project base url
	$base_url = $_SERVER['DOCUMENT_ROOT'].'/khaboi';

	// project asset url
	$asset_url = 'http://localhost/khaboi/assets';

	// project root url
	$root_url = 'http://localhost/khaboi';
	
	// project database connection
	$database = mysqli_connect('localhost', 'root', '', 'khaboi');
	if (!$database) {
		echo 'Database connection failed !';
	} else {
		// echo 'Success !';
	}
