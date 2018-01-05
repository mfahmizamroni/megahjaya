<!-- Main container -->
    <main>
      <div class="main-content">

        <div class="card">
          <?php if (null!==$this->session->flashdata('success')) : ?>
            <p><font color="green"><center><?= $this->session->flashdata('success'); ?></center></font></p>
          <?php endif; ?>
          <h4 class="card-title">
            Daftar <strong>Pengganti</strong>
            <div class="pull-right">
              <a href="<?= base_url().'matakuliah/addPengganti' ?>" class="btn btn-primary" style="color:#fff;">Tambah Pengganti</a>
            </div>
          </h4>

          <div class="card-body">

            <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Matakuliah</th>
                  <th>Jadwal Asli</th>
                  <th>Jadwal Pengganti</th>
                  <th>Jam Pengganti</th>
                  <th style="width: 20px">#</th>
                  <th style="width: 20px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($pengganti as $q) { ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $q->nama_matkul ?></td>
                  <td><?= $q->tanggal_asli ?></td>
                  <td><?= $q->tanggal_pengganti ?></td>
                  <td><?= $q->jam_pengganti ?></td>
                  <td><a href="<?= base_url()."updater/pengganti/".$q->id_pengganti ?>" class="btn btn-primary btn-xs">Jalankan</a></td>
                  <td class="text-right table-actions">
                    <a class="table-action hover-primary" href="<?= base_url()."matakuliah/editPengganti/".$q->id_pengganti ?>"><i class="ti-pencil"></i></a>
                    <a class="table-action hover-danger" href="#" data-href="<?= base_url()."matakuliah/deletePengganti/".$q->id_pengganti ?>"  data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
              </tbody>
            </table>
          </div>
        </div>

      </div>
      <!--/.main-content -->