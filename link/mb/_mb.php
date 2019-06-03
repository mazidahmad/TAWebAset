
      <div class="panel-header panel-header-sm">
        <!-- <img src="assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%"> -->
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a id="mb-lmb-tab" class="nav-link active" data-toggle="tab" href="#mb-lmb" role="tab" aria-controls="mb-lmb" aria-selected="true">Laporan Mutasi Barang</a>
                  </li>
                  <li class="nav-item">
                    <a id="mb-dmb-tab" class="nav-link" data-toggle="tab" href="#mb-dmb" role="tab" aria-controls="mb-dmb" aria-selected="false">Daftar Mutasi Barang</a>
                  </li>
                  <li class="nav-item">
                    <a id="mb-rmb-tab" class="nav-link" data-toggle="tab" href="#mb-rmb" role="tab" aria-controls="mb-rmb" aria-selected="false">Rekapitulasi Daftar Mutasi Barang</a>
                  </li>
                </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="mb-lmb" role="tabpanel" aria-labelledby="mb-lmb-tab">
                <?php include('link/mb/_mb-lmb.php'); ?>
              </div>
              <div class="tab-pane fade" id="mb-dmb" role="tabpanel" aria-labelledby="mb-dmb-tab">
                <?php include('link/mb/_mb-dmb.php'); ?>
              </div>
              <div class="tab-pane fade" id="mb-rmb" role="tabpanel" aria-labelledby="mb-rmb-tab">
                <?php include('link/mb/_mb-rmb.php'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(".table-filtered").DataTable();
      </script>