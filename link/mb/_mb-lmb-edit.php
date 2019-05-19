<div class="panel-header panel-header-sm">
        <!-- <img src="../assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%"> -->
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <p class="card-title text-center"><strong>Input Laporan Mutasi Barang</strong></p>
              </div>
              <div class="card-body">                
                <div class="row">
                    <div class="col-md-12">
                    
                    <?php 
                        
                        if(isset($_GET['kode'])){
                        $kode		= $_GET['kode'];
                        $query	= mysqli_query($connect,"SELECT * FROM MUTASI_BARANG WHERE ID_MUTASI = $kode");
                        $data  	= mysqli_fetch_array($query);
                        
                        $id_mutasi              = $data['ID_MUTASI'];
						$kode_barang            = $data['NOMOR_KODE_BARANG'];
						$register				= $data['NOMOR_REGISTER'];
						$nama_barang			= $data['NAMA_BARANG'];
						$merk	           		= $data['MERK_TIPE'];
						$no_sertif         		= $data['NO_SERTIFIKAT'];
						$bahan	           		= $data['BAHAN'];
						$asal_barang       		= $data['ASAL'];
						$tahun_perolehan	    = $data['TAHUN_PEROLEHAN'];
						$ukuran_barang	        = $data['UKURAN_BARANG'];
						$satuan	           		= $data['SATUAN'];
						
						$kondisi                = $data['KONDISI'];
						$jumlah_barang_awal		= $data['JUMLAH_BARANG'];
						$jumlah_harga_awal		= $data['JUMLAH_HARGA'];
						$jumlah_barang_berkurang= $data['JUMLAH_BARANG_BERKURANG'];
						$jumlah_harga_berkurang	= $data['JUMLAH_HARGA_BERKURANG'];
						$jumlah_barang_bertambah= $data['JUMLAH_BARANG_BERTAMBAH'];
						$jumlah_harga_bertambah	= $data['JUMLAH_HARGA_BERTAMBAH'];
						$jumlah_barang_akhir	= $data['JUMLAH_BARANG_AKHIR'];
						$jumlah_harga_akhir		= $data['JUMLAH_HARGA_AKHIR'];
						$ket	           		= $data['KETERANGAN'];
						
                      } ?>
                    <form method="post" action="link/crud.php?process=update_lmb" enctype="multipart/form-data">
                    <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Kode Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?=$kode_barang; ?>" name="kode_barang">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Kondisi (B,RR,RB) :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?=$kondisi; ?>" name="kondisi">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Register :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?=$register; ?>" name="register">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Barang Awal :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" value="<?=$jumlah_barang_awal; ?>" name="jumlah_barang_awal">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Nama Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?=$nama_barang; ?>" name="nama_barang">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Harga Awal :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" value="<?=$jumlah_harga_awal; ?>" name="jumlah_harga_awal">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Merk / Type :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?=$merk; ?>" name="merk">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Barang Berkurang :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" value="<?=$jumlah_barang_berkurang; ?>" name="jumlah_barang_berkurang">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">No. Sertifikat / No. Pabrik / No. Chasis / No. Mesin :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?=$no_sertif; ?>" name="no_sertif">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Harga Berkurang :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" value="<?=$jumlah_harga_berkurang; ?>" name="jumlah_harga_berkurang">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Bahan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?=$bahan; ?>" name="bahan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Barang Bertambah :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" value="<?=$jumlah_barang_bertambah; ?>" name="jumlah_barang_bertambah">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Asal / Cara Perolehan Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?=$asal_barang; ?>" name="asal_barang">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Harga Bertambah :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" value="<?=$jumlah_harga_bertambah; ?>" name="jumlah_harga_bertambah">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Tahun Perolehan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?=$tahun_perolehan; ?>" name="tahun_perolehan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Barang Akhir :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" value="<?=$jumlah_barang_akhir; ?>" name="jumlah_barang_akhir">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Ukuran Barang / Konstruksi (P,SP,D) :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?=$ukuran_barang; ?>" name="ukuran_barang">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Harga Akhir :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" value="<?=$jumlah_harga_akhir; ?>" name="jumlah_harga_akhir">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Satuan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?=$satuan; ?>" name="satuan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Keterangan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" value="<?=$ket; ?>" name="ket">
                            </div>
                        </div>
                        <div class="form-row">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 align-middle">
                            <input type="hidden" name="id_mutasi" value="<?=$id_mutasi; ?>" >
                                    <button type="submit" name="update_lmb" class="btn btn-primary">Simpan</button>
                                    <a class="btn btn-secondary" href="index.php?page=mb">Batal</a>
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