<?php

//Menangkap inputan dari form ke dalam variable
$login_462 = $_POST['462_LoginVia'] ?? '';
$nama_462 = $_POST['462_NamaPelanggan'] ?? '';
$nohp_462 = $_POST['462_NomorHP'] ?? '';
$user_462 = $_POST['462_Username'] ?? '';

$rank_469 = $_POST['469_rank'] ?? '';
$jumlah_469 = $_POST['469_jumlahBintang'] ?? 0;
$paket_469 = $_POST['469_KecepatanPaket'] ?? '';
$metode_469 = $_POST['469_MetodePembayaran'] ?? '';
$survey_469 = $_POST['469_Survey'] ?? '';


// Deklarasi variable harga basic
$harga_basic;
// Memberikan harga basic sesuai rank
switch ($rank_469) {
    case "Rank GrandMaster":
        $harga_basic = 5000;
        break;
    case "Rank Epic":
        $harga_basic = 10000;
        break;
    case "Rank Legend":
        $harga_basic = 15000;
        break;
    case "Rank Mythic":
        $harga_basic = 20000;
        break;
}

//Memberikan nilai baru pada variable kecepatan paket
if($paket_469 == "Turbo"){
    $paket_469 = 15000;
} 
else{
    $paket_469 = 0;
}

// Deklarasi total harga
$total_harga = $harga_basic * $jumlah_469 + $paket_469;

echo $total_harga;

// class customer_462{
// protected $cust462_loginvia;
// protected $cust462_nama;
// protected $cust462_nohp;
// protected $cust462_userid;
// protected $cust462_password;

// }

// class product_469 extends customer_462{
// protected $prod469_rank;
// protected $prod469_jumlahbintang;
// protected $prod469_tipepaket;
// protected $prod469_metodepembayaran;
// protected $prod469_survey;
// }

// class informasi_order_462_469 extends product_469{

// }
?>
