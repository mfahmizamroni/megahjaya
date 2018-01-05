<!-- Main container -->
    <main>
      <div class="main-content">

        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Zero configuration
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="card">
          <?php if (null!==$this->session->flashdata('success')) : ?>
            <p><font color="green"><center><?= $this->session->flashdata('success'); ?></center></font></p>
          <?php endif; ?>
          <h4 class="card-title">
            Daftar <strong>Dosen</strong> 
            <div class="pull-right">
              <a href="<?= base_url().'dosen/addDosen' ?>" class="btn btn-primary" style="color:#fff;">Tambah Dosen</a>
            </div>
          </h4>
          <div class="card-body">

            <table class="table table-striped table-bordered" cellspacing="0" data-provide="datatables">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th>NIK Dosen</th>
                  <th style="width: 20px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($dosen as $dosens) { ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $dosens->nama_dosen ?></td>
                  <td><?= $dosens->nik_dosen ?></td>
                  <td class="text-right table-actions">
                    <a class="table-action hover-primary" href="<?= base_url()."dosen/editDosen/".$dosens->id_dosen ?>"><i class="ti-pencil"></i></a>
                    <a class="table-action hover-danger" href="#" data-href="<?= base_url()."dosen/deleteDosen/".$dosens->id_dosen ?>"  data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
      <!--/.main-content -->