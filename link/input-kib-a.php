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
    <img src="assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%">
</div>
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <p class="card-title text-center"><strong>Input Kartu Inventaris Barang (KIB) A <br>Tanah</strong></p>
              </div>
              <div class="card-body">                
                <div class="row">
                    <div class="col-md-12">
                    
                    <form method="post" action="crud.php?process=insert_kib_a" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Kodefikasi Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="kode">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Nomor Sertifikat :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="noserti">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Nomor Register :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="noregis">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Penggunaan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="pengguna">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Nama Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Asal Usul :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="asal">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Luas (M2) :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="luas">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Harga :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="harga">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Tahun Pengadaan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="tahun">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Keterangan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="ket">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Letak / Alamat :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="alamat">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Lampiran Foto :</label>
                                <div class="form-group">
                                    <div class="custom-file"style="height:20px;">
                                        <input type="file" class="custom-file-input" id="customFile1" name="foto">
                                        <label class="custom-file-label" id="label1" for="customFile1">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Tanggal Sertifikat :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="tanggal">
                        </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Lampiran Dokumen :</label>
                                <div class="custom-file" style="height:20px;">
                                    <input type="file" class="custom-file-input" id="customFile2" name="filename">
                                    <label class="custom-file-label" id="label2" for="customFile2">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Hak :</label>
                                <select id="inputState" class="form-control" name="hak" style="height:40px;">
                                    <option selected>Pilih:</option>
                                    <option>Guna Bangunan</option>
                                    <option>Pakai</option>
                                </select>
                            </div>                        
                            <div class="form-group col-md-6 align-middle">
                                    <button type="submit" name="insert_kib_a" class="btn btn-primary">Simpan</button>
                                    <button value="kembali" class="btn btn-secondary"><a href="kib-a.php"></a></button>                                
                            </div>
                        </div>
                    </form>
                    </div>                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        // Add the following code if you want the name of the file appear on select
        $("$customFile1").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings("#label1").addClass("selected").html(fileName);
        });
        $("#customFile2").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings("#label2").addClass("selected").html(fileName);
        });
        </script>
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
  <script src="../assets/js/plugins/jquery.dataTables.js"></script>
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
  <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> -->
  
</body>

</html>