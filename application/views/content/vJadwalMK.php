<!--Main container -->
    <main>
      <div class="main-content">
        <div class="card">
          <?php if (null!==$this->session->flashdata('success')) : ?>
            <p><font color="green"><center><?= $this->session->flashdata('success'); ?></center></font></p>
          <?php endif; ?>
          <h4 class="card-title">
            Jadwal <strong>Matakuliah</strong>
          </h4>

          <div class="card-body">

            <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Kode MK</th>
                  <th>Nama MK</th>
                  <!-- <th style="width: 20px">Jumlah Peserta</th> -->
                  <th style="width: 20px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($matakuliah as $q) { ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $q->kode_matkul ?></td>
                  <td><?= $q->nama_matkul ?></td>
                  <!-- <td><?= "asd" ?></td> -->
                  <td class="text-right table-actions">
                    <a class="btn btn-primary btn-xs" href="<?= base_url()."matakuliah/addJadwalMK/".$q->id_matkul ?>">Tambah Peserta</a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Modal Delete -->
        <div class="modal fade" id="modal-default" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">HAPUS DATA</h4>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin ingin menghapus data Ini?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-bold btn-danger">Delete</button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Delete -->
        
      </div>
      <!--/.main-content