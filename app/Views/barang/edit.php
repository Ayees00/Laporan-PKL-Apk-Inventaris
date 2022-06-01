<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
  <h1 class="d-flex justify-content-center">Form Edit Barang</h1>
  <div class="row mt-5 d-flex justify-content-center">
    <div class="col-md-5">
      <?php foreach ($barang as $b) : ?>
        <form action="/barang/update/<?= $b['kode_barang']; ?>" method="POST">
          <?= csrf_field(); ?>
          <div class="mb-3">
            <label for="inputdatakode" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" name="kode_barang" autofocus value="<?= $b['kode_barang']; ?>" readonly>

          </div>
          <div class="mb-3">
            <label for="inputdatakode" class="form-label">Nama Barang</label>
            <input type="text" class="form-control " name="nama_barang" value="<?= $b['nama_barang']; ?>">

          </div>
          <div class="mb-3">
            <label for="inputdatakode" class="form-label">Jumlah</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="jumlah" value="<?= $b['jumlah']; ?>" />
            <div class="mb-3">
              <label for="inputdatakode" class="form-label">jenis</label>
              <select class="form-select" aria-label="Default select example" name="jenis_barang" value="<?= $b['jenis_barang']; ?>">
                <option selected>jenis</option>
                <option value="elektronik">elektronik</option>
                <option value="elektroknik">Elektronik</option>
                <option value="besi">Besi</option>
                <option value="kayu">Kayu</option>
                <option value="nilon">Nilon</option>
                <option value="karet">Karet</option>
                <option value="rotan">Rotan</option>
                <option value="bambu">Bambu</option>
                <option value="busa">Busa</option>
                <option value="kertas">Kertas</option>
                <option value="kaca_aluminium">Kaca Aluminium</option>
                <option value="plastik">Kain</option>
                <option value="triplek">Triplek</option>
                <option value="kayu_kaca">Kayu-Kaca</option>
                <option value="besi_kayu">Besi-Kayu</option>
                <option value="gel">Gel</option>
                <option value="cairan">Cairan</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label for="inputdatakode" class="form-label">ruangan</label>
            <select class="form-select" aria-label="Default select example" name="ruangan" value="<?= $b['kode_ruangan']; ?>">
              <option selected>ruangan</option>
              <?php foreach ($ruangan as $r) : ?>
                <option value="<?= $r['kode_ruangan']; ?>"><?= $r['kode_ruangan'] . "-" . $r['nama_ruangan']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Batal</button>
          </div>
        <?php endforeach; ?>
        </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>