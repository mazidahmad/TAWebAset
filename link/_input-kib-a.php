<div class="panel-header panel-header-lg">
    <img src="assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%">
</div>
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <p class="card-title text-center"><strong>Input Kartu Inventaris Barang (KIB) A <br>Tanah</strong></p>
              </div>
              <div class="card-body">                
                <div class="row">
                    <div class="col-md-12">
                    
                    <?php 
                        include "connect.php";
                    
                        if(isset($_GET['kode'])){
                        $kode		= $_GET['kode'];
                        $query	= mysqli_query($connect,"SELECT * FROM kib_a WHERE KODE_BARANG = '$kode'");
                        $data  	= mysqli_fetch_array($query);
                        $nama = $data['NAMA_BARANG'];
                        $noregis = $data['REGISTER'];
                        $luas = $data['LUAS'];
                        $tahun = $data['TAHUN_PENGADAAN'];
                        $alamat = $data['ALAMAT'];
                        $hak = $data['HAK'];
                        $tanggal = $data['SERTIFIKAT_TANGGAL'];
                        $noserti = $data['SERTIFIKAT_NOMOR'];
                        $pengguna = $data['PENGGUNAAN'];
                        $asal = $data['ASAL_USUL'];
                        $harga = $data['HARGA'];
                        $ket = $data['KETERANGAN'];
                        }
                        else{
                          $nama = "";
                          $noregis = "";
                          $luas = "";
                          $tahun = "";
                          $alamat = "";
                          $tanggal = "";
                          $noserti = "";
                          $asal = "";
                          $harga = "";
                          $ket = "";
                          $kode = "";
                          $pengguna = "";
                      } ?>
                    <form method="post" action="input-action.php" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Kodefikasi Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $kode; ?>" name="kode">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Tanggal Sertifikat :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $tanggal; ?>" name="tanggal">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Nomor Register :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $noregis; ?>" name="noregis">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Nomor Sertifikat :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $noserti; ?>" name="noserti">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Nama Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $nama; ?>" name="nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Penggunaan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $pengguna; ?>" name="pengguna">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Luas (M2) :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $luas; ?>" name="luas">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Asal Usul :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $asal; ?>" name="asal">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Tahun Pengadaan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $tahun; ?>" name="tahun">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Harga :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $harga; ?>" name="harga">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Letak / Alamat :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $alamat; ?>" name="alamat">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Keterangan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $ket; ?>" name="ket">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Hak :</label>
                                <select id="inputState" class="form-control" name="hak">
                                    <?php if(isset($_GET['hak'])){ ?>
                                      <option selected><?php echo $hak?></option>
                                    } else {?>
                                      <option selected>Pilih:</option>
                                    <?php } ?>
                                    <option>Guna Bangunan</option>
                                    <option>Pakai</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 align-middle">
                                    <button type="submit" value="simpan" class="btn btn-primary">Simpan</button>
                                    <button value="kembali" class="btn btn-secondary"><a href="kib-a.php"></a></button>                                
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