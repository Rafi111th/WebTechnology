<?php
	include('../model/db_connect.php');
	if (isset($_POST['save_admin'])) {
		extract($_POST);
		
		if (!$name) {
			$_SESSION['error'] = "Name field is required !";
			header("location:../?route=admin/index");
			exit;
		}
		if (!$email) {
			$_SESSION['error'] = "Email field is required !";
			header("location:../?route=admin/index");
			exit;
		}
		if (!$password) {
			$_SESSION['error'] = "Password field is required !";
			header("location:../?route=admin/index");
			exit;
		}

		if ($password !== $confirm_password) {
			$_SESSION['error'] = "Password and Confirm Password should be same !";
			header("location:../?route=admin/index");
			exit;
		}
		
		$user_name = strtolower(implode("_", explode(" ", $name)));
        $password = base64_encode($password);
		$query = "INSERT INTO admin(`full_name`, `email`, `username`, `password`) 
            VALUES('$name', '$email', '$user_name', '$password')";

		$insert = mysqli_query($database, $query);
		if (mysqli_affected_rows($database)) {
			$_SESSION['message'] = 'An admin has been created successfully !';
		} else {
			$_SESSION['error'] = 'Admin create failed !';
		}
		header("location:../?route=admin/index");
	}

	if (isset($_POST['update_admin'])) {
		extract($_POST);
		
		if (!$name) {
			$_SESSION['error'] = "Name field is required !";
			header("location:../?route=admin/index");
			exit;
		}
		if (!$email) {
			$_SESSION['error'] = "Email field is required !";
			header("location:../?route=admin/index");
			exit;
		}

		$user_name = strtolower(implode("_", explode(" ", $name)));
		if ($password) {
			if ($password !== $confirm_password) {
				$_SESSION['error'] = "Password and Confirm Password should be same !";
				header("location:../?route=admin/index");
				exit;
			}
			$password = base64_encode($password);
			$query = $query = "UPDATE admin SET full_name = '$name', email = '$email', username = '$user_name', password = '$password' WHERE admin_id = '$admin_id'";
		} else {
			$query = $query = "UPDATE admin SET full_name = '$name', email = '$email', username = '$user_name' WHERE admin_id = '$admin_id'";
		}

		$insert = mysqli_query($database, $query);
		if (mysqli_affected_rows($database)) {
			$_SESSION['message'] = 'Admin updated successfully !';
		} else {
			$_SESSION['error'] = 'Admin update failed !';
		}
		header("location:../?route=admin/index");
	}

    if (isset($_POST['data']) && $_POST['data'] == 'data') {
		$limit = 5;
		$page = 1;
		
		if (isset($_POST['page'])) {
			$page = $_POST['page'];
		}

		$skip = $limit * ($page-1);
		$admins = [];

		if (isset($_POST['search_string']) && $_POST['search_string'] != "") {
			// Search by full name, username and email
			$search_string = $_POST['search_string'];
			$query = "SELECT * FROM admin WHERE full_name LIKE '%$search_string%' 
				OR email LIKE '%$search_string%' 
				OR username LIKE '%$search_string%' 
				ORDER BY date DESC LIMIT $skip, $limit";
		} else {
			$query = "SELECT * FROM admin ORDER BY date DESC LIMIT $skip, $limit";
		}

	    $select = mysqli_query($database, $query);
	    while ($fetch = mysqli_fetch_assoc($select)) {
	        $admins[] = adminCollection($fetch);
	    }
		$query_count = "SELECT COUNT(admin_id) as total_entity FROM admin";
	    $select_count = mysqli_query($database, $query_count);
	    $fetch_count = mysqli_fetch_assoc($select_count);

		$total_page_count = $fetch_count['total_entity']/$limit >= 1 ? $fetch_count['total_entity']/$limit : 1;
		if ($total_page_count > (int)$total_page_count) {
			$total_page_count++;
		}
	    echo json_encode(['admins' => $admins, 'total_page_count' => $total_page_count, 'page' => $page]);
	}

	if (isset($_POST['edit']) && isset($_POST['id'])) {
		$id = $_POST['id'];
		$query = "SELECT * FROM admin WHERE admin_id = $id";
	    $select = mysqli_query($database, $query);
	    
		if ($fetch = mysqli_fetch_assoc($select)) {
			echo json_encode(['admin' => $fetch, 'success' => true]);
		} else {
			echo json_encode(['admin' => [], 'success' => false]);
		}
	}

	if (isset($_POST['delete']) && isset($_POST['id'])) {
		$id = $_POST['id'] ?? '';
		$data = [];
		$query = "DELETE FROM admin WHERE admin_id = $id";
		$delete = mysqli_query($database, $query);
		if (mysqli_affected_rows($database)) {
			$data = ['success' => true];
		} else {
			$data = ['error' => true];
		}
		echo json_encode($data);
	}

	function adminCollection($data)
	{
		$temp = [];
		$temp['admin_id'] = $data['admin_id'];
		$temp['full_name'] = $data['full_name'];
		$temp['email'] = $data['email'];
		$temp['username'] = $data['username'];
		$temp['date'] = $data['date'];
		$temp['created_date'] = date('d M, Y', strtotime($data['date']));
	    return $temp;
	}
