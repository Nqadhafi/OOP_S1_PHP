<?php
session_start();
if(!isset($_SESSION['nim'])){
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Jasa Joki Mobile Legends </title>
</head>
<body>
  <!-- Container Utama -->
<div class="container bg-light my-5 py-4 rounded mx-auto">
  
<!-- Card admin -->
<div class="container d-flex flex-column align-items-center mx-auto">
  <h1>Informasi Admin</h1>
<div class="card" style="width: 30rem;">
<div class="d-flex">
  <div class="w-25">
  <img src="<?php echo $_SESSION['foto'] ?? ''?>" class="card-img-top" alt="...">
  </div>
  <div class="card-body ps-5">
    <h5 class="card-text">Nama : <?php echo $_SESSION['nama']; ?></h5>
    <h5 class="card-text">NIM : <?php echo $_SESSION['nim'];?></h5>
   <a href="?logout" class="btn btn-danger">
    Logout link
    </a>
  </div>
  </div>
</div>

    </div>



  <div class="py-3 text-center">
    <h1>Jasa Joki Mobile Legends Bang Bang</h1>s
  </div>
  
  <!-- Form dengan method post untuk menigirim data -->
    <!-- Memanggil form dengan fungsi include supaya codingan lebih rapi -->
    <?php
if($_SESSION['nim'] == "2212030462"){
  include ('./form/462_customer.php');
}
  ?>
  <br>
  <?php
  if($_SESSION['nim'] == "2212030469"){
   include ('./form/469_product.php'); 
   }
?>

</div>

</body>

<script src="./css/bootstrap.bundle.min.js"></script>
</html>