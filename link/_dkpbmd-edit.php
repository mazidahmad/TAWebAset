<div class="panel-header panel-header-lg">
    <img src="assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p class="card-title text-center"><strong>Input Daftar Kebutuhan Pemeliharaan Barang Milik Daerah</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <form method="post" action="link/crud.php?process=update_dkpbmd" enctype="multipart/form-data">
                                <div class="form-row">
                                    <?php
                                    include "connect.php";

                                    $result = mysqli_query($connect, "SELECT * FROM DKPBMD WHERE ID_DKPBMD='$_GET[ID_DKPBMD]'");
                                    if ($row = mysqli_fetch_assoc($result)) { } else {
                                        header("Location:index.php?page=dkpbmd");
                                    }
                                    ?>
                                    <input type="hidden" name="ID_DKPBMD" <?php echo "value='$row[NAMA_BARANG]'"; ?>>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">NAMA_BARANG :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="NAMA_BARANG" <?php echo "value='$row[NAMA_BARANG]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">NO_REGISTER :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="NO_REGISTER" <?php echo "value='$row[NO_REGISTER]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">TAHUN_PEROLEHAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="TAHUN_PEROLEHAN" <?php echo "value='$row[TAHUN_PEROLEHAN]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">TAHUN_ANGGARAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="TAHUN_ANGGARAN" <?php echo "value='$row[TAHUN_ANGGARAN]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">JENIS_PEMELIHARAAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="JENIS_PEMELIHARAAN" <?php echo "value='$row[JENIS_PEMELIHARAAN]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">URAIAN_PEMELIHARAAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="URAIAN_PEMELIHARAAN" <?php echo "value='$row[URAIAN_PEMELIHARAAN]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">JUMLAH_BARANG :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="JUMLAH_BARANG" <?php echo "value='$row[JUMLAH_BARANG]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">HARGA_SATUAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="HARGA_SATUAN" <?php echo "value='$row[HARGA_SATUAN]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">JUMLAH_HARGA :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="JUMLAH_HARGA" <?php echo "value='$row[JUMLAH_HARGA]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">KODE_REKENING> :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="KODE_REKENING" <?php echo "value='$row[KODE_REKENING]'"; ?>> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">KETERANGAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="KETERANGAN" <?php echo "value='$row[KETERANGAN]'"; ?>> </div>
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