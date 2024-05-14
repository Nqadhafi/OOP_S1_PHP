<link rel="stylesheet" href="./css/custom.css">
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
  </div>
