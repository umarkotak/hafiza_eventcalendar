<?php 

	include 'koneksi.php';
	session_start();

	$nama = $_POST['nama'];

	$sql = $conn->prepare("INSERT INTO tbl_ruangan VALUES ('', :nama)");
	$data = array(':nama'=>$nama);
	$sql->execute($data);

	header('location: index.php?page=home');


?>