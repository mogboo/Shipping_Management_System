<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['email'])) {
    header("Location: user_register.php");
}

if (isset($_POST['submit'])) {
	$txtEmail = $_POST['email'];
	$txtPsw = md5($_POST['password']);
	$txtCPswc = md5($_POST['confirm_password']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user_register WHERE email='$txtEmail'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user_register ( email, password)
					VALUES ( '$txtEmail', '$txtPsw')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}

	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>