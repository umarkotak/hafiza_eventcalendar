<?php
	include 'koneksi.php';
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$status = 'admin';

	$sql = $conn->prepare("INSERT INTO tbl_user VALUES ('', :username, :password, :email, :status)");
	$data = array(':username' => $username,
                ':password' => $password,
                ':email' => $email,
                ':status' => $status);

	$sql->execute($data);

	header('location: index.php?page=home');

?>


<?php

	// include 'koneksi.php';
	// session_start();
	// if (isset($_POST['submit'])) {
	// 	$username = $_POST['username'];
	// 	$pwd = $_POST['password'];
	// 	$email = $_POST['email'];
	// 	$status = 'admin';

	// 	if ($username<>'' && $pwd <>'') {

	// 		$query = "INSERT INTO tbl_user (username, password, email, status) VALUES ('$username', '$pwd', '$email', '$status')";
	// 		$add = mysqli_query($conn, $query);
	// 		header("location: index.php");
	// 	} else{
	// 	echo "DATA TIDAK LENGKAP"; }

	// }else{
	// 	echo "data tidak lengkap";
	// }

?>
