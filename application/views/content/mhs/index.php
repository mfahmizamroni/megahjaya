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

    <div class="main-content">
      <div class="container">

        <div class="card">
          <h1 class="card-title text-center"><i class="fa fa-search"></i> <strong>Cari Mahasiswa</strong></h1>
          <div class="card-body">
            <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                  <th style="width: 30%;">NRP</th>
                  <th style="width: 60%;">Nama</th>
                  <th style="width: 10%;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($mahasiswa as $q) { ?>
                  <tr>
                    <td><?= $q->nrp_mahasiswa ?></td>
                    <td><?= $q->nama_mahasiswa ?></td>
                    <td>
                      <a href="<?= base_url()."mahasiswa/search/".$q->id_mahasiswa ?>" class="btn btn-primary">Detail</a>
                    </td>
                  </tr>
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

</body>
</html>
