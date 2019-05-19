<div class="panel-header panel-header-lg">
    <img src="assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%">
</div>
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <p class="card-title text-center"><strong>Input Buku Inventaris Barang</strong></p>
              </div>
              <div class="card-body">                
                <div class="row">
                    <div class="col-md-12">
                    
                    <form method="post" action="link/crud.php?process=insert_bi" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Kodefikasi Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="kode">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Tahun Perolehan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="tahun">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Register :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="register">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Ukuran Barang / Konstruksi (P,SP,D) :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="ukuran">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Nama Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Keadaan Barang (B,KB,RB) :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="keadaan">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Merk / Tipe :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="merk">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="barang">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput">No. Sertifikat / No. Pabrik / No. Chasis / No. Mesin / No. Polisi :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="noserti">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Harga :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="harga">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Bahan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="bahan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Keterangan :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="ket">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2">Asal/ Cara Perolehan Barang :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="asal">
                            </div>
                            <div class="form-group col-md-6 align-middle">
                                    <button type="submit" name="insert_bi" class="btn btn-primary">Simpan</button>
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