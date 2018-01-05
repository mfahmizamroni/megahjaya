<!-- Main container -->
    <main>
      <div class="main-content">

        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Zero configuration
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->

        <div class="">
          <form class="card" action="<?= base_url()."matakuliah/addMatakuliah" ?>" method="POST">
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
                    <input class="form-control" type="text" name="kode" value="<?= set_value('kode') ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama Mata Kuliah</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="nama" value="<?= set_value('nama') ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">SKS</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="sks" value="<?= set_value('sks') ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jumlah Pertemuan</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="jml" value="<?= set_value('jml') ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jam Mulai</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" data-provide="clockpicker" data-date-today-highlight="true" name="jam" value="<?= set_value('jam') ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Toleransi Terlambat</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <input type="text" class="form-control" aria-describedby="basic-addon2" name="terlambat" value="<?= set_value('terlambat') ?>">
                      <span class="input-group-addon" id="basic-addon2">Menit</span>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jam Selesai</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" data-provide="clockpicker" data-date-today-highlight="true" name="selesai" value="<?= set_value('selesai') ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tanggal Mulai Matakuliah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" data-provide="datepicker" data-date-today-highlight="true" name="tanggalmulai" value="<?= set_value('tanggalmulai') ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Dosen</label>
                  <div class="col-sm-8">
                    <select name="dosen" class="form-control">
                    <option disabled selected></option>
                    <?php foreach ($dosen as $q) : ?>
                      <option value="<?= $q->id_dosen ?>"><?= $q->nama_dosen ?></option>
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