<?php
        include 'connect.php';
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

        // Proses simpan ke Database
        $query="INSERT INTO kib_a SET kode_barang='$kode',nama_barang='$nama',register='$noregis',luas='$luas', tahun_pengadaan='$tahun',alamat='$alamat', hak='$hak', sertifikat_tanggal='$tanggal',sertifikat_nomor='$noserti', penggunaan='$pengguna', asal_usul='$asal', harga='$harga', keterangan='$ket'";
        $sql =  mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
        if($sql){ // Cek jika proses simpan ke database sukses atau tidak
          // Jika Sukses, Lakukan :
          header("location:kib-a.php"); // Redirect ke halaman index.php
        }else{
          // Jika Gagal, Lakukan :
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
          echo "<br><a href='input-kib-a.php'>Kembali Ke Form</a>";
        }
?>