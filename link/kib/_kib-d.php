<div class="card">
                <div class="card-header">
                    <div class="row">
                      <div class="class col-md-4"></div>
                      <div class="class col-md-4"><p class="card-title text-center"><strong>Kartu Inventaris Barang (KIB) D <br>Jalan, Irigasi, dan Jaringan</strong></p></div>
                      <div class="class col-md-4"><button type="button" class="btn btn-outline-primary ml-2 float-right"> <a href="#">Input Data</a> </button></div>
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
                  <table id="table_kib_d" class="table-filtered display">
                    <thead class="text-primary">
                      <tr>
                        <th rowspan="2" class="text-center">
                          No
                        </th>
                        <th rowspan="2" class="text-center">
                          Nama Barang
                        </th>
                        <th colspan="2" class="text-center">
                          Nomor
                        </th>
                        <th rowspan="2" class="text-center">
                          Konstruksi
                        </th>
                        <th rowspan="2" class="text-center">
                          Panjang (km)
                        </th>
                        <th rowspan="2" class="text-center">
                          Lebar
                        </th>
                        <th rowspan="2" class="text-center">
                          Luas (M2)
                        </th>
                        <th rowspan="2" class="text-center">
                          Letak/Lokasi
                        </th>
                        <th colspan="2" class="text-center">
                          Dokumen
                        </th>
                        <th rowspan="2" class="text-center">
                         Status Tanah
                        </th>
                        <th rowspan="2" class="text-center">
                          Nama Kode Tanah
                        </th>
                        <th rowspan="2" class="text-center">
                          Nomor Kode Tanah
                        </th>
                        <th rowspan="2" class="text-center">
                          Asal Usul
                        </th>
                        <th rowspan="2" class="text-center">
                          Harga
                        </th>
                        <th rowspan="2" class="text-center">
                          Kondisi (B,KB,RB)
                        </th>
                        <th rowspan="2" class="text-center">
                          Keterangan
                        </th>
                        <th rowspan="2"></th>
                      </tr>
                      <tr class="text-center">
                        <th>
                          Kode Barang
                        </th>
                        <th>
                          Register
                        </th>
                        <th>
                          Tanggal
                        </th>
                        <th>
                          Nomor
                        </th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          Jaringan Rumah Tangga (Jarut)
                        </td>
                        <td class="text-center">
                          04.15.01.05.02
                        </td>
                        <td class="text-center">
                          7
                        </td>
                        <td class="text-center">
                          PIPA BESI
                        </td>
                        <td class="text-center">
                          20
                        </td>
                        <td>
                          8
                        </td>
                        <td class="text-center">
                          5000
                        </td>
                        <td class="text-center">
                          MULYASARI
                          Kel. MULYASARI
                          Kec. LOSARI
                        </td>
                        <td class="text-center">
                          2008
                        </td>
                        <td class="text-center">
                          -
                        </td>
                        <td class="text-center">
                          -
                        </td>
                        <td class="text-center">
                          -
                        </td>
                        <td class="text-center">
                          -
                        </td>
                        <td class="text-center">
                          "Pembelian
                          /Inventaris/
                          "
                        </td>
                        <td class="text-center">
                          420.127.400,00
                        </td>
                        <td class="text-center">
                          B
                        </td>
                        <td class="text-center">
                          Dikelola oleh PDAM Kabupaten Cirebon dan Akan segera Dihibahkan /
                          Sekretariat Dinas SKPD: 01. Sekretariat Dinas - 001. Sekretariat Dinas
                        </td>
                        <td>
                          <button type="button" class="btn-xs btn-outline-primary ml-2 mb-2"><a href="#" title="Edit" style="text-decoration:none;">Edit</a></button>
                          <button type="button" class="btn-xs btn-outline-danger ml-2"> <a href="#">Delete</a> </button>
                        </td>  
                      </tr>                                           
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <script>
              $(document).ready(function() {
                var table = $('#table_kib_d').removeAttr('width').DataTable({
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
                      targets: 8
                    },{
                      width: 300,
                      targets: 17
                    }
                  ],
                  fixedColumns: true
                });
                table.buttons().container().appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
              });
            </script>