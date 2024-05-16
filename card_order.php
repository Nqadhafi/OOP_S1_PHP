<!-- Output Hasil berupa card -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
<div class="container bg-light my-5 py-4 rounded mx-auto">
  <div class="py-3 text-center bg-success rounded text-white">
    <h4>Order berhasil dibuat!</h4>
  </div>
  <!-- Card Order -->
  <div>
  <div class="card border-success mb-3 mx-auto my-5" style="max-width: 30rem;">
  <div class="card-header bg-transparent border-success">Informasi Order</div>
  <div class="card-body">
    <h5 class="card-title">Paket Joki <?php echo $orderInfo_462_469['rank_char'] ?> - <?php echo $orderInfo_462_469['jumlah'] ?> Bintang</h5>
    <!-- Login Via -->
    <span class="d-flex justify-content-between">
       <h6 class="card-text">Login Via</h6>
       <p> <?php echo $orderInfo_462_469['login'] ?></p>
       </span>
    <!-- Nama Customer -->
    <span class="d-flex justify-content-between">
       <h6 class="card-text">Nama Customer</h6>
       <p> <?php echo $orderInfo_462_469['nama'] ?></p>
       </span>
       <!-- Nomor HP -->
    <span class="d-flex justify-content-between">
       <h6 class="card-text">Nomor HP</h6>
       <p> <?php echo $orderInfo_462_469['nohp'] ?></p>
       </span>
       <!-- ID/Nickname -->
    <span class="d-flex justify-content-between">
       <h6 class="card-text">Nickname/ID</h6>
       <p> <?php echo $orderInfo_462_469['username'] ?></p>
       </span>
       <!-- Password -->
       <span class="d-flex justify-content-between">
       <h6 class="card-text">Password</h6>
       <p> <?php echo $orderInfo_462_469['password'] ?></p>
       </span>
       <!-- Tipe Paket -->
    <span class="d-flex justify-content-between">
       <h6 class="card-text">Tipe Paket</h6>
       <p> 
        <?php 
         if($orderInfo_462_469['paket'] == 15000){
            $orderInfo_462_469['paket'] = "Turbo";
           }
           else{
            $orderInfo_462_469['paket'] = "Reguler";
           }
        echo $orderInfo_462_469['paket'] ?>
    </p>
       </span>
       <!-- Metode Pembayaran -->
    <span class="d-flex justify-content-between">
       <h6 class="card-text">Metode Pembayaran</h6>
       <p> <?php echo $orderInfo_462_469['metode'] ?></p>
       </span>
       <!-- Referal -->
    <span class="d-flex justify-content-between">
       <h6 class="card-text">Referal</h6>
       <p> <?php 
       echo $orderInfo_462_469['survey']?></p>
       </span>
</div>
<!-- Total Pembayaran -->
  <div class="card-footer bg-transparent border-success d-flex justify-content-between">
    <h6><i>Total Pembayaran</i></h6>
    <h5><?php echo $orderInfo_462_469['total']?></h5>
</div>
</div>
<div class="text-center mt-5 mb-5">
<i ><b>*Screenshot informasi order di atas dan kirimkan ke Whatsapp admin di <a href="https://wa.me/62895422444127">sini</a></b></i>
    </div>  
</div>
</div>
</body>
<script src="./css/bootstrap.bundle.min.js"></script>
</html>