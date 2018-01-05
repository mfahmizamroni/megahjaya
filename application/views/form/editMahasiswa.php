<!-- Main container -->
    <main>
      <div class="main-content">

        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Zero configuration
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->

        <div class="">
          <form class="card" action="<?= base_url()."mahasiswa/editMahasiswa/".$mahasiswa->id_mahasiswa ?>" method="POST">
              <h4 class="card-title"><strong>Edit Dosen</strong></h4>

              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="nama" value="<?= $mahasiswa->nama_mahasiswa ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">NRP Mahasiswa</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="nrp" value="<?= $mahasiswa->nrp_mahasiswa ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Pin Mahasiswa</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="pin" value="<?= $mahasiswa->pin_mahasiswa ?>">
                  </div>
                </div>
              </div>

              <footer class="card-footer text-right">
                <button class="btn btn-primary" type="submit">Update</button>
              </footer>
            </form>
        </div>

      </div>

      <!--/.main-content -->