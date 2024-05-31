  <!-- Codingan PHP Objek -->

  <?php
 //Jika form mengirim request submit POST maka kode dibawah baru dijalanakn
class Customer_462{ //deklarasi class customer
  protected $loginvia462; //properti bersifat protected
  protected $nama462;
  protected $nohp462;
  protected $userid462;
  protected $password462;

  //method construct public untuk memberi nilai properti yang bersifat protected
  public function __construct($login,$nama,$nohp,$userid,$password){ 
      $this->loginvia462 = $login;
      $this->nama462 = $nama;
      $this->nohp462 = $nohp;
      $this->userid462 = $userid;
      $this->password462 = $password;
  }
}

class Proses_462 extends Customer_462{ //class proses mewarisi properti & method class customer_462
  
  //method protected untuk menampilkan setting tampilan inputan
  protected function setData462(){
      echo "<div class='container-fluid p-3 w-75 rounded border border-success mt-4'>";
      echo "<h5>Data Customer Anda:</h5><hr>";
      echo "<p><strong>Login Via:</strong> $this->loginvia462</p>";
      echo "<p><strong>Nama Pelanggan:</strong> $this->nama462</p>";
      echo "<p><strong>Nomor HP:</strong> $this->nohp462</p>";
      echo "<p><strong>User ID / E-mail:</strong> $this->userid462</p>";
      echo "<p><strong>Password:</strong> $this->password462</p>";
      echo "</div>";
    }
//method public untuk mengambil data dari method setData yang bersifat protected
public function displayData462() {
  // Deklarasi variable email yang digunakan, isinya array
  $emaildigunakan = ["abcd@gmail.com", "haikal@gmail.com", "coba@gmail.com"];
  $arrayInputCust = [
      $this->loginvia462,
      $this->nama462,
      $this->nohp462,
      $this->userid462,
      $this->password462
  ];
  foreach ($arrayInputCust as $dataCust) {
      if (in_array($this->userid462, $emaildigunakan)) {
          // Jika data di dalam inputan userid ada yang sama dengan yang di dalam array $emaildigunakan atau ada inputan kosong, maka eksekusi kode dibawah
          echo "<div class='container-fluid p-3 w-75 rounded border border-danger mt-4'>";
          echo "<h5>Email '$this->userid462' masih memiliki tagihan yang belum dibayar.</h5>";
          echo "</div>";
          return;
      }
      //jika inputan data kosong, tidak menampilkan apa-apa
      else if (empty($dataCust)){
        echo "";
        return;
      }
  }
  // Jika tidak ada yang sama dan terisi semua, maka tampilkan data yang diambil dari setData
  $this->setData462();
}


    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
//membuat objek dengan parameter tangkapan data dari POST
$berinilai462 = new Proses_462(
                $_POST['462_LoginVia'] ?? '',
                $_POST['462_NamaPelanggan'] ?? '',
                $_POST['462_NomorHP'] ?? '',
                $_POST['462_Username'] ?? '',
                $_POST['462_Password'] ?? ''
);

//mengeksekusi logika yang ada di method displayData

}?>
<form method="POST">
<div class="container-fluid p-3 w-75 rounded border border-warning">
<div>
  <h5>1. Masukkan data diri kamu</h5>
  <hr >
</div>
  <div class="row">
    <!-- Login Via -->
  <div class="mb-3 col-md-6">
    <label for="462_LoginVia" class="form-label">Login Via</label>
    <input type="text" class="form-control" name="462_LoginVia">
  </div>
  <!-- Nama pelanggan -->
  <div class="mb-3 col-md-6">
    <label for="462_NamaPelanggan" class="form-label">Nama Pelanggan</label>
    <input type="text" class="form-control" name="462_NamaPelanggan">
  </div>
  <!-- Nomor HP -->
  <div class="mb-3 col-md-6">
    <label for="462_NomorHP" class="form-label">Nomor HP</label>
    <input type="text" class="form-control" name="462_NomorHP">
  </div>
  <!-- User ID -->
  <div class="mb-3 col-md-6">
    <label for="462_Username" class="form-label">E-mail</label>
    <input type="email" class="form-control" name="462_Username">
  </div>
  <!-- Password -->
  <div class="mb-3 col-md-6">
    <label for="462_Password" class="form-label">Password</label>
    <input type="Password" class="form-control" name="462_Password">
  </div>
  </div>
  <div class="text-center mt-5 mb-3">
  <button type="submit" class="btn btn-primary px-5 py-3">Order Sekarang</button>
  </div>
  
  <!-- Jika objek di inisialisasi maka tampilkan method untuk menampilkan data -->
  <?php
  if(isset($berinilai462)) {
    echo $berinilai462->displayData462();
  }
  ?>

</div>
</form>

