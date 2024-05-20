<link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- <form method="POST"> -->
  <form method="post">
<div class="container-fluid bg-light mt-5 mx-auto p-3 w-75 rounded border border-warning">
<div>
  <h5>1. Masukkan data diri kamu</h5>
  <hr >
</div>
  <div class="row">
  <!-- Nama pelanggan -->
  <div class="mb-3 col-md-6">
    <label for="462_NamaPelanggan" class="form-label">Nama Pelanggan</label>
    <input type="text" class="form-control" name="462_NamaPelanggan" required>
  </div>
  <!-- Nomor HP -->
  <div class="mb-3 col-md-6">
    <label for="462_NomorHP" class="form-label">Nomor HP</label>
    <input type="text" class="form-control" name="462_NomorHP" required>
  </div>
  <!-- Email ID -->
  <div class="mb-3 col-md-6">
    <label for="462_Username" class="form-label">E-mail</label>
    <input type="email" class="form-control" name="462_Email" required>
  </div>
  <!-- Password -->
  <div class="mb-3 col-md-6">
    <label for="462_Password" class="form-label">Password</label>
    <input type="Password" class="form-control" name="462_Password" required>
  </div>
  </div>
  <!-- Pilihan Rank Joki -->
  <h6>Pilih Rank yang akan di joki :</h6>
<div class=" row ms-5 mx-auto">
    <div class="form-check d-flex align-items-center col-md-6">
      <input class="form-check-input me-3" type="radio" name="462_Rank" id="462_RankGrandMaster" value="Rank GrandMaster">
      <label class="form-check-label" for="462_RankGrandMaster">
      <h5>
      <img src="../assets/grandmaster_icon.png" class="rank-icon_462">
      Rank GrandMaster</h5>   
      </label>
    </div>
    <div class="form-check d-flex align-items-center col-md-6">
      <input class="form-check-input me-3" type="radio" name="462_Rank" id="462_RankEpic" value="Rank Epic">
      <label class="form-check-label" for="462_RankEpic">
        <h5>
      <img src="../assets/epic_icon.png" class="rank-icon_462">  
      Rank Epic 
      </h5>
      </label>
    </div>
    <div class="form-check d-flex align-items-center col-md-6">
      <input class="form-check-input me-3" type="radio" name="462_Rank" id="462_RankLegend" value="Rank Legend">
      <label class="form-check-label" for="462_RankLegend">
        <h5>
      <img src="../assets/legend_icon.png" class="rank-icon_462">
       Rank Legend 
      </h5>
      </label>
    </div>
    <div class="form-check d-flex align-items-center col-md-6">
      <input class="form-check-input me-3" type="radio" name="462_Rank" id="462_RankMythic" value="Rank Mythic">
      <label class="form-check-label" for="462_RankMythic">
        <h5>
      <img src="../assets/mythic_icon.png" class="rank-icon_462">  Rank Mythic 
      </h5>
      </label>
    </div>
    </div>
    <!-- Jumlah Bintang -->
<div class="form-group my-4">
      <label for="462_Jumlah">
        <h6>Jumlah Bintang:</h6>
      </label>
      <input type="number" class="form-control" id="462_Jumlah" name="462_Jumlah" min="1" step="1" value="1">
    </div>
    <!-- Metode Pembayaran -->
  <h6 class="mt-4">Metode Pembayaran :</h6>
  <select class="form-select" name="462_Metode" required>
  <option selected>Pilih Metode Pembayaran Anda</option>
  <option value="Dana">Dana</option>
  <option value="OVO">OVO</option>
  <option value="Transfer">Bank Transfer</option>
</select>
<!-- Button Submit -->
  <div class="text-center mt-5 mb-3">
  <button type="submit" class="btn btn-primary mx-2 px-5 py-3">Submit</button>
  <a href="../">
  <div class="btn btn-primary px-5 py-3">Kembali</div>
  </a>
  </div>
  <!-- Codingan PHP Objek -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //Jika form mengirim request submit POST maka kode dibawah baru dijalanakn
class dataOrder_462{ //deklarasi class customer
  protected $nama462; //properti bersifat protected
  protected $nohp462;
  protected $email462;
  protected $password462;
  protected $rank462;
  protected $jumlah462;
  protected $metode462;

  //method construct public untuk memberi nilai properti yang bersifat protected
  public function __construct($nama,$nohp,$email,$password,$rank,$jumlah,$metode){ 
      $this->nama462 = $nama;
      $this->nohp462 = $nohp;
      $this->email462 = $email;
      $this->password462 = $password;
      $this->rank462 = $rank;
      $this->jumlah462 = $jumlah;
      $this->metode462 = $metode;
  }
}

class Proses_462 extends dataOrder_462{ //class proses mewarisi properti & method class customer_462
  
  //method protected untuk menampilkan setting tampilan inputan
  protected function setData462(){

    //membuat variable baru nominalRank untuk set harga rank awal
    $nominalRank = NULL;

      // memberi nilai pada nominalRank berdasar value inputan rank
    switch($this->rank462){
      case "Rank GrandMaster":
        $nominalRank = 5000;
        break;
    case "Rank Epic":
      $nominalRank = 10000;
        break;
    case "Rank Legend":
      $nominalRank = 15000;
        break;
    case "Rank Mythic":
      $nominalRank = 20000;
        break;
    }
    //rumus memberi total harga joki
    $totalHarga462 = $nominalRank * $this->jumlah462;
      echo "<div class='container-fluid p-3 w-75 rounded border border-success mt-4'>";
      echo "<h5>Data Order Anda:</h5><hr>";
      echo "<p><strong>Paket Joki $this->rank462 - $this->jumlah462 Bintang</strong> </p>";
      echo "<p><strong>Nama Pelanggan:</strong> $this->nama462</p>";
      echo "<p><strong>Nomor HP:</strong> $this->nohp462</p>";
      echo "<p><strong>E-mail:</strong> $this->email462</p>";
      echo "<p><strong>Password:</strong> $this->password462</p>";
      echo "<p><strong>Metode Pembayaran:</strong> $this->metode462</p>";
      echo "<p><strong>Total Bayar:</strong> $totalHarga462</p>";
      echo "</div>";
    }
//method public untuk mengambil data dari method setData yang bersifat protected
public function displayData462() {
  // Deklarasi variable email yang digunakan, isinya array
  $emaildigunakan = ["abcd@gmail.com", "haikal@gmail.com", "coba@gmail.com"];
  $arrayInputCust = [
    $this->nama462,
    $this->nohp462,
    $this->email462,
    $this->password462,
    $this->rank462,
    $this->jumlah462,
    $this->metode462,
  ];
  foreach ($arrayInputCust as $dataCust) {
      if (in_array($this->email462, $emaildigunakan)) {
          // Jika data di dalam inputan email ada yang sama dengan yang di dalam array $emaildigunakan  maka eksekusi kode dibawah
          echo "<div class='container-fluid p-3 w-75 rounded border border-danger mt-4'>";
          echo "<h5>Email sudah digunakan atau ada data yang kosong.</h5>";
          echo "</div>";
          return;
      }
  }
  // Jika tidak ada yang sama dan terisi semua, maka tampilkan data yang diambil dari setData
  $this->setData462();
}

    }

//membuat objek dengan parameter tangkapan data dari POST
$berinilai462 = new Proses_462(
                $_POST['462_NamaPelanggan'],
                $_POST['462_NomorHP'],
                $_POST['462_Email'],
                $_POST['462_Password'],
                $_POST['462_Rank'],
                $_POST['462_Jumlah'],
                $_POST['462_Metode']
              );

//mengeksekusi logika yang ada di method displayData
echo $berinilai462->displayData462();
}?>
</div>

</form>

<script src="./css/bootstrap.bundle.min.js"></script>
<!-- </form> -->

