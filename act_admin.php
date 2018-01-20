<?php 

	include 'koneksi.php';
	session_start();
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$pwd = $_POST['password'];
		$email = $_POST['email'];
		$status = 'admin';

		if ($username<>'' && $pwd <>'') {
			
			$query = "INSERT INTO tbl_user (username, password, email, status) VALUES ('$username', '$pwd', '$email', '$status')";
			$add = mysqli_query($conn, $query);
			header("location: index.php");
		} else{
		echo "DATA TIDAK LENGKAP"; }

	}else{
		echo "data tidak lengkap";
	}

?>