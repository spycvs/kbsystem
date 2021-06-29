<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Username is required.");
	    exit();
	}else if(empty($pass)) {
        header("Location: index.php?error=Password is required.");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass' AND role= 'Admin'";
		$result_admin = mysqli_query($conn, $sql);

		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass' AND role= 'Secretary'";
		$result_sec = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result_admin) === 1) {
			$row = mysqli_fetch_assoc($result_admin);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				$_SESSION['role'] = $row['role'];
            	header("Location: n_residents/residents.php");
		        exit();
            }
		}else if (mysqli_num_rows($result_sec) === 1) {
				$row = mysqli_fetch_assoc($result_sec);
				if ($row['user_name'] === $uname && $row['password'] === $pass) {
					$_SESSION['user_name'] = $row['user_name'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['id'] = $row['id'];
					$_SESSION['role'] = $row['role'];
					header("Location:  n_residents/residents");
					exit();
				}
			}			
			else {
				header("Location: index.php?error=Incorect username or password.");
		        exit();
			}
		}
	}
	