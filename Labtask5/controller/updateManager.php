<?php  
require_once '../model/model.php';


if (isset($_POST['updateManager'])) {
	$data['manager_username'] = $_POST['manager_username'];
	$data['first_name'] = $_POST['firstname'];
	$data['last_name'] = $_POST['lastname'];
    $data['phone'] = $_POST['phone'];
    $data['email'] = $_POST['email'];
    // $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);;
    $data['address'] = $_POST['address'];
    $data['image'] = basename($_FILES["image"]["manager_username"]);

	$target_dir = "../view/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateManager($_POST['manager_id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showManager
  	header('Location: ../show/Manager.php?id=' . $_POST["manager_id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>