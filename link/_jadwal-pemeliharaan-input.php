<div class="panel-header panel-header-sm">
    <img src="assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p class="card-title text-center"><strong>Input Daftar Jadwal Pemeliharaan</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <form method="post" action="link/crud.php?process=insert_jadwal_pemeliharaan" enctype="multipart/form-data">
                                <div class="form-row">
                                    <?php
                                    include "connect.php";

                                    $result = mysqli_query($connect, "SELECT ID_JADWAL FROM JADWAL_PEMELIHARAAN ORDER BY ID_JADWAL DESC LIMIT 1");
                                    if ($row = mysqli_fetch_assoc($result)) {
                                        $num = $row['ID_JADWAL'];
                                        $num++;
                                    } else {
                                        $num = 0;
                                    }
                                    ?>
                                    <input type="hidden" name="ID_JADWAL" value="<?php echo "$num"; ?>">
                                    <div class="form-group col-md-6">
                                        <label for="formGroupExampleInput2">Kode Barang - Nama Barang</label>
                                        <select name="KODE_BARANG" class="form-control" id="formGroupExampleInput2">
                                            <?php
                                            $query = "SELECT KODE_BARANG,NAMA_BARANG FROM kib_b";
                                            $result = mysqli_query($connect, $query);
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value='$row[KODE_BARANG]'>$row[KODE_BARANG] - $row[NAMA_BARANG]</option>";
                                                }
                                            } else {
                                                echo "<option value=''>Input Kib B terlebih dahulu</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">JENIS_PEMELIHARAAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="JENIS_PEMELIHARAAN"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">KEGIATAN :</label> <input type="text" class="form-control" id="formGroupExampleInput" name="KEGIATAN"> </div>
                                    <div class="form-group col-md-6"> <label for="formGroupExampleInput">TANGGAL_PEMELIHARAAN :</label> <input type="date" class="form-control" id="formGroupExampleInput" name="TANGAL_PEMELIHARAAN"> </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 align-middle">
                                        <button type="submit" name="insert_bmd" class="btn btn-primary">Simpan</button>
                                        <button value="kembali" class="btn btn-secondary"><a href="index.php?page=jadwal-pemeliharaan">Back</a></button>
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