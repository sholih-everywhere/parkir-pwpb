<?php

session_start();

if(!$_SESSION["nama_lengkap"]){ header("Location: login.php"); }

include 'config/config.php';

$query = "SELECT * FROM kendaraan";
$hasil = query($query);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <title>Tugas PWPB CRUD</title>
</head>
<body>

<div class="container pt-4">

    <div class="d-flex justify-content-between">
        <div><h1>Daftar Kendaraan Parkir, Admin By <a href=""><?php  echo ucfirst($_SESSION["nama_lengkap"]);  ?></a></h1></div>

        <div</div>
        <div><a href="logout.php" class="btn btn-primary m-4">Logout</a><a href="tambah.php" class="btn btn-danger">Tambahkan Parkir!</a></div>
    </div>
    <hr>

    <table class="table">
        <thead>
        <tr class="table-primary">
            <th scope="col">Plat</th>
            <th scope="col">Nama Kendaraan</th>
            <th scope="col">Foto Kendaraan</th>
            <th scope="col">Jam Masuk</th>
            <th scope="col">Jam Keluar</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody falign="center">
        <?php foreach ($hasil as $item) { ?>
            <tr class="table-dark">
                <th scope="row"><?php echo $item["plat"]; ?></th>
                <td><?php echo $item["namakendaraan"]; ?></td>
                <td><img src="image/<?php echo $item["foto_kendaraan"]; ?>" alt="image" width="50px"></td>
                <td><?php echo $item["masuk"]; ?></td>
                <td><?php echo $item["keluar"]; ?></td>
                <td>
                    <a href="delete.php?plat=<?php echo $item['plat']; ?>" class="btn btn-danger">Delete</a> |
                    <a href="ubahdata.php?plat=<?php echo $item['plat']  ?>" class="btn btn-primary">Edit </a> |
                    <a href="edit.php?plat=<?php echo $item['plat']  ?>" class="btn btn-success">Keluar!</a> 
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
-->

</body>
</html>
