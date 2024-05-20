<link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
<!-- <form method="POST"> -->
  <form method="post">
<div class="container-fluid p-3 w-75 rounded border border-warning">
<div>
  <h5>2. Pilih produk yang mau kamu beli</h5>
  <hr >
</div>
<!-- Radio Rank -->
<h6>Pilih Rank yang akan di joki :</h6>
<div class=" row ms-5 mx-auto">
    <div class="form-check d-flex align-items-center col-md-6">
      <input class="form-check-input me-3" type="radio" name="469_rank" id="469_rankGrandMaster" value="Rank GrandMaster">
      <label class="form-check-label" for="469_rankGrandMaster">
      <h5>
      <img src="./assets/grandmaster_icon.png" class="rank-icon_462">
      Rank GrandMaster</h5>   
      </label>
    </div>
    <div class="form-check d-flex align-items-center col-md-6">
      <input class="form-check-input me-3" type="radio" name="469_rank" id="469_rankEpic" value="Rank Epic">
      <label class="form-check-label" for="469_rankEpic">
        <h5>
      <img src="./assets/epic_icon.png" class="rank-icon_462">  
      Rank Epic 
      </h5>
      </label>
    </div>
    <div class="form-check d-flex align-items-center col-md-6">
      <input class="form-check-input me-3" type="radio" name="469_rank" id="469_rankLegend" value="Rank Legend">
      <label class="form-check-label" for="469_rankLegend">
        <h5>
      <img src="./assets/legend_icon.png" class="rank-icon_462">
       Rank Legend 
      </h5>
      </label>
    </div>
    <div class="form-check d-flex align-items-center col-md-6">
      <input class="form-check-input me-3" type="radio" name="469_rank" id="469_rankMythic" value="Rank Mythic">
      <label class="form-check-label" for="469_rankMythic">
        <h5>
      <img src="./assets/mythic_icon.png" class="rank-icon_462">  Rank Mythic 
      </h5>
      </label>
    </div>
    </div>
<!-- Jumlah Bintang -->
<div class="form-group my-4">
      <label for="469_jumlahBintang">
        <h6>Jumlah Bintang:</h6>
      </label>
      <input type="number" class="form-control" id="469_jumlahBintang" name="469_jumlahBintang" min="1" step="1" value="1">
    </div>
  <!-- Kecepatan Order -->
  <h6>Kecepatan Order :</h6>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Turbo" id="469_KecepatanPaket" name="469_KecepatanPaket">
  <label class="form-check-label" for="469_KecepatanPaket">
    Paket Turbo (3-5 hari)
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Reguler" id="469_KecepatanPaket" name="469_KecepatanPaket">
  <label class="form-check-label" for="469_KecepatanPaket">
    Paket Reguler (7-10 hari)
  </label>
</div>
  <!-- Metode Pembayaran -->
  <h6 class="mt-4">Metode Pembayaran :</h6>
  <select class="form-select" name="469_MetodePembayaran">
  <option selected>Pilih Metode Pembayaran Anda</option>
  <option value="Dana">Dana</option>
  <option value="OVO">OVO</option>
  <option value="Transfer">Bank Transfer</option>
</select>
<!-- Survey -->
  <div class="mt-4 ">
    <label for="Survey" class="form-label"><h6>Darimana kamu mendengar tentang kami?</h6></label>
    <input type="text" class="form-control" name="469_Survey" id="Survey">
  </div>
  <div class="text-center mt-5 mb-3">
  <button type="submit" class="btn btn-primary px-5 py-3">Order Sekarang</button>
  </div>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //class product469 mempunyai 5 properti protected dan 1 construct method public
      class Product469{
        protected $rank469;
        protected $jumlah469;
        protected $kecepatan469;
        protected $metode469;
        protected $survey469;

        //memberi nilai kepada properti di atas melalui tangkapan data dari parameter
        public function __construct($rank, $jumlah, $kecepatan, $metode,$survey){
          $this->rank469 = $rank;
          $this->jumlah469 = $jumlah;
          $this->kecepatan469 = $kecepatan;
          $this->metode469 = $metode;
          $this->survey469 = $survey;
        }
      }

      //Class proses469 mewarisi properti & construct dari class product469
      class Proses469 extends Product469{
        protected function setData469(){
          //membuat variable baru nominalRank untuk set harga rank awal
          $nominalRank = NULL;
          //membuat variable baru paket untuk set harga kecepatan paket
          $paket = NULL;
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
          // memberi nilai harga pada paket berdasarkan value inputan
          if($this->kecepatan469 == "Turbo"){
            $paket = 15000;
          }
          else{
            $paket = 0;
          }
          //rumus memberi total harga joki
          $totalHarga = $nominalRank * $this->jumlah469 + $paket;

      echo "<div class='container-fluid p-3 w-75 rounded border border-success mt-4'>";
      echo "<h5>Data Order Anda:</h5><hr>";
      echo "<p><strong>Paket Joki $this->rank469 - $this->jumlah469 Bintang</strong> </p>";
      echo "<p><strong>Tipe Paket:</strong> $this->kecepatan469</p>";
      echo "<p><strong>Metode Pembayaran:</strong> $this->metode469</p>";
      echo "<p><strong>Referal :</strong> $this->survey469</p>";
      echo "<p><strong>Total Bayar:</strong> $totalHarga</p>";
      echo "</div>";
        }

      public function displayData469(){
        //deklarasi variable isi array metode pembayaran diblokir
        $metodeBlokir = ["DANA","OVO",""];
        //deklarasi array inputan
        $arrayInputProd = [
          $this->rank469,
          $this->jumlah469,
          $this->kecepatan469,
          $this->metode469,
          $this->survey469,
      ];
      foreach ($arrayInputProd as $dataProd) {
        if (empty($dataProd) || in_array($this->metode469, $metodeBlokir)) {
            // Jika data di dalam inputan metode ada yang sama dengan yang di dalam array $metodeBlokir atau, maka eksekusi kode dibawah
            echo "<div class='container-fluid p-3 w-75 rounded border border-danger mt-4'>";
            echo "<h5>Pembayaran tidak bisa digunakan atau ada data yang kosong.</h5>";
            echo "</div>";
            return;
        }
    }
    // Jika tidak ada yang sama dan terisi semua, maka tampilkan data yang diambil dari setData
    $this->setData469();
      }

      }
      //membuat objek dengan parameter tangkapan dari submit POST
      $berinilai469 = new Proses469(
          $_POST['469_rank']?? '',
          $_POST['469_jumlahBintang'],
          $_POST['469_KecepatanPaket'] ?? '',
          $_POST['469_MetodePembayaran'],
          $_POST['469_Survey']
      );

      //mengeksekusi method displaydata469
      echo $berinilai469->displayData469();
    }

  ?>
  </div>
  </form>
  <script src="./css/bootstrap.bundle.min.js"></script>
<!-- </form> -->
