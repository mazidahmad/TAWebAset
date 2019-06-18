<div class="panel-header panel-header-sm">
    <!-- <img src="assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%"> -->
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a id="bi-tab" class="nav-link active" data-toggle="tab" href="#bi" role="tab" aria-controls="bi" aria-selected="true">Buku Inventaris Barang</a>
                    </li>
                    <li class="nav-item">
                        <a id="rbi-tab" class="nav-link" data-toggle="tab" href="#rbi" role="tab" aria-controls="rbi" aria-selected="false">Rekap Buku Inventaris Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="bi" role="tabpanel" aria-labelledby="bi-tab">
                    <?php include('_bi.php'); ?>
                </div>
                <div class="tab-pane fade" id="rbi" role="tabpanel" aria-labelledby="rbi-tab">
                    <?php include('_rbi.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>