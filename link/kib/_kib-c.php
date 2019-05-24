<div class="card">
<div class="card-header">
                    <div class="row">
                      <div class="class col-md-4"></div>
                      <div class="class col-md-4"><p class="card-title text-center"><strong>Kartu Inventaris Barang (KIB) C <br>Gedung dan Bangunan</strong></p></div>
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
                  <table id="table_kib_c" class="table-filtered display">
                    <thead class="text-primary">
                      <tr class="text-center">
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
                          Kondisi Bangunan (B,KB,RB)
                        </th>
                        <th colspan="2" class="text-center">
                          Kontruksi Bangunan
                        </th>
                        <th rowspan="2" class="text-center">
                          Luas Lantai (M2)
                        </th>
                        <th rowspan="2" class="text-center">
                          Letak/Lokasi Alamat
                        </th>
                        <th colspan="2" class="text-center">
                          Dokumen Gedung
                        </th>
                        <th rowspan="2" class="text-center">
                         Luas Tanah (M2)
                        </th>
                        <th rowspan="2" class="text-center">
                          Status Tanah
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
                          Keterangan
                        </th>
                        <th rowspan="3"></th>
                      </tr>
                      <tr class="text-center">
                        <th>
                          Kode Barang
                        </th>
                        <th>
                          Register
                        </th>
                        <th>
                          Bertingkat/Tidak
                        </th>
                        <th>
                          Beton/Tidak
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
                          Bangunan Gedung Kantor Lain-lain
                        </td>
                        <td class="text-center">
                          03.11.01.01.04
                        </td>
                        <td class="text-center">
                          16
                        </td>
                        <td class="text-center">
                          Baik
                        </td>
                        <td class="text-center">
                          Tidak
                        </td>
                        <td>
                          Tidak
                        </td>
                        <td class="text-center">
                          24,00
                        </td>
                        <td class="text-center">
                          "Desa Sarimukti
                          Kel. Sarimukti
                          Kec. Cipatat
                          Kabupaten Bandung Barat"
                        </td>
                        <td class="text-center">
                        16-09-1999
                        </td>
                        <td class="text-center">
                          HP No.53
                        </td>
                        <td>
                          15.270,00
                        </td>
                        <td class="text-center">
                          Milik PEMDA/-
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
                          24.500.000,00
                        </td>
                        <td class="text-center">
                          -
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
                var table = $('#table_kib_c').removeAttr('width').DataTable({
                  scrollY: "500px",
                  scrollX: true,
                  scrollCollapse: true,
                  paging: false,
                  fixedColumns: true
                });
              });
            </script>