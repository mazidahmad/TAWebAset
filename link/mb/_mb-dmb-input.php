<div class="panel-header panel-header-sm">
        <!-- <img src="assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%"> -->
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <p class="card-title text-center"><strong>Input Daftar Mutasi Barang</strong></p>
              </div>
              <div class="card-body">                
                <div class="row">
                    <div class="col-md-12">
                    <form method="post" action="link/crud.php?process=insert_dmb" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Kode Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="kode_barang">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Kondisi (B,RR,RB) :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="kondisi">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Register :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="register">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Barang Awal :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" name="jumlah_barang_awal">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Nama Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="nama_barang">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Harga Awal :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" name="jumlah_harga_awal">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Merk / Type :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="merk">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Barang Berkurang :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" name="jumlah_barang_berkurang">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">No. Sertifikat / No. Pabrik / No. Chasis / No. Mesin :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="no_sertif">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Harga Berkurang :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" name="jumlah_harga_berkurang">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Bahan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="bahan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Barang Bertambah :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" name="jumlah_barang_bertambah">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Asal / Cara Perolehan Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="asal_barang">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Harga Bertambah :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" name="jumlah_harga_bertambah">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Tahun Perolehan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="tahun_perolehan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Barang Akhir :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" name="jumlah_barang_akhir">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Ukuran Barang / Konstruksi (P,SP,D) :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="ukuran_barang">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Jumlah Harga Akhir :</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" name="jumlah_harga_akhir">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Satuan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="satuan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Keterangan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="ket">
                            </div>
                        </div>
                        <div class="form-row">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 align-middle">
                                    <button type="submit" name="insert_dmb" class="btn btn-primary">Simpan</button>
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