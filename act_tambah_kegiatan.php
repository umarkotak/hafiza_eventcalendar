<?php
$pesan = "";
if (isset($_POST['submit'])) {
    $date  = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
        
    if ($date <> '' && $title <> '' && $description <> '') {
        include 'koneksi.php';
        $query = "INSERT into jadwalku (date, title, description) VALUES ('$date', '$title', '$description')";
        $add = mysqli_query($conn, $query);
        $pesan = "Input sukses";
        // header("location:crud_tabel.php");
    } else {
        $pesan = "Data tidak lengkap";        
    }
}
echo $pesan;
?>