
<!DOCTYPE html>
<html lang="en">
<?php include '../head.php'; ?>
<body>
  <div class="container-scroller">
    <?php include '../navbar.php'; ?>
    <div class="container-fluid page-body-wrapper">
      <?php include '../sidebar.php'; ?>
      <div class="main-panel" >
        <div class="content-wrapper" style="background-color:#E4E4E4;">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                  <div>
                      <button type="button" class="btn btn-primary btn-icon-text btn-rounded btn-sm" data-toggle="modal" data-target="#add-ProductSet">
                          <i class="ti-plus btn-icon-prepend"></i>Tambah Set Produk
                      </button>
                    </div>
                  <div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Set Produk</p>
                  <div class=" flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <table  class="table table-hover" id="table_productset">
                          <thead style="font-size:10px">
                              <tr>
                              <th>Kode Set</th>
<th>Nama Set</th>
<th>Total Jumlah</th>
<th>Set di Tangan</th>
<th>Dikodekan Oleh</th>
<th>Tanggal Dikodekan</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <?php include '../modals.php'; ?>
             <script type="text/javascript" src="../../js/custom/productset.js"> </script>
          <?php include '../footer.php'; ?>
      </div>
    </div>
  </div>
<?php include '../scripts.php'; ?>
</body>
</html>

