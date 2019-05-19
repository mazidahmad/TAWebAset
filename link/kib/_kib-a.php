<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card"> <button type="button" class="btn btn-outline-primary ml-2"> <a href="index.php?page=insert-kib-a">Input Data</a> </button>
                <div class="card-header">
                  <p class="card-title text-center"><strong>Kartu Inventaris Barang (KIB) A <br>Tanah</strong></p>
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
                        <th rowspan="3">No</th>
                        <th rowspan="3">Nama Barang</th>
                        <th colspan="2">Nomor</th>
                        <th rowspan="3">Luas(M2)</th>
                        <th rowspan="3">Tahun Pengadaan</th>
                        <th rowspan="3">Letak/Alamat</th>
                        <th colspan="3" class="text-center">Status Tanah</th>
                        <th rowspan="3">Penggunaan</th>
                        <th rowspan="3">Asal Usul</th>
                        <th rowspan="3">Harga</th>
                        <th rowspan="3">Keterangan</th>
                        <th rowspan="3">Foto</th>
                        <th rowspan="3">Lampiran File</th>
                        <th rowspan="3"></th>
                      </tr>
                      <tr>
                        <th rowspan="2">Kode Barang</th>
                        <th rowspan="2">Register</th>
                        <th rowspan="2">Hak</th>
                        <th colspan="2" class="text-center">Sertifikat</th>
                      </tr>
                      <tr>   
                        <th>Tanggal</th>
                        <th>Nomor</th>                       
                      </tr>
                    </thead>
                    <tbody>
                      <?php   
                        
                        $result = mysqli_query($connect,"SELECT * from kib_a");

                        $i = 1;    
                        while($data = mysqli_fetch_array($result)){ ?>
                                        <tr>
                                        <td class="text-center"><?php echo $i;?></td>
                                        <td class="text-center"><?php echo $data['NAMA_BARANG'];?></td>
                                        <td class="text-center"><?php echo $data['KODE_BARANG'];?></td>
                                        <td class="text-center"><?php echo $data['REGISTER'];?></td>
                                        <td class="text-center"><?php echo $data['LUAS'];?></td>
                                        <td class="text-center"><?php echo $data['TAHUN_PENGADAAN'];?></td>
                                        <td class="text-center"><?php echo $data['ALAMAT'];?></td>
                                        <td class="text-center"><?php echo $data['HAK'];?></td>
                                        <td class="text-center"><?php echo $data['SERTIFIKAT_TANGGAL'];?></td>
                                        <td class="text-center"><?php echo $data['SERTIFIKAT_NOMOR'];?></td>
                                        <td class="text-center"><?php echo $data['PENGGUNAAN'];?></td>
                                        <td class="text-center"><?php echo $data['ASAL_USUL'];?></td>
                                        <td class="text-center"><?php echo $data['HARGA'];?></td>
                                        <td class="text-center"><?php echo $data['KETERANGAN'];?></td>
                                        <td class="text-center">
                                          <img style="width:500px;" src="assets/lampiran/kib-a/<?php echo $data['FOTO'];?>" alt="">                                          
                                        </td>
                                        <td class="text-center"><a href="assets/lampiran/kib-a/<?php echo $data['FILE_NAME'];?>">Lihat Lampiran</a></td>
                                        <td>
                                          <button type="button" class="btn-xs btn-outline-primary ml-2 mb-2"><a href="index.php?page=edit-kib-a&kode=<?php echo $data['KODE_BARANG'];?>" title="Edit" style="text-decoration:none;">Edit</a></button>
                                          <button type="button" class="btn-xs btn-outline-danger ml-2"> <a href="link/crud.php?process=delete_kib_a&kode=<?php echo $data['KODE_BARANG'];?>">Delete</a> </button>
                                        </td>                                        
                                        </tr>  
                                        
                      <?php $i++;
                      } 
                      ?>                        
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>