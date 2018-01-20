<?php

/* 
 * file untuk mengambil data dari database
 * dan mengubahnya ke format json
 * untuk ditampilkan di kalendar.
 */

$host = "localhost";
$user = "root";
$password = "";
$database = "latihan";

$conn = mysqli_connect($host, $user, $password, $database);


$query = "SELECT * from jadwalku ";
$result = mysqli_query($conn, $query) or die(mysqli_error());

$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(
        "date" => $row["date"],       
        "title" => $row["title"],
        "description" => $row["description"]);

    array_push($arr, $temp);}

// json_encode berfungsi untuk merubah Array ke bentuk JSON.
$data = json_encode($arr);
echo $data
        
?>