<!-- Main container -->
    <main>
      <div class="main-content">

        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Zero configuration
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->

        <div class="">
          <form class="card" action="<?= base_url()."matakuliah/editMatakuliah/".$matakuliah->id_matkul ?>" method="POST">
              <h4 class="card-title"><strong>Tambah Mata Kuliah</strong></h4>

              <?php if (validation_errors()) : ?>
                <p><font color="red"><center><?= validation_errors() ?></center></font></p>
              <?php endif; ?>
              <?php if (isset($error)) : ?>
                <p><font color="red"><center><?= $error ?></center></font></p>
              <?php endif; ?>
              
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Kode Mata Kuliah</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="kode" value="<?= $matakuliah->kode_matkul ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama Mata Kuliah</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="nama" value="<?= $matakuliah->nama_matkul ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">SKS</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="sks" value="<?= $matakuliah->sks_matkul ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jumlah Pertemuan</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="jml" value="<?= $matakuliah->jml_matkul ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jam Mulai</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" data-provide="clockpicker" data-date-today-highlight="true" name="jam" value="<?= $matakuliah->jam_matkul ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Toleransi Terlambat</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <input type="text" class="form-control" aria-describedby="basic-addon2" name="terlambat" value="<?= $matakuliah->terlambat_matkul ?>">
                      <span class="input-group-addon" id="basic-addon2">Menit</span>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jam Selesai</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" data-provide="clockpicker" data-date-today-highlight="true" name="selesai" value="<?= $matakuliah->selesai_matkul ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tanggal Mulai Matakuliah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" data-provide="datepicker" data-date-today-highlight="true" name="tanggalmulai" value="<?= $matakuliah->tanggalmulai_matkul ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Dosen</label>
                  <div class="col-sm-8">
                    <select name="dosen" class="form-control">
                    <option disabled></option>
                    <?php foreach ($dosen as $q) : ?>
                      <option value="<?= $q->id_dosen ?>" <?php if ($q->id_dosen == $selected_dosen->id_dosen_jdm) echo "selected"; ?>><?= $q->nama_dosen ?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>

              <footer class="card-footer text-right">
                <button class="btn btn-primary" type="submit">Tambah</button>
              </footer>
            </form>
        </div>

      </div>

      <!--/.main-content -->