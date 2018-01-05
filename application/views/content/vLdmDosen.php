<!-- Main container -->
  <main>

    <div class="main-content">

      <div class="card">
        <h4 class="card-title"><strong>Preview</strong></h4>
        <br>


        <div class="card-body">
          <h2 class="text-center"><b>Laporan Absensi Dosen</b></h2>
          <table class="">
            <tr>
              <td>NIK</td>
              <td>:</td>
              <td><b><?= $absensidosen[0]->nik_dosen ?></b></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><b><?= $absensidosen[0]->nama_dosen ?></b></b></td>
            </tr>
            <tr>
          </table>
          <br>
          <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th rowspan="2" style="width: 10px; padding-bottom: 35px; text-align: center;">No</th>
                <th rowspan="2" style="padding-bottom: 35px; text-align: center;">Nama Mata Kuliah</th>
                <th rowspan="2" style="padding-bottom: 35px; text-align: center;">SKS</th>
                <th colspan="16" style="text-align: center;">Pertemuan Ke</th>
                <th colspan="3" style="text-align: center;">Keterangan</th>
              </tr>
              <tr>
                <?php for ($i=1; $i < 17; $i++) {  ?>
                  <th style="width: 3px;"><?= $i ?></th>
                <?php } ?>
                <th style="width: 3px;">S</th>
                <th style="width: 3px;">I</th>
                <th style="width: 3px;">A</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1;
                foreach ($dosen as $q) { ?>
                <?php 
                  $step  = 1;
                  $unit  = 'W';

                  $start = new DateTime($q->tanggalmulai_matkul);
                  $end   = clone $start;

                  $end->add(new DateInterval('P16W'));

                  $interval = new DateInterval("P{$step}{$unit}");
                  $period   = new DatePeriod($start, $interval, $end);

                  $z = 0;
                  foreach ($period as $date) {
                    $jadwal[$z] = $date->format('Y-m-d');
                    $z++;
                  }
                ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $q->nama_matkul ?></td>
                  <td><?= $q->sks_matkul ?></td>
                    <?php for ($j=0; $j < $q->jml_matkul; $j++) {  ?>
                      <?php for ($k=0; $k < count($absensidosen); $k++) { ?>
                        <?php if ($jadwal[$j] == $absensidosen[$k]->tanggal) { ?>
                          <?php if ($absensidosen[$k]->pin_dosen == $q->pin_dosen && $absensidosen[$k]->status_absensidosen == "T") { ?>
                            <td style="color: orange;">T</td>
                          <?php break;} else if ($absensidosen[$k]->pin_dosen == $q->pin_dosen && $absensidosen[$k]->status_absensidosen == "H"){ ?>
                            <td>H</td>
                          <?php break;} else if ($absensidosen[$k]->pin_dosen == $q->pin_dosen && $absensidosen[$k]->status_absensidosen == "A"){ ?>
                            <td style="color: red;">A</td>
                          <?php break;} else if ($absensidosen[$k]->pin_dosen == $q->pin_dosen && $absensidosen[$k]->status_absensidosen == "S"){ ?>
                            <td style="color: red;">S</td>
                          <?php break;} else if ($absensidosen[$k]->pin_dosen == $q->pin_dosen && $absensidosen[$k]->status_absensidosen == "I"){ ?>
                            <td style="color: red;">I</td>
                          <?php break;} ?>
                        <?php } else if ($k == count($absensidosen)-1) { ?>
                          <td></td>
                        <?php } ?>
                      <?php } ?>
                    <?php } ?>
                  <td id="s<?= $i ?>">0</td>
                  <td id="i<?= $i ?>">0</td>
                  <td id="a<?= $i ?>">0</td>
                </tr>
                <?php $i++; } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
    <!--/.main-content -->