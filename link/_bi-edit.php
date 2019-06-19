<?php
include 'connect.php';
$ID_BI = $_GET['id'];
$query = "SELECT * FROM BI WHERE ID_BI='$ID_BI'";
$result = mysqli_query($connect, $query);
if ($row = mysqli_fetch_array($result)){
    
?>
<div class="panel-header panel-header-sm">
    <!-- <img src="assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%"> -->
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p class="card-title text-center"><strong>Input BUKU INVENTARIS BARANG</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <form method="post" action="link/crud.php?process=update_bi" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">ID_BI :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="ID_BI" <?php echo "value='$row[ID_BI]'"; ?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">NOMOR_KODE_BARANG :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="NOMOR_KODE_BARANG"<?php echo "value='$row[NOMOR_KODE_BARANG]'"; ?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">NOMOR_REGISTER :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="NOMOR_REGISTER"<?php echo "value='$row[NOMOR_REGISTER]'"; ?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">NAMA_BARANG:</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="NAMA_BARANG"<?php echo "value='$row[NAMA_BARANG]'"; ?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">MERK_TIPE:</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="MERK_TIPE"<?php echo "value='$row[MERK_TIPE]'"; ?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">NO_SERTIFIKAT :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="NO_SERTIFIKAT"<?php echo "value='$row[NO_SERTIFIKAT]'"; ?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">BAHAN :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="BAHAN"<?php echo "value='$row[BAHAN]'"; ?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">ASAL:</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="ASAL"<?php echo "value='$row[ASAL]'"; ?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">TAHUN_PEROLEHAN :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="TAHUN_PEROLEHAN"<?php echo "value='$row[TAHUN_PEROLEHAN]'"; ?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">UKURAN_BARANG :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="UKURAN_BARANG"<?php echo "value='$row[UKURAN_BARANG]'"; ?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">KEADAAN_BARANG:</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="KEADAAN_BARANG"<?php echo "value='$row[KEADAAN_BARANG]'"; ?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">JUMLAH_BARANG :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="JUMLAH_BARANG"<?php echo "value='$row[JUMLAH_BARANG]'"; ?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">JUMLAH_HARGA :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="JUMLAH_HARGA"<?php echo "value='$row[JUMLAH_HARGA]'"; ?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">KETERANGAN :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="KETERANGAN"<?php echo "value='$row[KETERANGAN]'"; ?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 align-middle">
                                        <button type="submit" name="insert_bi" class="btn btn-primary">Update</button>
                                        <a class="btn btn-secondary" href="index.php?page=bi">Back</a>
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
<?php }else{
    header("Location:../index.php?page=bi");
} ?>