<div class="panel-header panel-header-lg">
    <img src="assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p class="card-title text-center"><strong>Input Daftar Kartu Pemeliharaan</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <form method="post" action="link/crud.php?process=insert_kartu_pemeliharaan" enctype="multipart/form-data">
                                <div class="form-row">
                                    <?php
                                    include "connect.php";

                                    $result = mysqli_query($connect, "SELECT ID_KARTU FROM KARTU_PEMELIHARAAN ORDER BY ID_KARTU DESC LIMIT 1");
                                    if ($row = mysqli_fetch_assoc($result)) {
                                        $num = $row['ID_KARTU'];
                                        $num++;
                                    } else {
                                        $num = 0;
                                    }
                                    ?>
                                    <input type="hidden" name="ID_KARTU" value="<?php echo "$num"; ?>">
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">KODE_BARANG :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="KODE_BARANG"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">NAMA_BARANG :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="NAMA_BARANG"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">JENIS_PEMELIHARAAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="JENIS_PEMELIHARAAN"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">KEGIATAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="KEGIATAN"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">TANGGAL_PEMELIHARAAN :</label> <input type="date" class="form-control" id="formGroupExampleInput" name="TANGAL_PEMELIHARAAN"> </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 align-middle">
                                        <button type="submit" name="insert_bmd" class="btn btn-primary">Simpan</button>
                                        <button value="kembali" class="btn btn-secondary"><a href="index.php?page=kartu-pemeliharaan">Back</a></button>
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