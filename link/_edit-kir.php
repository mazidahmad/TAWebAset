      <div class="panel-header panel-header-lg">
        <img src="../assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <p class="card-title text-center"><strong>Input Kartu Inventaris Ruangan (KIR)</strong></p>
              </div>
              <div class="card-body">                
                <div class="row">
                    <div class="col-md-12">
                    
                    <?php 
                        include "connect.php";
                        
                        if(isset($_GET['kode'])){
                        $kode		= $_GET['kode'];
                        $query	= mysqli_query($connect,"SELECT * FROM kir WHERE NO_KODE = '$kode'");
                        $data  	= mysqli_fetch_array($query);
                        $nama = $data['NAMA_BARANG'];
                        $merk = $data['MERK'];
                        $noseri = $data['NO_SERI'];
                        $ukuran = $data['UKURAN'];
                        $bahan = $data['BAHAN'];
                        $tahun = $data['TAHUN'];
                        $jumlah = $data['JUMLAH'];
                        $harga = $data['HARGA'];
                        $baik = $data['BAIK'];
                        $kurang = $data['KURANG_BAIK'];
                        $rusak = $data['RUSAK_BERAT'];
                        $ket = $data['KETERANGAN'];
                      } ?>
                    <form method="post" action="link/crud.php?process=update_kir" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Nama Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $nama; ?>" name="nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Jumlah Barang / Register :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput2" value="<?php echo $jumlah; ?>" name="jumlah">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Merk/Model :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $merk; ?>" name="merk">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Harga Beli / Perolehan (Rp) :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" value="<?php echo $harga; ?>" name="harga">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">No. Seri Pabrik :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $noseri; ?>" name="noseri">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Keadaan Barang (BAIK) :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $baik; ?>" name="baik">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Ukuran :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $ukuran; ?>" name="ukuran">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Keadaan Barang (KURANG BAIK) :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $kurang; ?>" name="kurang">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Bahan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $bahan; ?>" name="bahan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Keadaan Barang (RUSAK BERAT) :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $rusak; ?>" name="rusak">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Tahun Pembuatan / Pembelian :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $tahun; ?>" name="tahun">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Keterangan Mutasi DII :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $ket; ?>" name="ket">
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Nomor Kode Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $kode; ?>" name="kode">
                            </div>
                            <div class="form-group col-md-6 align-middle">
                                    <button type="submit" name="update_kir" class="btn btn-primary">Simpan</button>
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