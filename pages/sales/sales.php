
<!DOCTYPE html>
<html lang="en">
<?php include '../head.php'; ?>
<body>
  <div class="container-scroller">
    <?php include '../navbar.php'; ?>
    <div class="container-fluid page-body-wrapper">
      <?php include '../sidebar.php'; ?>
      <div class="main-panel">
        <div class="content-wrapper" style="background-color:#bddcff;">
             <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                  <div>
                      <button type="button" class="btn btn-primary btn-icon-text btn-rounded btn-sm" data-toggle="modal" data-target="#add-Sales">
                          <i class="ti-plus btn-icon-prepend"></i>Add Sales
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
                  <p class="card-title text-md-center text-xl-left">Sales</p>
                  <div class=" flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <table class="table table-hover" id="table_sales">
                          <thead style="font-size:10px">
                              <tr>
                      <!--             <th>Order ID</th> -->
                                  <th>Item</th>
                                  <th>Sale Quantity</th>
                                  <th>Total</th>
                                  <th>Recorded By</th>
                                  <th>Date Recorded</th>
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
              <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sales This Year</h4>
                  <div class="chart">
                     <canvas id="areaChart" style="height:250px"></canvas>
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
    <script src="../chart/Chart.js"></script>
<!--   <script type="text/javascript" src="../../js/custom/chart_functionyearly.js"> </script> -->
   <script type="text/javascript" src="../../js/custom/sales.js"> </script>
   <?php include '../config/api/zchart_yearlyreports.php'; ?>
   <?php include '../scripts.php'; ?>
</body>
</html>

