<?php   

include "config/config.php";

global $conn;

$plat = $_GET['plat'];
$query = "SELECT * FROM kendaraan WHERE plat='$plat'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tugas PWPB CRUD</title>
  </head>
  <body>
    
  
  <div class="container pt-4">

  <h1>Tambah Kendaraan Parkir</h1>
  <hr>
  <form enctype="multipart/form-data" method="post" action="ubahdataquery.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plat Nomor</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="plat" value="<?php  echo $data["plat"]  ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Kendaraan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="namakendaraan"  value="<?php  echo $data["namakendaraan"]  ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Foto Kendaraan</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="foto" value="<?php echo $data["foto_kendaraan"]  ?>">
    <input type="hidden" class="form-control" id="exampleInputPassword1" name="masuk" value="<?php echo $data["masuk"]  ?>">
  </div>

  <button type="submit" class="btn btn-primary" name="submit" value="submit">Tambahkan</button>
</form>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


  </body>
</html>