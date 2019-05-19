<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <?php include 'sidebar-invent.php' ?>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
        <img src="../assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="card"> <button type="button" class="btn btn-outline-primary ml-2"> <a href="input-kir.php">Input Data</a> </button>
            <div class="card">
              <div class="card-header" >
                <p class="card-title text-center"><strong>Kartu Inventaris Ruangan</strong></p>
              </div>
              <div class="card-body" style="font-size:8pt;">                
                <div class="row">
                <table class="ml-4 mb-4" width="80%">
                      <tr>
                        <td width="13%">PROVINSI</td>
                        <td width="2%"> : </td>
                        <td>JAWA BARAT</td>
                      </tr>
                      <tr>
                        <td>KABUPATEN / KOTA </td>
                        <td> : </td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>BIDANG</td>
                        <td> : </td>
                        <td> BIDANG KIMPRASWIL/KE-PU-AN</td>
                      </tr>
                      <tr>
                        <td>ASISTEM / OPD </td>
                        <td> : </td>
                        <td> Dinas Perumahan dan Pemukiman</td>
                      </tr>
                      <tr>
                        <td>BIRO / UPTD / B </td>
                        <td> : </td>
                        <td> Sekretariat Dinas</td>
                      </tr>
                      <tr>
                        <td>No. Kode Lokasi </td>
                        <td> : </td>
                        <td> 11.10.00.05.02.00</td>
                      </tr>
                      </table>
                </div>              
                <div class="table table-responsive">
                  <table id="table_id" class="display">
                    <thead class="text-primary">
                      <tr>
                        <th rowspan="2">
                          No
                        </th>
                        <th rowspan="2">
                          Nama Barang
                        </th>
                        <th rowspan="2">
                          Merk/Model
                        </th>
                        <th rowspan="2">
                          No. Seri Pabrik
                        </th>
                        <th rowspan="2">
                          Ukuran
                        </th>
                        <th rowspan="2">
                          Bahan
                        </th>
                        <th rowspan="2" class="text-center">
                          Tahun Pembuatan/Pembelian
                        </th>
                        <th rowspan="2">
                          Nomor Kode Barang
                        </th>
                        <th rowspan="2">
                          Jumlah Barang/Register
                        </th>
                        <th rowspan="2">
                          Harga Beli/Perolehan
                        </th>
                        <th colspan="3">
                          Keadaan Barang
                        </th>
                        <th rowspan="2">
                          Keterangan
                        </th>
                        <th rowspan="2">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          Baik
                        </th>
                        <th>
                          Kurang Baik
                        </th>
                        <th>
                          Rusak Berat
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php   
                        include "link/connect.php";
                        
                        $result = mysqli_query($connect,"SELECT * from kir");

                        $i = 1;    
                        while($data = mysqli_fetch_array($result)){ ?>
                                        <tr>
                                        <td class="text-center"><?php echo $i;?></td>
                                        <td class="text-center"><?php echo $data['NAMA_BARANG'];?></td>
                                        <td class="text-center"><?php echo $data['MERK'];?></td>
                                        <td class="text-center"><?php echo $data['NO_SERI'];?></td>
                                        <td class="text-center"><?php echo $data['UKURAN'];?></td>
                                        <td class="text-center"><?php echo $data['BAHAN'];?></td>
                                        <td class="text-center"><?php echo $data['TAHUN'];?></td>
                                        <td class="text-center"><?php echo $data['NO_KODE'];?></td>
                                        <td class="text-center"><?php echo $data['JUMLAH'];?></td>
                                        <td class="text-center"><?php echo $data['HARGA'];?></td>
                                        <td class="text-center"><?php echo $data['BAIK'];?></td>
                                        <td class="text-center"><?php echo $data['KURANG_BAIK'];?></td>
                                        <td class="text-center"><?php echo $data['RUSAK_BERAT'];?></td>
                                        <td class="text-center"><?php echo $data['KETERANGAN'];?></td>
                                        <td>
                                          <button type="button" class="btn-xs btn-outline-primary ml-2 mb-2"><a href="input-kir.php?&kode=<?php echo $data['NO_KODE'];?>" title="Edit" style="text-decoration:none;">Edit</a></button>
                                          <button type="button" class="btn-xs btn-outline-danger ml-2"> <a href="link/input-kib-a.php">Delete</a> </button>
                                        </td>                                        
                                        </tr>  
                                        
                      <?php $i++;
                      } ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script>
    $(document).ready( function () {
      $('#table_id').DataTable();
    } );
  </script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  
</body>

</html>