<?php
//Menangkap inputan dari form ke dalam variable
$login_462 = $_POST['462_LoginVia'] ?? '';
$nama_462 = $_POST['462_NamaPelanggan'] ?? '';
$nohp_462 = $_POST['462_NomorHP'] ?? '';
$user_462 = $_POST['462_Username'] ?? '';
$password_462 = $_POST['462_Password'] ?? '';

$rank_469 = $_POST['469_rank'] ?? '';
$jumlah_469 = $_POST['469_jumlahBintang'] ?? 0;
$paket_469 = $_POST['469_KecepatanPaket'] ?? '';
$metode_469 = $_POST['469_MetodePembayaran'] ?? '';
$survey_469 = $_POST['469_Survey'] ?? '';



// Memberikan harga basic sesuai rank
switch ($rank_469) {
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

class product_469 extends customer_462{
    protected $prod469_rank;
    protected $prod469_jumlah;
    protected $prod469_paket;
    protected $prod469_metode;
    protected $prod469_survey;

  public function __construct($loginvia,$nama,$nohp,$userid,$password,$rank,$jumlah,$paket,$metode,$survey){
    parent::__construct($loginvia,$nama,$nohp,$userid,$password);
        $this->prod469_rank = $rank;
        $this->prod469_jumlah = $jumlah;
        $this->prod469_paket = $paket;
        $this->prod469_metode = $metode;
        $this->prod469_survey = $survey;
  }
}


class order_462_469 extends product_469{
    public function getOrderInfo_462_469(){
        $total = $this->prod469_rank * $this->prod469_jumlah + $this->prod469_paket;
        return [
            'login' => $this->cust462_loginvia,
            'nama' => $this->cust462_nama,
            'nohp' => $this->cust462_nohp,
            'username' => $this->cust462_userid,
            'password' => $this->cust462_password,
            'rank' => $this->prod469_rank,
            'jumlah' => $this->prod469_jumlah,
            'paket' => $this->prod469_paket,
            'metode' => $this->prod469_survey,
            'survey' => $this->prod469_survey,
            'total' => $total,
        ];
    }
}



$coba = new order_462_469($login_462,$nama_462,$nohp_462,$user_462,$password_462,$rank_469,$jumlah_469,$paket_469,$metode_469,$survey_469);
$hasil =  $coba->getOrderInfo_462_469();
echo $hasil['total'];
?>
