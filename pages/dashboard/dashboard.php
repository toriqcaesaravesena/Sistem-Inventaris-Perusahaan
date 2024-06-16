
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
            </div>
          </div>
          <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Penjualan Bulan Ini</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" id="count_salesthismonth"></h3>
                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>
                  <p class="mb-0 mt-2 text-danger"><span class="text-black ml-1"><small>Bulan Ini</small></span></p>
                </div>
              </div>
            </div>
              <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Penjualan Bulan Lalu</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" id="count_saleslastmonth"></h3>
                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>
                  <p class="mb-0 mt-2 text-danger"><span class="text-black ml-1"><small>Bulan Lalu</small></span></p>
                </div>
              </div>
            </div>
              <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Penjualan Tahun Ini</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" id="count_salesthisyear"></h3>
                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>
                  <p class="mb-0 mt-2 text-danger"><span class="text-black ml-1"><small>Tahun Ini</small></span></p>
                </div>
              </div>
            </div>
        <!--       <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Adjustment Table</p>
                  <div class=" flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <table id='example1' class="table table-hover" >
                          <thead style="font-size:10px">
                              <tr>
                                  <th>Product</th>
                                  <th>Quantity</th>
                                  <th>Encoded by</th>
                                  <th>Date Encoded</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>

                                  <td>Data</td>
                                  <td>Data</td>
                                  <td>Data</td>
                                  <td>Data</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div> -->
    <!--           <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Predictive Days</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">35 Days</h3>
                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>
                  <br>
                    <button type="button" class="btn btn-primary btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#set-days">
                          Set Predictive Days
                      </button>
                </div>
              </div>
            </div> -->
              <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Stok Barang Rendah</p>
                  <div class=" flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <table class="table table-hover" id="table_productlowstock">
                          <thead style="font-size:10px">
                              <tr>
                                  <th>Kode Produk</th>
                                  <th>Nama Produk</th>
                                  <th>Stok Barang</th>
                                  <th>Jumlah Persediaan</th>
                              </tr>
                          </thead>
                          <tbody>
                         </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Barang Kedaluwarsa</p>
                  <div class=" flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <table class="table table-hover" id="table_productexpired">
                          <thead style="font-size:10px">
                              <tr>
                                  <th>Kode Produk</th>
                                  <th>Nama Produk</th>
                                  <th>Tanggal kadaluarsa</th>
                                  <th>Jumlah Persediaan</th>
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
          <?php include '../footer.php'; ?>
      </div>
    </div>
  </div>

<?php include '../scripts.php'; ?>
 <script type="text/javascript" src="../../js/custom/dashboard_count.js"> </script>
  <script type="text/javascript" src="../../js/custom/product.js"> </script>
</body>

</html>

