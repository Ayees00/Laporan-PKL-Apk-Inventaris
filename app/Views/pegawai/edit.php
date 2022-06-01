<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
  <h1 class="d-flex justify-content-center">Form Edit Pegawai</h1>
  <div class="row mt-5 d-flex justify-content-center">
    <div class="col-md-5">
      <?php foreach ($pegawai as $d) : ?>
        <form action="/pegawai/update/<?= $d['id_pegawai']; ?>" method="POST" enctype="multipart/form-data">
          <?= csrf_field(); ?>

          <div class="mb-3">
            <label for="inputdatakode" class="form-label">id Pegawai</label>
            <input type="text" class="form-control" name="id_pegawai" autofocus value="<?= $d['id_pegawai']; ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="inputdatakode" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="nama_pegawai" value="<?= $d['nama_pegawai']; ?>" />
          </div>
          <div class="mb-3">
            <label for="inputdatakode" class="form-label">NIP</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="nip" value="<?= $d['nip'];  ?>" />
          </div>
          <div class="mb-3">
            <label for="inputdatakode" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="alamat" value="<?= $d['alamat']; ?>" />
          </div>
          <select class="form-select" aria-label="Default select example" name="jabatan" value="<?= $d['jabatan']; ?>">
            <option selected>Jabatan</option>
            <option value="Kepala Sekolah">Kepala Sekolah</option>
            <option value="Operartor">Operator / TU</option>
            <option value="Guru PJOK">Guru Pjok</option>
            <option value="Guru Kelas I">Guru Kelas I</option>
            <option value="Guru Kelas II">Guru Kelas II</option>
            <option value="Guru Kelas III">Guru Kelas III</option>
            <option value="Guru Kelas IV">Guru Kelas IV</option>
            <option value="Guru Kelas V">Guru Kelas V</option>
            <option value="Guru Kelas VI">Guru Kelas VI</option>
            <option value="Guru PAI">Guru PAI</option>
          </select>

          <!-- <div class="mb-3">
            <label for="formFile" class="form-label">Masukan Gambar</label>
            <input class="form-control <?= ($validation->hasError('image')) ?
                                          'is-invalid' : ''; ?>" type="file" id="formFile" name="image">
            <div class="invalid-feedback">
              <?= $validation->getError("image"); ?>

            </div>
          </div> -->
          <div class="table-responsive mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Batal</button>
          </div>
        <?php endforeach; ?>
        </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>