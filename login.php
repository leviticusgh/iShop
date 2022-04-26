<?php

	session_start();
	
	$errmsg_arr = array();
	
	$errflag = false;
	
	include 'connect.php';
	
	$login = ($_POST['username']);
	$password = ($_POST['password']);
	$role = ($_POST['role']);

	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($role == 'Null') {
		$errmsg_arr[] = 'Role missing';
		$errflag = true;
	}
	
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	if($role == "Admin"){

		$qry="SELECT * FROM user WHERE username='$login' AND password='$password'";
		$stmt=$db->prepare($qry);
		$stmt->execute();
		$count=$stmt->rowCount();
		$member=$stmt->fetch(PDO::FETCH_ASSOC);

			if(($count) > 0) {

				// session_regenerate_id();
				// $member=$stmt->fetch(PDO::FETCH_ASSOC);
				// $member = mysqli_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				$_SESSION['SESS_FIRST_NAME'] = $member['name'];
				$_SESSION['SESS_LAST_NAME'] = $member['position'];
				// session_write_close();
				header("location: main/index.php");
				exit();
			}else {
				header("location: index.php");
				exit();
			}
	}elseif($role == "Cashier"){

		$qry="SELECT * FROM cashier WHERE username='$login' AND password='$password'";
		$stmt=$db->prepare($qry);
		$stmt->execute();
		$count=$stmt->rowCount();
		$cash=$stmt->fetch(PDO::FETCH_ASSOC);

			if($count > 0) {

				// session_regenerate_id();
				// $cash = mysqli_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $cash['cashier_id'];
				$_SESSION['SESS_FIRST_NAME'] = $cash['username'];
				$_SESSION['SESS_LAST_NAME'] = "Cashier";
				// session_write_close();
				header("location: main/index.php");
				exit();
			}else {
				header("location: index.php");
				exit();
			}
	}

?>