<?php
require_once '../model/model.php';


if (isset($_POST['createManager'])) {
	$data['manager_username'] = $_POST['manager_username'];
	$data['firstname'] = $_POST['firstname'];
	$data['lastname'] = $_POST['lastname'];
	$data['phone'] = $_POST['phone'];
	$data['email'] = $_POST['email'];
	$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data['address'] = $_POST['address'];
	//$data['image'] = basename($_FILES["image"]["manager_username"]);
	$target_dir = "../view/";
	//$target_file = $target_dir . basename($_FILES["image"]["manager_username"]);

	// if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
	// 	echo "The file " . basename($_FILES["image"]["manager_username"]) . " has been uploaded.";
	// } else {
	// 	echo "Sorry, there was an error uploading your file.";
	// }

	if (addManager($data)) {
		echo 'Successfully added!!';
	}
} else {
	echo 'You are not allowed to access this page.';
}
