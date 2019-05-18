<?php
include 'connect.php';
$kode	= $_GET['kode'];
$query = "SELECT * from kib_a where KODE_BARANG = '$kode' ";
$sql = mysqli_query($connect,$query);
$data = mysqli_fetch_array($sql);

//if(is_file("img/mhs/".$data['FOTO'])) unlink("img/mhs/".$data['FOTO']);
$query2 	= "DELETE FROM kib_a WHERE KODE_BARANG ='$kode'";
mysqli_query($connect,$query2);
if($query2){
  header("location:index.php?page=kib"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>