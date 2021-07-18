<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['email'])) {
    header("Location: index.html");
}

if (isset($_POST['submit'])) {
	$txtEmail = $_POST['email'];
	$txtPsw = md5($_POST['password']);

	$sql = "SELECT * FROM user_register WHERE email='$txtEmail' AND password='$txtPsw'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['email'] = $row['email'];
		header("Location: index.html");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>