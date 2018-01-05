<!-- Main container -->
<main>
  <div class="main-content">

    <div class="col-12">
      <form action="<?= base_url()."matakuliah/editPengganti/".$pengganti->id_pengganti ?>" method="POST" target="_blank">
        <div class="card">
          <h4 class="card-title"><strong>Kelas</strong> Pengganti</h4>

          <div class="card-body">
            <div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <label for="select">Mata Kuliah</label>
                  <select class="form-control" id="select" name="matkul">
                    <option selected="selected" disabled="disabled">&nbsp;</option>
                    <?php foreach ($matkul as $q) { ?>
                    <option value="<?= $q->id_matkul ?>" <?php if ($q->id_matkul == $pengganti->id_matkul_pengganti) echo "selected";?>><?= $q->nama_matkul ?></option>
                    <?php } ?>
                  </select>
                </div>
                <hr>
                <div class="form-group">
                  <label>Jadwal Pengganti</label>
                  <input type="text" class="form-control" data-provide="datepicker" data-date-today-highlight="true" name="tanggalpengganti" value="<?= $pengganti->tanggal_pengganti ?>">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Jadwal Asli</label>
                  <input type="text" class="form-control" data-provide="datepicker" data-date-today-highlight="true" name="tanggal" value="<?= $pengganti->tanggal_asli ?>">
                </div>
                <hr>
                <div class="form-group">
                  <label>Jam Pengganti</label>
                  <input type="text" class="form-control" data-provide="clockpicker" data-date-today-highlight="true" name="jam" value="<?= $pengganti->jam_pengganti ?>">
                </div>
              </div>

            </div>
          </div>

          <div class="card-footer">
            <div class="pull-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>

  </div>
      <!--/.main-content -->