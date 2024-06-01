<?php
session_start();
session_destroy();

// if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
//   // Memanggil file customer.php untuk proses login dan pengolahan data customer
//   include_once('./form/462_customer.php');
//   // Memanggil file product.php untuk proses login dan pengolahan data produk
//   include_once('./form/469_product.php');
// }
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




  <div class="py-3 text-center">
    <h1>Jasa Joki Mobile Legends Bang Bang</h1>
    <?php echo $_SESSION['nama'] ?>
    <?php echo $_SESSION['nim'] ?>
  </div>
  <!-- Form dengan method post untuk menigirim data -->
    <!-- Memanggil form dengan fungsi include supaya codingan lebih rapi -->
    <?php include ('./form/462_customer.php'); ?>
  <br>
  <?php include ('./form/469_product.php'); ?>

</div>

</body>

<script src="./css/bootstrap.bundle.min.js"></script>
</html>