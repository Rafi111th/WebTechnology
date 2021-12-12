<?php
include('../model/db_connect.php');

if (isset($_POST['register'])) {
	extract($_POST);
	$user_name = strtolower(implode("_", explode(" ", $name)));
	$password = base64_encode($password);
	$query = "INSERT INTO admin(`full_name`, `email`, `username`, `password`) 
            VALUES('$name', '$email', '$user_name', '$password')";
	$insert = mysqli_query($database, $query);
	if (mysqli_affected_rows($database)) {
		$message = "Registration successfully !";
	} else {
		$message = "Register failed !";
	}
	$_SESSION['message'] = $message;
	header("location:../?route=login");
}
