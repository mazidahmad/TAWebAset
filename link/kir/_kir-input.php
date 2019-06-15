      <div class="panel-header panel-header-sm">
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
                                  <form method="post" action="link/crud.php?process=insert_kir" enctype="multipart/form-data">
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label for="formGroupExampleInput2">Kode Barang - Nama Barang</label>
                                              <select name="kode" class="form-control" id="formGroupExampleInput2">
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
                                          <div class="form-group col-md-6">
                                              <label for="formGroupExampleInput2">Jumlah Barang / Register :</label>
                                              <input type="number" class="form-control" id="formGroupExampleInput2" name="jumlah">
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label for="formGroupExampleInput2">Merk/Model :</label>
                                              <input type="text" class="form-control" id="formGroupExampleInput2" name="merk">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label for="formGroupExampleInput">Harga Beli / Perolehan (Rp) :</label>
                                              <input type="number" class="form-control" id="formGroupExampleInput" name="harga">
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label for="formGroupExampleInput">No. Seri Pabrik :</label>
                                              <input type="text" class="form-control" id="formGroupExampleInput" name="noseri">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label for="formGroupExampleInput2">Keadaan Barang (BAIK) :</label>
                                              <input type="text" class="form-control" id="formGroupExampleInput2" name="baik">
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label for="formGroupExampleInput2">Ukuran :</label>
                                              <input type="text" class="form-control" id="formGroupExampleInput2" name="ukuran">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label for="formGroupExampleInput">Keadaan Barang (KURANG BAIK) :</label>
                                              <input type="text" class="form-control" id="formGroupExampleInput" name="kurang">
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label for="formGroupExampleInput">Bahan :</label>
                                              <input type="text" class="form-control" id="formGroupExampleInput" name="bahan">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label for="formGroupExampleInput2">Keadaan Barang (RUSAK BERAT) :</label>
                                              <input type="text" class="form-control" id="formGroupExampleInput2" name="rusak">
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label for="formGroupExampleInput2">Tahun Pembuatan / Pembelian :</label>
                                              <input type="text" class="form-control" id="formGroupExampleInput2" name="tahun">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label for="formGroupExampleInput2">Keterangan Mutasi DII :</label>
                                              <input type="text" class="form-control" id="formGroupExampleInput2" name="ket">
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6 align-middle">
                                              <button type="submit" name="insert_kir" class="btn btn-primary">Simpan</button>
                                              <a class="btn btn-secondary" href="index.php?page=kir">Batal</a>
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