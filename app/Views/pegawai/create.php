<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
  <h1 class="d-flex justify-content-center">Form Tambah Pegawai</h1>
  <div class="row mt-5 d-flex justify-content-center">
    <div class="col-md-5">
      <form action="/pegawai/save" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="mb-3">
          <label for="inputdatakode" class="form-label">Nama Pegawai</label>
          <input type="text" class="form-control <?= ($validation->hasError('nama_pegawai')) ?
                                                    'is-invalid' : ''; ?>" name="nama_pegawai" autofocus value="<?= old('nama_pegawai'); ?>" />
          <div class="invalid-feedback">
            <?= $validation->getError("nama_pegawai"); ?>

          </div>
        </div>
        <div class="mb-3">
          <label for="inputdatakode" class="form-label">NIP</label>
          <input type="text" class="form-control <?= ($validation->hasError('nip')) ?
                                                    'is-invalid' : ''; ?>" name="nip" autofocus value="<?= old('nip'); ?>" />
          <div class="invalid-feedback">
            <?= $validation->getError("nip"); ?>

          </div>
        </div>

        <div class="mb-3">
          <label for="inputdatakode" class="form-label">Alamat</label>
          <input type="text" class="form-control <?= ($validation->hasError('alamat')) ?
                                                    'is-invalid' : ''; ?>" name="alamat" autofocus value="<?= old('alamat'); ?>" />
          <div class="invalid-feedback">
            <?= $validation->getError("alamat"); ?>

          </div>
        </div>
        <select class="form-select" aria-label="Default select example" name="jabatan">
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
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>