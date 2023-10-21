<?php 

$host = "localhost";
$password = "";
$user = "root";
$db = "parkir";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    echo "Koneksi Ke Database Gagal";
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Error: " . mysqli_error($conn));
    }

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}


function delete($plat){
    global $conn;

    $query = "DELETE FROM kendaraan WHERE plat='$plat'";
    $result = mysqli_query($conn, $query);

    return 1;
}


function update($data, $id) {
    global $conn;

    $nis = $data['nisn'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];

    $query = "UPDATE siswa SET nisn = '$nis', nama = '$nama', alamat = '$alamat' WHERE id = '$id'";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    return 1;
}


function keluar($plat) {
    global $conn;

    $keluar = date("H:i:s");

    $query = "UPDATE kendaraan SET keluar=now() WHERE plat='$plat'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    return 1;
}



?>