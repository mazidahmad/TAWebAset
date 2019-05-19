<?php
        include 'connect.php';

        function insert_kib_a($connect){
          if (isset($_POST['insert_kib_a'])){
            $kode            = $_POST['kode'];
            $tanggal           = $_POST['tanggal'];
            $noregis        = $_POST['noregis'];
            $noserti        = $_POST['noserti'];
            $nama           = $_POST['nama'];
            $pengguna        = $_POST['pengguna'];
            $hak        = $_POST['hak'];
            $asal        = $_POST['asal'];
            $luas        = $_POST['luas'];
            $tahun           = $_POST['tahun'];
            $harga        = $_POST['harga'];
            $alamat           = $_POST['alamat'];
            $ket        = $_POST['ket'];
              
            if(!empty($kode) && !empty($tanggal) && !empty($noregis) && !empty($noserti) && !empty($nama)
            && !empty($pengguna) && !empty($hak) && !empty($asal) && !empty($luas) && !empty($tahun)
            && !empty($harga) && !empty($alamat) && !empty($ket)){
                  $query = "INSERT INTO kib_a SET kode_barang='$kode',nama_barang='$nama',register='$noregis',luas='$luas', tahun_pengadaan='$tahun',alamat='$alamat', hak='$hak', sertifikat_tanggal='$tanggal',sertifikat_nomor='$noserti', penggunaan='$pengguna', asal_usul='$asal', harga='$harga', keterangan='$ket'";
                  $sql = mysqli_query($connect, $query);
                  if($sql && isset($_GET['process'])){
                      if($_GET['process'] == 'insert_kib_a'){
                        header("location:../index.php?page=kib");
                      }
                  }
              } else {
                  $pesan = "Tidak dapat menyimpan, data belum lengkap!";
              }
          }
        }

        function update_kib_a($connect){
          if(isset($_POST['update_kib_a'])){
              $kode            = $_POST['kode'];
              $tanggal           = $_POST['tanggal'];
              $noregis        = $_POST['noregis'];
              $noserti        = $_POST['noserti'];
              $nama           = $_POST['nama'];
              $pengguna        = $_POST['pengguna'];
              $hak        = $_POST['hak'];
              $asal        = $_POST['asal'];
              $luas        = $_POST['luas'];
              $tahun           = $_POST['tahun'];
              $harga        = $_POST['harga'];
              $alamat           = $_POST['alamat'];
              $ket        = $_POST['ket'];
              
              if(!empty($kode) && !empty($tanggal) && !empty($noregis) && !empty($noserti) && !empty($nama)
              && !empty($pengguna) && !empty($hak) && !empty($asal) && !empty($luas) && !empty($tahun)
              && !empty($harga) && !empty($alamat) && !empty($ket)){
                $query = "UPDATE kib_a SET nama_barang='$nama',register='$noregis',luas='$luas', tahun_pengadaan='$tahun',alamat='$alamat', hak='$hak', sertifikat_tanggal='$tanggal',sertifikat_nomor='$noserti', penggunaan='$pengguna', asal_usul='$asal', harga='$harga', keterangan='$ket' WHERE kode_barang='$kode'";
                  $update = mysqli_query($connect, $query);
                  if($update && isset($_GET['process'])){
                      if($_GET['process'] == 'update_kib_a'){
                          header('location: ../index.php?page=kib');
                      }
                  }
              } else {
                  $pesan = "Data tidak lengkap!";
              }
          }          
        }

        function delete_kib_a($connect){
          if(isset($_GET['kode']) && isset($_GET['process'])){
              $kode = $_GET['kode'];
              $query = "DELETE FROM kib_a WHERE kode_barang='$kode'";
              $delete = mysqli_query($connect, $query);              
              if($delete){
                  if($_GET['process'] == 'delete_kib_a'){
                      header('location: ../index.php?page=kib');
                  }
              }
          }          
        }

        function insert_kir($connect){
          if (isset($_POST['insert_kir'])){
            $kode		= $_POST['kode'];
            $nama   = $_POST['nama'];
            $merk   = $_POST['merk'];
            $noseri = $_POST['noseri'];
            $ukuran = $_POST['ukuran'];
            $bahan  = $_POST['bahan'];
            $tahun  = $_POST['tahun'];
            $jumlah = $_POST['jumlah'];
            $harga  = $_POST['harga'];
            $baik   = $_POST['baik'];
            $kurang = $_POST['kurang'];
            $rusak  = $_POST['rusak'];
            $ket    = $_POST['ket'];
              
            if(!empty($kode) && !empty($nama) && !empty($merk) && !empty($noseri) && !empty($ukuran)
            && !empty($bahan) && !empty($tahun) && !empty($jumlah) && !empty($harga) && !empty($baik)
            && !empty($kurang) && !empty($rusak) && !empty($ket)){
                  $query = "INSERT INTO kir SET no_kode='$kode',nama_barang='$nama',merk='$merk',no_seri='$noseri', ukuran='$ukuran',bahan='$bahan', tahun='$tahun', jumlah='$jumlah', harga='$harga',baik='$baik', kurang_baik='$kurang', rusak_berat='$rusak', keterangan='$ket'";
                  $sql = mysqli_query($connect, $query);
                  if($sql && isset($_GET['process'])){
                      if($_GET['process'] == 'insert_kir'){
                        header("location:../index.php?page=kir");
                      }
                  }
              } else {
                  $pesan = "Tidak dapat menyimpan, data belum lengkap!";
              }
          }
        }

        function update_kir($connect){
          if(isset($_POST['update_kir'])){
              $kode		= $_POST['kode'];
              $nama   = $_POST['nama'];
              $merk   = $_POST['merk'];
              $noseri = $_POST['noseri'];
              $ukuran = $_POST['ukuran'];
              $bahan  = $_POST['bahan'];
              $tahun  = $_POST['tahun'];
              $jumlah = $_POST['jumlah'];
              $harga  = $_POST['harga'];
              $baik   = $_POST['baik'];
              $kurang = $_POST['kurang'];
              $rusak  = $_POST['rusak'];
              $ket    = $_POST['ket'];
              
              if(!empty($kode) && !empty($nama) && !empty($merk) && !empty($noseri) && !empty($ukuran)
              && !empty($bahan) && !empty($tahun) && !empty($jumlah) && !empty($harga) && !empty($baik)
              && !empty($kurang) && !empty($rusak) && !empty($ket)){
                $query = "UPDATE kir SET nama_barang='$nama',merk='$merk',no_seri='$noseri', ukuran='$ukuran',bahan='$bahan', tahun='$tahun', jumlah='$jumlah', harga='$harga',baik='$baik', kurang_baik='$kurang', rusak_berat='$rusak', keterangan='$ket' WHERE no_kode='$kode'";
                  $update = mysqli_query($connect, $query);
                  if($update && isset($_GET['process'])){
                      if($_GET['process'] == 'update_kir'){
                          header('location: ../index.php?page=kir');
                      }
                  }
              } else {
                  $pesan = "Data tidak lengkap!";
              }
          }          
        }

        function delete_kir($connect){
          if(isset($_GET['kode']) && isset($_GET['process'])){
              $kode = $_GET['kode'];
              $query = "DELETE FROM kir WHERE no_kode='$kode'";
              $delete = mysqli_query($connect, $query);              
              if($delete){
                  if($_GET['process'] == 'delete_kir'){
                      header('location: ../index.php?page=kir');
                  }
              }
          }          
        }

        if (isset($_GET['process'])){
          switch($_GET['process']){
              case "insert_kib_a":                  
                  insert_kib_a($connect);
                  break;
              case "update_kib_a":
                  update_kib_a($connect);
                  break;
              case "delete_kib_a":
                  delete_kib_a($connect);
                  break;
              case "insert_kir":                  
                  insert_kir($connect);
                  break;
              case "update_kir":
                  update_kir($connect);
                  break;
              case "delete_kir":
                  delete_kir($connect);
                  break;    
              default:
                  echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
                  tambah($koneksi);
                  tampil_data($koneksi);
          }
        }

?>