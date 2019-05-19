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
                    
                    <form method="post" action="link/crud.php?process=insert_kib_a" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Kodefikasi Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="kode">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Tanggal Sertifikat :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="tanggal">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Nomor Register :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="noregis">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Nomor Sertifikat :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="noserti">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Nama Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Penggunaan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="pengguna">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Luas (M2) :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="luas">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Asal Usul :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="asal">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Tahun Pengadaan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="tahun">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Harga :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="harga">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Letak / Alamat :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="alamat">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Keterangan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="ket">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Hak :</label>
                                <select id="inputState" class="form-control" name="hak">
                                    <option selected>Pilih:</option>
                                    <option>Guna Bangunan</option>
                                    <option>Pakai</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 align-middle">
                                    <button type="submit" name="insert_kib_a" class="btn btn-primary">Simpan</button>
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