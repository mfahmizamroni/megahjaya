
<!-- Main container -->

<main>
  <div class="main-content">

    <div class="card">
      <h4 class="card-title"><strong>Project - Produksi</strong></h4>

      <form data-provide="validation" data-disable="false">
        <div class="card-body">


          <div class="form-group row">
            <label class="col-4 col-lg-2 col-form-label require" for="input-1">Kode Produksi</label>
            <div class="col-8 col-lg-10">
              <input type="text" class="form-control" id="input-1" required>
              <div class="invalid-feedback"></div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-lg-2 col-form-label require" for="input-1">Nama Produksi</label>
            <div class="col-8 col-lg-10">
              <input type="text" class="form-control" id="input-1" value="" required>
              <div class="invalid-feedback"></div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-lg-2 col-form-label require" for="input-1">Proses Produksi</label>
            <div class="col-8 col-lg-10">
              <input type="text" class="form-control" id="input-1" value="Laminasi" required>
              <div class="invalid-feedback"></div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4 col-lg-2 col-form-label require" for="input-1">Tanggal Produksi</label>
            <div class="col-8 col-lg-10">
              <input type="text" class="form-control" id="input-1" value="09/01/2017" required>
              <div class="invalid-feedback"></div>
            </div>
          </div>

          <div class="card">
            <h4 class="card-title"><strong>A. Bahan Utama</strong></h4>

            <div class="card-body">

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nama Bahan</th>
                    <th style="width: 50px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><a class="btn btn-primary btn-outline hover-white"><i class="fa fa-plus"></i></a></td>
                  </tr>
                  <tr>
                    <td>Tinta RSO89 XR</td>
                    <td>
                      <a class="table-action hover-primary"><i class="ti-pencil"></i></a>
                      <a class="table-action hover-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Kertas DDRT 504</td>
                    <td>
                      <a class="table-action hover-primary"><i class="ti-pencil"></i></a>
                      <a class="table-action hover-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>

          <div class="card">
            <h4 class="card-title"><strong>B. BTKL</strong></h4>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nama Proses</th>
                    <th style="width: 50px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><a class="btn btn-primary btn-outline hover-white"><i class="fa fa-plus"></i></a></td>
                  </tr>
                  <tr>
                    <td>Laminasi</td>
                    <td>
                      <a class="table-action hover-primary"><i class="ti-pencil"></i></a>
                      <a class="table-action hover-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Printing</td>
                    <td>
                      <a class="table-action hover-primary"><i class="ti-pencil"></i></a>
                      <a class="table-action hover-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="card">
            <h4 class="card-title"><strong>C. BOP</strong></h4>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nama Biaya</th>
                    <th style="width: 50px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><a class="btn btn-primary btn-outline hover-white"><i class="fa fa-plus"></i></a></td>
                  </tr>
                  <tr>
                    <td>Biaya Penyusutan</td>
                    <td>
                      <a class="table-action hover-primary"><i class="ti-pencil"></i></a>
                      <a class="table-action hover-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Biaya Listrik</td>
                    <td>
                      <a class="table-action hover-primary"><i class="ti-pencil"></i></a>
                      <a class="table-action hover-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>


        <footer class="card-footer text-right">
          <button class="btn btn-primary" type="submit">Submit</button>
        </footer>


      </form>
    </div>

      </div><!--/.main-content -->