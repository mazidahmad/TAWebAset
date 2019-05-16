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
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="logout-action.php">
                  <i class="now-ui-icons media-1_button-power"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Logout</span>
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
            <div class="card">
              <div class="card-header">
                <h4 class="card-title text-center"><strong>Kartu Inventaris Barang (KIB) B <br>Peralatan dan Mesin</strong></h4>
              </div>
              <div class="card-body">                
                <div class="row">
                  <div class="col-sm-2">
                    <p>PROVINSI         </p>
                    <p>KABUPATEN / KOTA </p>  
                    <p>BIDANG           </p>
                    <p>ASISTEM / OPD    </p>
                    <p>BIRO / UPTD / B  </p>
                    <p>No. Kode Lokasi  </p>
                  </div>
                  <div class="col-sm-1">
                    <p>:</p>
                    <p>:</p>  
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                  </div>
                  <div class="col-sm-3">
                    <p>JAWA BARAT </p>
                    <p>- </p>  
                    <p>BIDANG KIMPRASWIL/KE-PU-AN		</p>
                    <p>Dinas Perumahan dan Pemukiman</p>
                    <p>Sekretariat Dinas</p>
                    <p>11.10.00.05.02.00		</p>
                  </div>
                </div>              
                <div class="table table-responsive">
                  <table id="table_id" class="display">
                    <thead class="text-primary">
                      <tr>
                        <th rowspan="2">
                          No
                        </th>
                        <th rowspan="2">
                          Kode Barang
                        </th>
                        <th rowspan="2">
                          Nama Barang
                        </th>
                        <th rowspan="2">
                          Nomor Register
                        </th>
                        <th rowspan="2">
                          Merk/Type
                        </th>
                        <th rowspan="2">
                          Ukuran/CC
                        </th>
                        <th rowspan="2">
                          Bahan
                        </th>
                        <th rowspan="2">
                          Tahun Perolehan
                        </th>
                        <th colspan="5" class="text-center">
                         Nomor
                        </th>
                        <th rowspan="2">
                          Asal Usul Cara Perolehan
                        </th>
                        <th rowspan="2">
                          Harga
                        </th>
                        <th rowspan="2">
                          Keterangan
                        </th>
                      </tr>
                      <tr>
                        <th>
                          Pabrik
                        </th>
                        <th >
                          Rangka
                        </th>
                        <th>
                          Mesin
                        </th>
                        <th>
                          Polisi
                        </th>
                        <th>
                          BPKB
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          02.02.08.06.01
                        </td>
                        <td class="text-center">
                          Mesin Bor Batu
                        </td>
                        <td class="text-center">
                          1
                        </td>
                        <td class="text-center">
                          ISUZU ELF TRUCK
                        </td>
                        <td class="text-center">
                          4,57
                        </td>
                        <td>
                          BESI
                        </td>
                        <td class="text-center">
                          2010
                        </td>
                        <td class="text-center">
                          ISUZU
                        </td>
                        <td class="text-center">
                          MHCNK71LYAJ020035
                        </td>
                        <td class="text-center">
                          B020035
                        </td>
                        <td>
                          D 8565 C
                        </td>
                        <td class="text-center">
                          H-08139654
                        </td>
                        <td class="text-center">
                          "Pembelian
                          /Inventaris/
                          "
                        </td>
                        <td class="text-center">
                            674.965.800,00
                        </td>
                        <td class="text-center">
                            -
                        </td>
                      </tr>
                      <tr>
                      <td>
                          1
                        </td>
                        <td>
                          "02.03.01.01.01
                          464196"
                        </td>
                        <td class="text-center">
                          Sedan
                        </td>
                        <td class="text-center">
                          1
                        </td>
                        <td class="text-center">
                          HONDA CITY
                        </td>
                        <td class="text-center">
                          -
                        </td>
                        <td>
                          BESI
                        </td>
                        <td class="text-center">
                          2010
                        </td>
                        <td class="text-center">
                          HONDA
                        </td>
                        <td class="text-center">
                          MRHGM26604P020433
                        </td>
                        <td class="text-center">
                          L15472803348
                        </td>
                        <td>
                          D 1516 F
                        </td>
                        <td class="text-center">
                          H-02161953
                        </td>
                        <td class="text-center">
                          "Pembelian
                          /Inventaris/
                          "
                        </td>
                        <td class="text-center">
                          262.500.000,00
                        </td>
                        <td class="text-center">
                            -
                        </td>
                      </tr>
                      
                      
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