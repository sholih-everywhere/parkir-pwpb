<?php   

include "config/config.php";

global $conn;

    $plat = $_POST['plat'];
    $namakendaraan = $_POST['namakendaraan'];
    $masuk = $_POST["masuk"];
    $gambar = $_FILES['foto'];
    $upload_dir = 'image/'; 
    $gambar_name = $gambar['name'];
    $gambar_path = $upload_dir . $gambar_name;
    

    $move = move_uploaded_file($gambar['tmp_name'], $gambar_path);
    $query = "UPDATE kendaraan SET plat='$plat', namakendaraan='$namakendaraan', foto_kendaraan='$gambar_name' WHERE masuk='$masuk'";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    header("Location: Index.php");

?>