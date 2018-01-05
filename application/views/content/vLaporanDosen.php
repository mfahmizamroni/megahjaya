<!-- Main container -->
  <main>
    <!--/.header -->

    <div class="main-content">

      <div class="card">
        <h4 class="card-title"><strong>Laporan Absensi Dosen </strong></h4>

        <div class="card-body">
            <table class="table table-striped table-bordered table-responsive" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <!-- <th style="width: 20px">Jumlah SKS</th> -->
                  <th style="width: 20px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($dosen as $q) { ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $q->nik_dosen ?></td>
                  <td><?= $q->nama_dosen ?></td>
                  <td class="text-right table-actions">
                    <a href="<?= base_url() ?>dosen/vLdmDosen/<?= $q->id_dosen ?>"><button class="btn btn-sm btn-primary">Detail</button></a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
        </div>
      </div>

    </div>
    <!--/.main-content