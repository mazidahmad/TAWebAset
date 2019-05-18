      <div class="panel-header panel-header-lg">
        <img src="../assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="card"> <button type="button" class="btn btn-outline-primary ml-2"> <a href="index.php?page=insert-kir">Input Data</a> </button>
            <div class="card">
              <div class="card-header" >
                <p class="card-title text-center"><strong>Kartu Inventaris Ruangan</strong></p>
              </div>
              <div class="card-body" style="font-size:8pt;">                
                <div class="row">
                <table class="ml-4 mb-4" width="80%">
                      <tr>
                        <td width="13%">PROVINSI</td>
                        <td width="2%"> : </td>
                        <td>JAWA BARAT</td>
                      </tr>
                      <tr>
                        <td>KABUPATEN / KOTA </td>
                        <td> : </td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>BIDANG</td>
                        <td> : </td>
                        <td> BIDANG KIMPRASWIL/KE-PU-AN</td>
                      </tr>
                      <tr>
                        <td>ASISTEM / OPD </td>
                        <td> : </td>
                        <td> Dinas Perumahan dan Pemukiman</td>
                      </tr>
                      <tr>
                        <td>BIRO / UPTD / B </td>
                        <td> : </td>
                        <td> Sekretariat Dinas</td>
                      </tr>
                      <tr>
                        <td>No. Kode Lokasi </td>
                        <td> : </td>
                        <td> 11.10.00.05.02.00</td>
                      </tr>
                      </table>
                </div>              
                <div class="table table-responsive">
                  <table id="table_id" class="display">
                    <thead class="text-primary">
                      <tr>
                        <th rowspan="2">
                          No
                        </th>
                        <th rowspan="2">
                          Nama Barang
                        </th>
                        <th rowspan="2">
                          Merk/Model
                        </th>
                        <th rowspan="2">
                          No. Seri Pabrik
                        </th>
                        <th rowspan="2">
                          Ukuran
                        </th>
                        <th rowspan="2">
                          Bahan
                        </th>
                        <th rowspan="2" class="text-center">
                          Tahun Pembuatan/Pembelian
                        </th>
                        <th rowspan="2">
                          Nomor Kode Barang
                        </th>
                        <th rowspan="2">
                          Jumlah Barang/Register
                        </th>
                        <th rowspan="2">
                          Harga Beli/Perolehan
                        </th>
                        <th colspan="3">
                          Keadaan Barang
                        </th>
                        <th rowspan="2">
                          Keterangan
                        </th>
                        <th rowspan="2">
                        </th>
                      </tr>
                      <tr>
                        <th>
                          Baik
                        </th>
                        <th>
                          Kurang Baik
                        </th>
                        <th>
                          Rusak Berat
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php   
                        include "connect.php";
                        
                        $result = mysqli_query($connect,"SELECT * from kir");

                        $i = 1;    
                        while($data = mysqli_fetch_array($result)){ ?>
                                        <tr>
                                        <td class="text-center"><?php echo $i;?></td>
                                        <td class="text-center"><?php echo $data['NAMA_BARANG'];?></td>
                                        <td class="text-center"><?php echo $data['MERK'];?></td>
                                        <td class="text-center"><?php echo $data['NO_SERI'];?></td>
                                        <td class="text-center"><?php echo $data['UKURAN'];?></td>
                                        <td class="text-center"><?php echo $data['BAHAN'];?></td>
                                        <td class="text-center"><?php echo $data['TAHUN'];?></td>
                                        <td class="text-center"><?php echo $data['NO_KODE'];?></td>
                                        <td class="text-center"><?php echo $data['JUMLAH'];?></td>
                                        <td class="text-center"><?php echo $data['HARGA'];?></td>
                                        <td class="text-center"><?php echo $data['BAIK'];?></td>
                                        <td class="text-center"><?php echo $data['KURANG_BAIK'];?></td>
                                        <td class="text-center"><?php echo $data['RUSAK_BERAT'];?></td>
                                        <td class="text-center"><?php echo $data['KETERANGAN'];?></td>
                                        <td>
                                          <button type="button" class="btn-xs btn-outline-primary ml-2 mb-2"><a href="index.php?page=edit-kir&kode=<?php echo $data['NO_KODE'];?>" title="Edit" style="text-decoration:none;">Edit</a></button>
                                          <button type="button" class="btn-xs btn-outline-danger ml-2"> <a href="link/crud.php?process=delete_kir&kode=<?php echo $data['NO_KODE'];?>">Delete</a> </button>
                                        </td>                                        
                                        </tr>  
                                        
                      <?php $i++;
                      } ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>