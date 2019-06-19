<?php
$KODE_BARANG = $_GET['KODE_BARANG'];
$query = "SELECT * FROM kib_b WHERE KODE_BARANG='$KODE_BARANG'";
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
                    <p class="card-title text-center"><strong>Input Kartu Inventaris Barang (KIB) B <br>Peralatan dan Mesin</strong></p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <form method="post" action="link/crud.php?process=update_kib_b" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">KODE_BARANG :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="KODE_BARANG" <?php echo "value='$row[KODE_BARANG]'";?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">NAMA_BARANG :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="NAMA_BARANG" <?php echo "value='$row[NAMA_BARANG]'";?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">NO_REGISTER :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="NO_REGISTER" <?php echo "value='$row[NO_REGISTER]'";?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">MERK :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="MERK" <?php echo "value='$row[MERK]'";?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">UKURAN :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="UKURAN" <?php echo "value='$row[UKURAN]'";?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">BAHAN :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="BAHAN" <?php echo "value='$row[BAHAN]'";?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">TAHUN :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="TAHUN" <?php echo "value='$row[TAHUN]'";?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">NO PABRIK :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="PABRIK" <?php echo "value='$row[PABRIK]'";?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">NO RANGKA :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="RANGKA" <?php echo "value='$row[RANGKA]'";?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">NO MESIN :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="MESIN" <?php echo "value='$row[MESIN]'";?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">NO POLISI :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="POLISI" <?php echo "value='$row[POLISI]'";?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">NO BPKB :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="BPKB" <?php echo "value='$row[BPKB]'";?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">ASAL_USUL :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="ASAL_USUL" <?php echo "value='$row[ASAL_USUL]'";?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">HARGA :</label>
                                        <input type="number" class="form-control" id="formGroupExampleInput" name="HARGA" <?php echo "value='$row[HARGA]'";?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput">KETERANGAN :</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="KETERANGAN" <?php echo "value='$row[KETERANGAN]'";?>>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 align-middle">
                                        <button type="submit" name="insert_kib_b" class="btn btn-primary">Update</button>
                                        <a class="btn btn-secondary" href="index.php?page=kib">Batal</a>
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
    $("#customFile1").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings("#label1").addClass("selected").html(fileName);
    });
    $("#customFile2").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings("#label2").addClass("selected").html(fileName);
    });
</script>
<?php }else{ header("Location:../index.php?page=_kib");} ?>