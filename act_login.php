<?php 
	

	include 'koneksi.php';

	session_start();
	$user = $_POST['username'];
	$pwd = $_POST['pwd'];

	$login = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$user' AND password = '$pwd'");
	$row = mysqli_fetch_array($login);

	if ($row['username']== $user AND $row['password']== $pwd) {
		session_start();
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		echo "<center><a class='tombol-biru'>Login Berhasil</a></center>";
		header('location: index.php');
	}else{
		echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br> Username atau Password Anda tidak benar.<br>";
	}	
?>