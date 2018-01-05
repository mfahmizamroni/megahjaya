<!-- Main container -->
  <main>
    <header class="header bg-ui-general">
      <br>
      <div class="header-action">
        <nav class="nav">
          <a class="nav-link" href="<?= base_url() ?>mahasiswa/vLaporanMahasiswaMk">L.A.M Per Mata Kuliah</a>
          <a class="nav-link active" href="<?= base_url() ?>mahasiswa/vLaporanMahasiswaMhs">L.A.M Per Mahasiswa</a>
        </nav>
      </div>
    </header>
    <!--/.header -->

    <div class="main-content">

      <div class="card">
        <h4 class="card-title"><strong>Laporan Absensi Mahasiswa </strong> Per Mahasiswa</h4>

        <div class="card-body">
            <table class="table table-striped table-bordered table-responsive" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>NRP</th>
                  <th>Nama</th>
                  <th>Angkatan</th>
                  <!-- <th style="width: 20px">Jumlah SKS</th> -->
                  <th style="width: 20px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($mahasiswa as $mahasiswas) { ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $mahasiswas->nrp_mahasiswa ?></td>
                  <td><?= $mahasiswas->nama_mahasiswa ?></td>
                  <td><?= "20".substr($mahasiswas->nrp_mahasiswa, 4, 2) ?></td>
                  <td class="text-right table-actions">
                    <a href="<?= base_url() ?>mahasiswa/vLamMhs/<?= $mahasiswas->id_mahasiswa ?>"><button class="btn btn-sm btn-primary">Detail</button></a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
        </div>
      </div>

    </div>
    <!--/.main-content