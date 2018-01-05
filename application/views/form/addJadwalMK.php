<!-- Main container -->
<main>
  <div class="main-content">

    <div class="">
      <form class="card">
        <h4 class="card-title"><strong>Tambah Peserta</strong></h4>

        <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Kode Mata Kuliah</label>
            <div class="col-sm-8">
              <input class="form-control" type="text" value="<?= $matkul->kode_matkul ?>" readonly>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nama Mata Kuliah</label>
            <div class="col-sm-8">
              <input class="form-control" type="text" value="<?= $matkul->nama_matkul ?>" readonly>
            </div>
          </div>

          <p>Upload Daftar Mahasiswa per Matakuliah</p>
          <div data-provide="dropzone" data-url="path/to/file-uploader.php"></div>
        </div>

        <footer class="card-footer text-right">
          <button class="btn btn-primary" type="submit">Tambah</button>
        </footer>
      </form>
    </div>

  </div>