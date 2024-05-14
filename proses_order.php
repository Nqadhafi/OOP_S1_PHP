<?php
//Menangkap inputan dari form customer & produk ke dalam variable
$login_462 = $_POST['462_LoginVia'] ?? '';
$nama_462 = $_POST['462_NamaPelanggan'] ?? '';
$nohp_462 = $_POST['462_NomorHP'] ?? '';
$user_462 = $_POST['462_Username'] ?? '';
$password_462 = $_POST['462_Password'] ?? '';
//
$rank_input_469 = $_POST['469_rank'] ?? 0;
$jumlah_469 = $_POST['469_jumlahBintang'] ?? 0;
$paket_469 = $_POST['469_KecepatanPaket'] ?? 0;
$metode_469 = $_POST['469_MetodePembayaran'] ?? '';
$survey_469 = $_POST['469_Survey'] ?? '';
// Memberikan harga basic sesuai rank
$rank469;
switch ($rank_input_469) {
    case "Rank GrandMaster":
        $rank_469 = 5000;
        break;
    case "Rank Epic":
        $rank_469 = 10000;
        break;
    case "Rank Legend":
        $rank_469 = 15000;
        break;
    case "Rank Mythic":
        $rank_469 = 20000;
        break;
}
//Memberikan nilai baru pada variable kecepatan paket
if($paket_469 == "Turbo"){
    $paket_469 = 15000;
} 
else{
    $paket_469 = 0;
}

//Class Customer 5 Properti & construct method
class customer_462{
protected $cust462_loginvia;
protected $cust462_nama;
protected $cust462_nohp;
protected $cust462_userid;
protected $cust462_password;

public function __construct($loginvia,$nama,$nohp,$userid,$password)
{
    $this->cust462_loginvia = $loginvia;
    $this->cust462_nama = $nama;
    $this->cust462_nohp = $nohp;
    $this->cust462_userid = $userid;
    $this->cust462_password = $password;
}
}

//Class Produk, mewarisi porperti & Construct method yang ada di Class Customer
class product_469 extends customer_462{
    protected $prod469_rank_char;
    protected $prod469_rank_numerik;
    protected $prod469_jumlah;
    protected $prod469_paket;
    protected $prod469_metode;
    protected $prod469_survey;

  public function __construct($loginvia,$nama,$nohp,$userid,$password,$rank_char,$rank_num,$jumlah,$paket,$metode,$survey){
// Mendeklarasikan ulang construct method yang ada di Class Customer supaya dapat dijalankan di Class saat ini
    parent::__construct($loginvia,$nama,$nohp,$userid,$password);
    //Construct class saat ini
        $this->prod469_rank_char = $rank_char;
        $this->prod469_rank_numerik = $rank_num;
        $this->prod469_jumlah = $jumlah;
        $this->prod469_paket = $paket;
        $this->prod469_metode = $metode;
        $this->prod469_survey = $survey;
  }
}

// Class Order mewarisi porperti & construct method yang ada di class Product dan Customer(karena class product juga mewarisi apa yang ada di class customer)
class order_462_469 extends product_469{

    // Method protected hanya bisa di akses di class turunan atau class itu sendiri
    protected function setOrderInfo_462(){
        $total = $this->prod469_rank_numerik * $this->prod469_jumlah + $this->prod469_paket;
        return [
            'login' => $this->cust462_loginvia,
            'nama' => $this->cust462_nama,
            'nohp' => $this->cust462_nohp,
            'username' => $this->cust462_userid,
            'password' => $this->cust462_password,
            'rank_char' => $this->prod469_rank_char,
            'rank_num' => $this->prod469_rank_numerik,
            'jumlah' => $this->prod469_jumlah,
            'paket' => $this->prod469_paket,
            'metode' => $this->prod469_survey,
            'survey' => $this->prod469_survey,
            'total' => $total,
        ];
    }
    // Mengakses method protected setOrderInfo dengan method public di class yang sama
    public function getOrderInfo_469(){
        // Mendapatkan data berupa array ke dalam variabel $orderInfo_469 dari method protected setOrderInfo_462
        $orderInfo_469 = $this->setOrderInfo_462();
        // Jika salah satu data array di variable $orderInfo_469 bernilai kosong maka meredirect ke index.php
        if(in_array("",$orderInfo_469)){
            header('Location: index.php');
            exit;
        }
        // jika data ada, maka langsung mengembalikan nilai $orderInfo_469 untuk ditampilkan
        return $orderInfo_469;
    }
}

$hasilOrder_462_469 = new order_462_469($login_462, $nama_462, $nohp_462, $user_462, $password_462, $rank_input_469, $rank_469, $jumlah_469, $paket_469, $metode_469, $survey_469);
$orderInfo_462_469 = $hasilOrder_462_469->getOrderInfo_469();
?>


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
    <!-- Nama Customer -->
    <span class="d-flex justify-content-between">
       <h6 class="card-text">Nama Customer</h6>
       <p> <?php echo $orderInfo_462_469['login'] ?></p>
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
