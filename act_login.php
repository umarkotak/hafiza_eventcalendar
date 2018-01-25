<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['pwd'];

$sql = $conn->prepare('SELECT * FROM tbl_user WHERE username = :username AND password = :password');
$data = array(':username' => $username,
							':password' => $password);
$sql->execute($data);

$count = $sql->rowcount();
$row = $sql->fetch(PDO::FETCH_OBJ);

if ($count==0) {
  $_SESSION['notice'] = "Wrong username or password";

  header("location: index.php?page=login");
} else {
  $_SESSION['notice'] = "Login success";
  $_SESSION['username'] = $username;
  $_SESSION['status'] = $row->status;

  header("location: index.php?page=home");
}
?>

<?php
	// session_start();
	// include 'koneksi.php';

	// $user = $_POST['username'];
	// $pwd = $_POST['pwd'];

	// $login = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$user' AND password = '$pwd'");
	// $row =   mysqli_fetch_array($login);

	// if ($row['username'] == $user AND $row['password']== $pwd) {
	// 	$_SESSION['username'] = $row['username'];
	// 	// $_SESSION['password'] = $row['password'];
	// 	echo "<center><a class='tombol-biru'>Login Berhasil</a></center>";
	// 	// header('location: index.php');
	// }else{
	// 	echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br> Username atau Password Anda tidak benar.<br>";
	// }
?>