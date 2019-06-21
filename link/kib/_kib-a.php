<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                      <div class="class col-md-4"></div>
                      <div class="class col-md-4"><p class="card-title text-center"><strong>Kartu Inventaris Barang (KIB) A <br>Tanah</strong></p></div>
                      <div class="class col-md-4"><button type="button" class="btn btn-outline-primary ml-2 float-right"> <a href="index.php?page=insert-kib-a">Input Data</a> </button></div>
                    </div>
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
                  <table id="table_kib_a" class="display">
                    <thead class="text-primary">
                      <tr class="text-center">
                        <th rowspan="3">No</th>
                        <th rowspan="3">Nama Barang</th>
                        <th colspan="2">Nomor</th>
                        <th rowspan="3">Luas(M2)</th>
                        <th rowspan="3">Tahun Pengadaan</th>
                        <th rowspan="3">Letak/Alamat</th>
                        <th colspan="3">Status Tanah</th>
                        <th rowspan="3">Penggunaan</th>
                        <th rowspan="3">Asal Usul</th>
                        <th rowspan="3">Harga</th>
                        <th rowspan="3">Keterangan</th>
                        <th rowspan="3">Foto</th>
                        <th rowspan="3">Lampiran File</th>
                        <th rowspan="3"></th>
                      </tr>
                      <tr class="text-center">
                        <th rowspan="2">Kode Barang</th>
                        <th rowspan="2">Register</th>
                        <th rowspan="2">Hak</th>
                        <th colspan="2">Sertifikat</th>
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
                                        <tr class="text-center">
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $data['NAMA_BARANG'];?></td>
                                        <td><?php echo $data['KODE_BARANG'];?></td>
                                        <td><?php echo $data['REGISTER'];?></td>
                                        <td><?php echo $data['LUAS'];?></td>
                                        <td><?php echo $data['TAHUN_PENGADAAN'];?></td>
                                        <td><?php echo $data['ALAMAT'];?></td>
                                        <td><?php echo $data['HAK'];?></td>
                                        <td><?php echo $data['SERTIFIKAT_TANGGAL'];?></td>
                                        <td><?php echo $data['SERTIFIKAT_NOMOR'];?></td>
                                        <td><?php echo $data['PENGGUNAAN'];?></td>
                                        <td><?php echo $data['ASAL_USUL'];?></td>
                                        <td><?php echo $data['HARGA'];?></td>
                                        <td><?php echo $data['KETERANGAN'];?></td>
                                        <td>
                                          <img id="imgzoom-<?php echo $i; ?>" style="width:500px;" class="imgZoom" src="assets/lampiran/kib-a/<?php echo $data['FOTO'];?>" alt="" onClick="zoomImage(this.id)">                                          
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
      <script>
        $(document).ready(function() {
          var table = $('#table_kib_a').removeAttr('width').DataTable({
            dom: 'Bfrtip',
            buttons: [ 
              {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                title: 'Kartu Inventaris Barang A - Tanah',
                messageTop: 'PROVINSI\t\t\t\t\t\t\t:	JAWA BARAT \n KABUPATEN / KOTA \t	:	- \n BIDANG \t\t\t\t\t\t\t  :	BIDANG KIMPRASWIL/KE-PU-AN \n ASISTEM / OPD \t\t\t	:	Dinas Perumahan dan Pemukiman \n BIRO / UPTD / B \t\t\t	:	Sekretariat Dinas \n No. Kode Lokasi \t\t\t	:	11.10.00.05.02.00',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9,10,11,12,13]
                }
                
              },
              {
                  extend: 'print',
                  title: 'Kartu Inventaris Barang A - Tanah',
                  exportOptions: {
                      columns: [ 0,1,2,3,4,5,6,7,8,9,10,11,12,13]
                  }
              }
            ],
            scrollY: "500px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            columnDefs: [{
                width: 300,
                targets: 6
              }
            ],
            fixedColumns: true,            
          });
          table.buttons().container().appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
        });
      </script>