<div class="panel-header panel-header-sm">
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

                            <form method="post" action="link/crud.php?process=insert_dkpbmd" enctype="multipart/form-data">
                                <div class="form-row">
                                    <?php
                                    include "connect.php";

                                    $result = mysqli_query($connect, "SELECT ID_DKPBMD FROM DKPBMD ORDER BY ID_DKPBMD DESC LIMIT 1");
                                    if ($row = mysqli_fetch_assoc($result)) {
                                        $num = substr($row['ID_DKPBMD'], 5, 2);
                                        $num++;
                                    } else {
                                        $num = 0;
                                    }
                                    ?>
                                    <input type="hidden" name="ID_DKPBMD" value="<?php echo "DKBMD$num"; ?>">
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">NAMA_BARANG :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="NAMA_BARANG"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">NO_REGISTER :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="NO_REGISTER"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">TAHUN_PEROLEHAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="TAHUN_PEROLEHAN"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">TAHUN_ANGGARAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="TAHUN_ANGGARAN"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">JENIS_PEMELIHARAAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="JENIS_PEMELIHARAAN"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">URAIAN_PEMELIHARAAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="URAIAN_PEMELIHARAAN"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">JUMLAH_BARANG :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="JUMLAH_BARANG"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">HARGA_SATUAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="HARGA_SATUAN"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">JUMLAH_HARGA :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="JUMLAH_HARGA"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">KODE_REKENING :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="KODE_REKENING"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">KETERANGAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="KETERANGAN"> </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 align-middle">
                                        <button type="submit" name="insert_bmd" class="btn btn-primary">Simpan</button>
                                        <button value="kembali" class="btn btn-secondary"><a href="index.php?page=dkpbmd">Back</a></button>
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