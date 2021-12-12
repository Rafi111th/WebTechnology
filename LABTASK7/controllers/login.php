<?php
	include('../model/db_connect.php');

    if (isset($_POST['login'])) {
        extract($_POST);

        $password = base64_encode($password);
        
		$query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
	    $select = mysqli_query($database, $query);

	    if ($fetch = mysqli_fetch_assoc($select)) {
            if ($remember_me) {
                setcookie("logged", true, time()+3600*24, '/');
                setcookie("login_info", json_encode($fetch), time()+3600*24, '/');
            }
            $_SESSION['logged'] = true;
            $_SESSION['login_info'] = json_encode($fetch);

	        $_SESSION['message'] = "Login successful !";
            header("location:../?route=dashboard");
	    } else {
            $_SESSION['error'] = "Wrong Credentials !";
            header("location:../?route=login");
        }
	}
