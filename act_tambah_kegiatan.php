<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];
    $date  = $_POST['date']." ".$jam_mulai.":00";
    $title = $_POST['title'];
    $description = $_POST['description'];
    $id_ruangan = $_POST['id_ruangan'];

    // echo $date;
    // die();

    $sql = $conn->prepare("INSERT INTO jadwalku VALUES ('',:date, :jam_mulai, :jam_selesai, :title, :description, :id_ruangan)");
    $data = array(':date' => $date,
                  ':jam_mulai' => $jam_mulai,
                  ':jam_selesai' => $jam_selesai,
                  ':title' => $title,
                  ':description' => $description,
                  ':id_ruangan' => $id_ruangan);
    $sql->execute($data);

    header('location: index.php?page=home');

    // if ($date <> '' && $title <> '' && $description <> '') {
    //     include 'koneksi.php';
    //     $query = "INSERT into jadwalku (date, title, description) VALUES ('$date', '$title', '$description')";
    //     $add = mysqli_query($conn, $query);
    //     $pesan = "Input sukses";
    //     // header("location:crud_tabel.php");
    // } else {
    //     $pesan = "Data tidak lengkap";
    // }
}
?>