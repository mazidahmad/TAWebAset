<?php
include 'connect.php';
$ID_BMD = $_GET['id'];
$query = "SELECT * FROM BMD_GUNAUSAHA WHERE ID_BMD='$ID_BMD'";
$result = mysqli_query($connect, $query);
if ($row = mysqli_fetch_array($result)){
    
?>
    <div class="panel-header panel-header-lg">
        <img src="assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p class="card-title text-center"><strong>Update DAFTAR BARANG MILIK DAERAH YANG DIGUNAUSAHAKAN</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                                <form method="post" action="link/crud.php?process=update_bmd" enctype="multipart/form-data">
                                    <input type="hidden" name="id" <?php echo"value='$row[ID_BMD]'";?>>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">NO_KODE_LOKASI_BARANG :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="NO_KODE_LOKASI_BARANG" <?php echo"value='$row[NO_KODE_LOKASI_BARANG]'";?>>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">NO_KODE_BARANG :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="NO_KODE_BARANG"<?php echo"value='$row[NO_KODE_BARANG]'";?>>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">NO_REGISTER :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="NO_REGISTER" <?php echo"value='$row[NO_REGISTER]'";?>>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">NAMA_BARANG:</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="NAMA_BARANG" <?php echo"value='$row[NAMA_BARANG]'";?>>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">DOKUMEN_BARANG:</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="DOKUMEN_BARANG" <?php echo"value='$row[DOKUMEN_BARANG]'";?>>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">ALAMAT_BARANG :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="ALAMAT_BARANG" <?php echo"value='$row[ALAMAT_BARANG]'";?>>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">ASAL_USUL :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="ASAL_USUL" <?php echo"value='$row[ASAL_USUL]'";?>>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">TAHUN_PEMBELIAN:</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="TAHUN_PEMBELIAN" <?php echo"value='$row[TAHUN_PEMBELIAN]'";?>>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">KONSTRUKSI :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="KONSTRUKSI" <?php echo"value='$row[KONSTRUKSI]'";?>>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">LUAS :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="LUAS" <?php echo"value='$row[LUAS]'";?>>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">NILAI_BARANG:</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="NILAI_BARANG" <?php echo"value='$row[NILAI_BARANG]'";?>>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">SK_KDH :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="SK_KDH" <?php echo"value='$row[SK_KDH]'";?>>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">JANGKA_WAKTU :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="JANGKA_WAKTU" <?php echo"value='$row[JANGKA_WAKTU]'";?>>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">ALAMA_PHK_KETIGAT :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="ALAMA_PHK_KETIGAT" <?php echo"value='$row[ALAMA_PHK_KETIGAT]'";?>>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">KETERANGAN :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="KETERANGAN" <?php echo"value='$row[KETERANGAN]'";?>>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 align-middle">
                                            <button type="submit" name="insert_bmd" class="btn btn-primary">Simpan</button>
                                            <button value="kembali" class="btn btn-secondary"><a href="bmd-gunausaha.php">Back</a></button>
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
<?php 
}else{header("Location:../index.php?page=bmd-gunausaha");}?>