<!-- Main container -->
    <main>
      <div class="main-content">

        <div class="card">
          <?php if (null!==$this->session->flashdata('success')) : ?>
            <p><font color="green"><center><?= $this->session->flashdata('success'); ?></center></font></p>
          <?php endif; ?>
          <h4 class="card-title">
            Daftar <strong>Mahasiswa</strong>
            <div class="pull-right">
              <a href="<?= base_url().'mahasiswa/addMahasiswa' ?>" class="btn btn-primary" style="color:#fff;">Tambah Mahasiswa</a>
            </div>
          </h4>

          <div class="card-body">

            <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th>NRP</th>
                  <th style="width: 20px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($mahasiswa as $mahasiswas) { ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $mahasiswas->nama_mahasiswa ?></td>
                  <td><?= $mahasiswas->nrp_mahasiswa ?></td>
                  <td class="text-right table-actions">
                    <a class="table-action hover-primary" href="<?= base_url()."mahasiswa/editMahasiswa/".$mahasiswas->id_mahasiswa ?>"><i class="ti-pencil"></i></a>
                    <a class="table-action hover-danger" href="#" data-href="<?= base_url()."mahasiswa/deleteMahasiswa/".$mahasiswas->id_mahasiswa ?>"  data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash"></i></a>
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