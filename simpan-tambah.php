<?php  
    include "config/config.php";
    global $conn;

    $plat = $_POST['plat'];
    $namakendaraan = $_POST['namakendaraan'];
    $keluar = NULL;

    $gambar = $_FILES['foto'];
    $upload_dir = 'image/'; 
    $gambar_name = $gambar['name'];
    $gambar_path = $upload_dir . $gambar_name;
    

    $move = move_uploaded_file($gambar['tmp_name'], $gambar_path);
    $query = "INSERT INTO kendaraan (plat, namakendaraan, foto_kendaraan, masuk, keluar) VALUES ('$plat', '$namakendaraan','$gambar_name', now(), '$keluar')";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    header("Location: Index.php");


?>