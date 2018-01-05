<!-- Main container -->
    <main>
      <div class="main-content">

        <div class="card">
          <?php if (null!==$this->session->flashdata('success')) : ?>
            <p><font color="green"><center><?= $this->session->flashdata('success'); ?></center></font></p>
          <?php endif; ?>
          <h4 class="card-title">
            Daftar <strong>Mata Kuliah</strong>
            <div class="pull-right">
              <a href="<?= base_url().'matakuliah/addMatakuliah' ?>" class="btn btn-primary" style="color:#fff;">Tambah Matakuliah</a>
            </div>
          </h4>

          <div class="card-body">

            <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Kode MK</th>
                  <th>Nama MK</th>
                  <th style="width: 20px">SKS</th>
                  <th>Jumlah Pertemuan</th>
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
                  <td><?= $matkuls->sks_matkul ?></td>
                  <td><?= $matkuls->jml_matkul ?></td>
                  <td class="text-right table-actions">
                    <a class="table-action hover-primary" href="<?= base_url()."matakuliah/editMatakuliah/".$matkuls->id_matkul ?>"><i class="ti-pencil"></i></a>
                    <a class="table-action hover-danger" href="#" data-href="<?= base_url()."matakuliah/deleteMatakuliah/".$matkuls->id_matkul ?>"  data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
      <!--/.main-content -->