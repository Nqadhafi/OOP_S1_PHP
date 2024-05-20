<link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- <form method="POST"> -->
  <form method="post">
<div class="container-fluid bg-light mt-5 mx-auto p-3 w-75 rounded border border-warning">
<div>
  <h1 class="text-center">David Store</h1>
  <h5>Masukkan detail order di bawah</h5>
  <hr >
</div>
  <div class="row">
  <!-- Nama pelanggan -->
  <div class="mb-3 col-md-6">
    <label for="469_NamaPelanggan" class="form-label">Nama Pelanggan</label>
    <input type="text" class="form-control" name="469_NamaPelanggan" required>
  </div>
  <!-- Nomor HP -->
  <div class="mb-3 col-md-6">
    <label for="469_NomorHP" class="form-label">Nomor HP</label>
    <input type="text" class="form-control" name="469_NomorHP" required>
  </div>
  <!-- Email ID -->
  <div class="mb-3 col-md-6">
    <label for="469_Username" class="form-label">E-mail</label>
    <input type="email" class="form-control" name="469_Email" required>
  </div>
  <!-- Password -->
  <div class="mb-3 col-md-6">
    <label for="469_Password" class="form-label">Password</label>
    <input type="Password" class="form-control" name="469_Password" required>
  </div>
  </div>
  <!-- Pilihan Rank Joki -->
  <h6>Pilih Rank yang akan di joki :</h6>
<div class=" row ms-5 mx-auto">
    <div class="form-check d-flex align-items-center col-md-6">
      <input class="form-check-input me-3" type="radio" name="469_Rank" id="469_RankGrandMaster" value="Rank GrandMaster">
      <label class="form-check-label" for="469_RankGrandMaster">
      <h5>
      <img src="../assets/grandmaster_icon.png" class="rank-icon_469">
      Rank GrandMaster</h5>   
      </label>
    </div>
    <div class="form-check d-flex align-items-center col-md-6">
      <input class="form-check-input me-3" type="radio" name="469_Rank" id="469_RankEpic" value="Rank Epic">
      <label class="form-check-label" for="469_RankEpic">
        <h5>
      <img src="../assets/epic_icon.png" class="rank-icon_469">  
      Rank Epic 
      </h5>
      </label>
    </div>
    <div class="form-check d-flex align-items-center col-md-6">
      <input class="form-check-input me-3" type="radio" name="469_Rank" id="469_RankLegend" value="Rank Legend">
      <label class="form-check-label" for="469_RankLegend">
        <h5>
      <img src="../assets/legend_icon.png" class="rank-icon_469">
       Rank Legend 
      </h5>
      </label>
    </div>
    <div class="form-check d-flex align-items-center col-md-6">
      <input class="form-check-input me-3" type="radio" name="469_Rank" id="469_RankMythic" value="Rank Mythic">
      <label class="form-check-label" for="469_RankMythic">
        <h5>
      <img src="../assets/mythic_icon.png" class="rank-icon_469">  Rank Mythic 
      </h5>
      </label>
    </div>
    </div>
    <!-- Jumlah Bintang -->
<div class="form-group my-4">
      <label for="469_Jumlah">
        <h6>Jumlah Bintang:</h6>
      </label>
      <input type="number" class="form-control" id="469_Jumlah" name="469_Jumlah" min="1" step="1" value="1">
    </div>
    <!-- Metode Pembayaran -->
  <h6 class="mt-4">Metode Pembayaran :</h6>
  <select class="form-select" name="469_Metode" required>
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
class dataOrder_469{ //deklarasi class customer
  protected $nama469; //properti bersifat protected
  protected $nohp469;
  protected $email469;
  protected $password469;
  protected $rank469;
  protected $jumlah469;
  protected $metode469;

  //method construct public untuk memberi nilai properti yang bersifat protected
  public function __construct($nama,$nohp,$email,$password,$rank,$jumlah,$metode){ 
      $this->nama469 = $nama;
      $this->nohp469 = $nohp;
      $this->email469 = $email;
      $this->password469 = $password;
      $this->rank469 = $rank;
      $this->jumlah469 = $jumlah;
      $this->metode469 = $metode;
  }
}

class Proses_469 extends dataOrder_469{ //class proses mewarisi properti & method class customer_469
  
  //method protected untuk menampilkan setting tampilan inputan
  protected function setData469(){

    //membuat variable baru nominalRank untuk set harga rank awal
    $nominalRank = NULL;

      // memberi nilai pada nominalRank berdasar value inputan rank
    switch($this->rank469){
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
    $totalHarga469 = $nominalRank * $this->jumlah469;
      echo "<div class='container-fluid p-3 w-75 rounded border border-success mt-4'>";
      echo "<h5>Data Order Anda:</h5><hr>";
      echo "<p><strong>Paket Joki $this->rank469 - $this->jumlah469 Bintang</strong> </p>";
      echo "<p><strong>Nama Pelanggan:</strong> $this->nama469</p>";
      echo "<p><strong>Nomor HP:</strong> $this->nohp469</p>";
      echo "<p><strong>E-mail:</strong> $this->email469</p>";
      echo "<p><strong>Password:</strong> $this->password469</p>";
      echo "<p><strong>Metode Pembayaran:</strong> $this->metode469</p>";
      echo "<p><strong>Total Bayar:</strong> $totalHarga469</p>";
      echo "</div>";
    }
//method public untuk mengambil data dari method setData yang bersifat protected
public function displayData469() {
  // Deklarasi variable email yang digunakan, isinya array
  $emaildigunakan = ["abcd@gmail.com", "david@gmail.com", "robby123@gmail.com"];
      if (in_array($this->email469, $emaildigunakan)) {
          // Jika data di dalam inputan email ada yang sama dengan yang di dalam array $emaildigunakan  maka eksekusi kode dibawah
          echo "<div class='container-fluid p-3 w-75 rounded border border-danger mt-4'>";
          echo "<h5>Email '$this->email469' sudah digunakan.</h5>";
          echo "</div>";
          return;
      }
  
  // Jika tidak ada yang sama dan terisi semua, maka tampilkan data yang diambil dari setData
  $this->setData469();
}

    }

//membuat objek dengan parameter tangkapan data dari POST
$berinilai469 = new Proses_469(
                $_POST['469_NamaPelanggan'],
                $_POST['469_NomorHP'],
                $_POST['469_Email'],
                $_POST['469_Password'],
                $_POST['469_Rank'],
                $_POST['469_Jumlah'],
                $_POST['469_Metode']
              );

//mengeksekusi logika yang ada di method displayData
echo $berinilai469->displayData469();
}?>
</div>

</form>

<script src="./css/bootstrap.bundle.min.js"></script>
<!-- </form> -->

