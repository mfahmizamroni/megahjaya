<!-- Main container -->
  <main>

    <div class="main-content">

      <div class="card">
        <h4 class="card-title"><strong>Preview</strong></h4>
        <br>


        <div class="card-body">
          <h2 class="text-center"><b>Laporan Absensi Mahasiswa Per Mata Kuliah</b></h2>
          <table class="">
            <tr>
              <td>Mata Kuliah</td>
              <td>:</td>
              <td><b><?= $matkul[0]->nama_matkul ?></b></td>
              <td width="40%;"></td>
              <td>Jumlah Pertemuan</td>
              <td>:</td>
              <td><b><?= $matkul[0]->jml_matkul ?></b></td>
            </tr>
            <tr>
              <td>SKS</td>
              <td>:</td>
              <td><b>4</b></td>
              <td width="500px;"></td>
              <!-- <td>Pertemuan di Tempuh</td>
              <td>:</td>
              <td><b>16</b></td> -->
            </tr>
            <tr>
              <td>Dosen</td>
              <td>:</td>
              <td><b><?= $matkul[0]->nama_dosen ?></b></td>
              <td width="500px;"></td>
              <!-- <td>Presentase Pertemuan</td>
              <td>:</td>
              <td><b>100%</b></td> -->
            </tr>
          </table>
          <br>
          <?php if ($matkul[0]->jml_matkul <= 16) { ?>
            <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="table1">
              <thead>
                <tr>
                  <th rowspan="2" style="width: 10px; padding-bottom: 35px; text-align: center;">No</th>
                  <th rowspan="2" style="padding-bottom: 35px; text-align: center;">NRP</th>
                  <th rowspan="2" style="padding-bottom: 35px; text-align: center;">Nama</th>
                  <th colspan="<?= $matkul[0]->jml_matkul ?>" style="text-align: center;">Pertemuan Ke</th>
                  <th colspan="3" style="text-align: center;">Keterangan</th>
                </tr>
                <tr>
                  <?php for ($i=1; $i < $matkul[0]->jml_matkul+1; $i++) {  ?>
                  <th style="width: 3px;"><?= $i ?></th>
                  <?php } ?>
                  <th style="width: 3px;">S</th>
                  <th style="width: 3px;">I</th>
                  <th style="width: 3px;">A</th>
                </tr>
              </thead>
              <tbody>
                <?php if(count($absensi) > 0){ ?>
                <?php $k = 1;
                  foreach ($matkul as $matkuls) { ?>
                  <tr>
                    <td><?= $k ?></td>
                    <td><?= $matkuls->nrp_mahasiswa ?></td>
                    <td><?= $matkuls->nama_mahasiswa ?></td>
                    <?php for ($i=0; $i < $matkul[0]->jml_matkul; $i++) {  ?>
                      <?php for ($j=0; $j < count($absensi); $j++) { ?>
                        <?php if ($jadwal[$i] == $absensi[$j]->tanggal) { ?>
                          <?php if ($absensi[$j]->pin_mahasiswa == $matkuls->pin_mahasiswa && $absensi[$j]->status_absensi == "T") { ?>
                            <td style="color: orange;">T</td>
                          <?php break;} else if ($absensi[$j]->pin_mahasiswa == $matkuls->pin_mahasiswa && $absensi[$j]->status_absensi == "H"){ ?>
                            <td>H</td>
                          <?php break;} else if ($absensi[$j]->pin_mahasiswa == $matkuls->pin_mahasiswa && $absensi[$j]->status_absensi == "A"){ ?>
                            <td style="color: red;">A</td>
                          <?php break;} else if ($absensi[$j]->pin_mahasiswa == $matkuls->pin_mahasiswa && $absensi[$j]->status_absensi == "S"){ ?>
                            <td style="color: red;">S</td>
                          <?php break;} else if ($absensi[$j]->pin_mahasiswa == $matkuls->pin_mahasiswa && $absensi[$j]->status_absensi == "I"){ ?>
                            <td style="color: red;">I</td>
                          <?php break;} ?>
                        <?php } else if ($j == count($absensi)-1) { ?>
                          <td></td>
                        <?php } ?>
                      <?php } ?>
                    <?php } ?>
                    <td id="s<?= $k ?>" >0</td>
                    <td id="izin<?= $k ?>" >0</td>
                    <td id="a<?= $k ?>" >0</td>
                  </tr>
                <?php $k++; } } else { ?>
                  <?php $k = 1;
                  foreach ($matkul as $matkuls) { ?>
                  <tr>
                    <td><?= $k ?></td>
                    <td><?= $matkuls->nrp_mahasiswa ?></td>
                    <td><?= $matkuls->nama_mahasiswa ?></td>
                    <?php for ($i=1; $i < $matkul[0]->jml_matkul+1; $i++) {  ?>
                    <th></th>
                    <?php } ?>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                  </tr>
                  <?php $k++; } ?>
                <?php } ?>
              </tbody>
            </table>
          <?php } else { ?>
            <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="table1">
              <thead>
                <tr>
                  <th rowspan="2" style="width: 10px; padding-bottom: 35px; text-align: center;">No</th>
                  <th rowspan="2" style="padding-bottom: 35px; text-align: center;">NRP</th>
                  <th rowspan="2" style="padding-bottom: 35px; text-align: center;">Nama</th>
                  <th colspan="<?= $matkul[0]->jml_matkul-16 ?>" style="text-align: center;">Pertemuan Ke</th>
                  <th colspan="3" style="text-align: center;">Keterangan</th>
                </tr>
                <tr>
                  <?php for ($i=1; $i < $matkul[0]->jml_matkul-15; $i++) {  ?>
                  <th style="width: 3px;"><?= $i ?></th>
                  <?php } ?>
                  <th style="width: 3px;">S</th>
                  <th style="width: 3px;">I</th>
                  <th style="width: 3px;">A</th>
                </tr>
              </thead>
              <tbody>
                <?php $j = 1;
                  foreach ($matkul as $matkuls) { ?>
                  <tr>
                    <td><?= $j ?></td>
                    <td><?= $matkuls->nrp_mahasiswa ?></td>
                    <td><?= $matkuls->nama_mahasiswa ?></td>
                    <?php for ($i=1; $i < $matkul[0]->jml_matkul-15; $i++) {  ?>
                    <td></td>
                    <?php } ?>
                    <td id="s<?= $k ?>" >0</td>
                    <td id="izin<?= $k ?>" >0</td>
                    <td id="a<?= $k ?>" >0</td>
                  </tr>
                <?php $j++; } ?>
              </tbody>
            </table>
            <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="table2">
              <thead>
                <tr>
                  <th rowspan="2" style="width: 10px; padding-bottom: 35px; text-align: center;">No</th>
                  <th rowspan="2" style="padding-bottom: 35px; text-align: center;">NRP</th>
                  <th rowspan="2" style="padding-bottom: 35px; text-align: center;">Nama</th>
                  <th colspan="<?= $matkul[0]->jml_matkul-16 ?>" style="text-align: center;">Pertemuan Ke</th>
                  <th colspan="3" style="text-align: center;">Keterangan</th>
                </tr>
                <tr>
                  <?php for ($i=17; $i < $matkul[0]->jml_matkul+1; $i++) {  ?>
                  <th style="width: 3px;"><?= $i ?></th>
                  <?php } ?>
                  <th style="width: 3px;">S</th>
                  <th style="width: 3px;">I</th>
                  <th style="width: 3px;">A</th>
                </tr>
              </thead>
              <tbody>
                <?php $j = 1;
                  foreach ($matkul as $matkuls) { ?>
                  <tr>
                    <td><?= $j ?></td>
                    <td><?= $matkuls->nrp_mahasiswa ?></td>
                    <td><?= $matkuls->nama_mahasiswa ?></td>
                    <?php for ($i=17; $i < $matkul[0]->jml_matkul+1; $i++) {  ?>
                    <td></td>
                    <?php } ?>
                    <td id="s<?= $k ?>" >0</td>
                    <td id="izin<?= $k ?>" >0</td>
                    <td id="a<?= $k ?>" >0</td>
                  </tr>
                  <?php $j++; } ?>
              </tbody>
            </table>
          <?php } ?>
        </div>
      </div>

    </div>
    <!--/.main-content -->
    