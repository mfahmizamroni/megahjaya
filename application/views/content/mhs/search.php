<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="TheAdmin - Responsive admin and web application ui kit">
  <meta name="keywords" content="admin, dashboard, web app, sass, ui kit, ui framework, bootstrap">

  <title>Sistem Presensi - ITS</title>

  <!-- Styles -->
  <link href="<?= base_url() ?>assets/css/core.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/app.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/mhs/css/style.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="<?= base_url() ?>assets/img/apple-touch-icon.png">
  <link rel="icon" href="<?= base_url() ?>assets/img/favicon.png">
</head>

<body class="topbar-unfix">


  <!-- Topbar -->
  <header class="topbar topbar-expand-lg topbar-secondary topbar-inverse">
    <div class="container">
      <div class="topbar-left">
        <span class="topbar-btn topbar-menu-toggler"><i>&#9776;</i></span>

        <div class="topbar-brand">
          <h3 style="color: #fff">Sistem Presensi ITS</h3>
        </div>

      </div>


      <!-- <div class="topbar-right">

        <ul class="topbar-btns">
          <li class="dropdown">
            <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="assets/img/avatar/1.jpg" alt="..."></span>
            <div class="dropdown-menu dropdown-menu-right">
              <br>
              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Change Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="ti-power-off"></i> Logout</a>
            </div>
          </li>
        </ul>

      </div> -->
    </div>
  </header>
  <!-- END Topbar -->



  <!-- Main container -->
  <main>

    <header class="header ">
      <div class="container">
        <div class="header-bar">
          <div class="left">
            <h2 class="header-title"><i class="fa fa-calendar"></i><strong> Minggu Ke - </strong> <span id="minggu">4</span></h2>
          </div>
        </div>
      </div>
    </header>
    <!--/.header -->

    <div class="main-content">
      <div class="container">


        <div class="row">
          <div class="col-6 col-lg-3">
            <div class="card shadow-1">
              <div class="card-body">
                <div class="text-center">
                  <h5>Total Tidak Hadir</h5>
                </div>

                <div class="text-center my-2">
                  <div class="fs-60 fw-400 text-info" id="tot">34</div>
                  <span class="fw-400 text-muted">Kali</span>
                </div>
              </div>

              <div class="card-body bg-lighter fw-400 py-12">
              </div>

              <div class="progress mb-0">
                <div class="progress-bar bg-info" role="progressbar" style="width: 100%; height: 3px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>


          <div class="col-6 col-lg-3">
            <div class="card shadow-1">
              <div class="card-body">
                <div class="text-center">
                  <h5>Absen Tanpa Alasan</h5>
                </div>
                <div class="text-center my-2">
                  <div class="fs-60 fw-400 text-danger" id="atot">15</div>
                  <span class="fw-400 text-muted">Kali</span>
                </div>
              </div>

              <div class="card-body bg-lighter fw-400 py-12">
              </div>

              <div class="progress mb-0">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%; height: 3px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3">
            <div class="card shadow-1">
              <div class="card-body">
                <div class="text-center">
                  <h5>Izin</h5>
                </div>
                <div class="text-center my-2">
                  <div class="fs-60 fw-400 text-warning" id="itot">7</div>
                  <span class="fw-400 text-muted">Kali</span>
                </div>
              </div>

              <div class="card-body bg-lighter fw-400 py-12">
              </div>

              <div class="progress mb-0">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%; height: 3px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3">
            <div class="card shadow-1">
              <div class="card-body">
                <div class="text-center">
                  <h5>Sakit</h5>
                </div>
                <div class="text-center my-2">
                  <div class="fs-60 fw-400 text-info" id="stot">3</div>
                  <span class="fw-400 text-muted">Kali</span>
                </div>
              </div>

              <div class="card-body bg-lighter fw-400 py-12">
              </div>

              <div class="progress mb-0">
                <div class="progress-bar bg-info" role="progressbar" style="width: 100%; height: 3px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

        </div>

        <div class="card">
          <h4 class="card-title"><strong>Laporan Presensi Mahasiswa</strong></h4>

          <div class="card-body">
            <h2 class="text-center"><b><?= $mahasiswa[0]->nama_mahasiswa ?></b></h2>
            <table class="">
              <tr>
                <td>Keterangan</td>
              </tr>
              <tr>
                <td>H</td>
                <td>:</td>
                <td><b>Hadir</b></td>
              </tr>
              <tr>
                <td>A</td>
                <td>:</td>
                <td><b>Alpha (Tanpa Ijin)</b></td>
              </tr>
              <tr>
                <td>T</td>
                <td>:</td>
                <td><b>Terlambat</b></td>
              </tr>
              <tr>
                <td>S</td>
                <td>:</td>
                <td><b>Ket. Sakit</b></td>
              </tr>
              <tr>
                <td>I</td>
                <td>:</td>
                <td><b>Ijin (Dispensasi/Keperluan)</b></td>
              </tr>
            </table>
            <br>
            <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="90%" id="table1">
              <thead>
                <tr>
                  <th rowspan="2" style="width: 10px; padding-bottom: 35px; text-align: center;">No</th>
                  <th rowspan="2" style="padding-bottom: 35px; text-align: center;">Nama Mata Kuliah</th>
                  <th rowspan="2" style="padding-bottom: 35px; text-align: center;">Dosen</th>
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
              <?php if(count($absensi) > 0){ ?>
              <?php $i = 1;
                foreach ($mahasiswa as $q) { ?>
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
                  <td><?= $q->nama_dosen ?></td>
                  <td style="text-align: center;"><?= $q->sks_matkul ?></td>
                    <?php for ($j=0; $j < $q->jml_matkul; $j++) {  ?>
                      <?php for ($k=0; $k < count($absensi); $k++) { ?>
                        <?php if ($jadwal[$j] == $absensi[$k]->tanggal) { ?>
                          <?php if ($absensi[$k]->pin_mahasiswa == $q->pin_mahasiswa && $absensi[$k]->status_absensi == "T") { ?>
                            <td style="color: orange;">T</td>
                          <?php break;} else if ($absensi[$k]->pin_mahasiswa == $q->pin_mahasiswa && $absensi[$k]->status_absensi == "H"){ ?>
                            <td>H</td>
                          <?php break;} else if ($absensi[$k]->pin_mahasiswa == $q->pin_mahasiswa && $absensi[$k]->status_absensi == "A"){ ?>
                            <td style="color: red;">A</td>
                          <?php break;} else if ($absensi[$k]->pin_mahasiswa == $q->pin_mahasiswa && $absensi[$k]->status_absensi == "S"){ ?>
                            <td style="color: red;">S</td>
                          <?php break;} else if ($absensi[$k]->pin_mahasiswa == $q->pin_mahasiswa && $absensi[$k]->status_absensi == "I"){ ?>
                            <td style="color: red;">I</td>
                          <?php break;} ?>
                        <?php } else if ($k == count($absensi)-1) { ?>
                          <td></td>
                        <?php } ?>
                      <?php } ?>
                    <?php } ?>
                  <td id="s<?= $i ?>">0</td>
                  <td id="i<?= $i ?>">0</td>
                  <td id="a<?= $i ?>">0</td>
                </tr>
                <?php $i++; } } else { ?>
                  <?php $i = 1;
                  foreach ($mahasiswa as $q) { ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $q->nama_matkul ?></td>
                    <td><?= $q->nama_dosen ?></td>
                    <td style="text-align: center;"><?= $q->sks_matkul ?></td>
                    <?php for ($i=1; $i < 17; $i++) {  ?>
                    <th></th>
                    <?php } ?>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                  </tr>
                  <?php $i++; } ?>
                <?php } ?>
            </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>





    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="text-center text-md-left">Copyright © 2017 <a href="">Tim Sisemuthitam ITS</a>. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END Footer -->


  </main>

  <!-- Scripts -->
  <script src="<?= base_url() ?>assets/js/core.min.js"></script>
  <script src="<?= base_url() ?>assets/js/app.min.js"></script>
  <script src="<?= base_url() ?>assets/mhs/js/script.js"></script>
  <script type="text/javascript">
    $(function() {
      var atot = 0;
      var itot = 0;
      var stot = 0;
      var minggu = 0;
      for(i=1; i < document.getElementById('table1').rows.length+1; i++){
        var sakit = 0;
        var izin = 0;
        var alpha = 0;
        $('#table1 tr:nth-child('+i+') td').each(function () {
          if($(this).html() == "S"){
            sakit++;
            minggu++;
          } else if($(this).html() == "I"){
            izin++;
            minggu++;
          } else if($(this).html() == "A"){
            alpha++;
            minggu++;
          } else if($(this).html() == "H" || $(this).html() == "T"){
            minggu++;
          } 
        });
        var a = '#a'+i;
        var s = '#s'+i;
        var iz = '#izin'+i;
        $(a).html(alpha);
        $(s).html(sakit);
        $(iz).html(izin);
        $("#minggu").html(minggu);

        atot = atot+alpha;
        itot = itot+izin;
        stot = stot+sakit;
      }
      $("#atot").html(atot);
      $("#itot").html(itot);
      $("#stot").html(stot);

      var tot = atot+itot+stot;
      $("#tot").html(tot);
    });
  </script>
</body>
</html>
