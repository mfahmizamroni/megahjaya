<!-- Main container -->
  <main>
    <header class="header bg-ui-general">
      <br>
      <div class="header-action">
        <nav class="nav">
          <a class="nav-link active" href="<?= base_url() ?>mahasiswa/vLaporanMahasiswaMk">L.A.M Per Mata Kuliah</a>
          <a class="nav-link" href="<?= base_url() ?>mahasiswa/vLaporanMahasiswaMhs">L.A.M Per Mahasiswa</a>
        </nav>
      </div>
    </header>
    <!--/.header -->

    <div class="main-content">

      <div class="card">
        <h4 class="card-title"><strong>Laporan Absensi Mahasiswa </strong> Per Mata Kuliah</h4>

        <div class="card-body">
            <table class="table table-striped table-bordered table-responsive" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Kode MK</th>
                  <th>Nama MK</th>
                  <th>Dosen Pengampu</th>
                  <th style="width: 20px">SKS</th>
                  <th style="width: 20px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($matkul as $matkuls) { ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $matkuls->kode_matkul ?></td>
                  <td><?= $matkuls->nama_matkul ?></td>
                  <td><?= $matkuls->nama_dosen ?></td>
                  <td><?= $matkuls->sks_matkul ?></td>
                  <td class="text-right table-actions">
                    <a href="<?= base_url() ?>mahasiswa/vLamMk/<?= $matkuls->id_matkul ?>"><button class="btn btn-sm btn-primary">Detail</button></a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
        </div>
      </div>

    </div>
    <!--/.main-content -->