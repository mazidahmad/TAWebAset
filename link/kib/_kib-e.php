<div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="class col-md-4"></div>
                      <div class="class col-md-4"><p class="card-title text-center"><strong>Kartu Inventaris Barang (KIB) E <br>Aset Tetap Lainnya</strong></p></div>
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
                  <table id="table_kib_e" class="table-filtered display">
                    <thead class="text-primary">
                      <tr class="text-center">
                        <th rowspan="2" class="text-center">
                          No
                        </th>
                        <th rowspan="2" class="text-center">
                         Kode Barang/Kode Akun/ID Barang/ID Awal
                        </th>
                        <th rowspan="2" class="text-center">
                          Nomor Reg
                        </th>
                        <th rowspan="2" class="text-center">
                          Nama Barang
                        </th>
                        <th colspan="2" class="text-center">
                          Buku Perpustakaan
                        </th>
                        <th colspan="3" class="text-center">
                          Barang Bercorak Kesenian / Kebudayaan
                        </th>
                        <th colspan="2" class="text-center">
                          Hewan Ternak
                        </th>
                        <th rowspan="2" class="text-center">
                          Jumlah
                        </th>
                        <th rowspan="2" class="text-center">
                          Tahun Cetak / Beli
                        </th>
                        <th rowspan="2" class="text-center">
                          Cara Perolehan / Status Barang
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
                          Judul / Pencipta
                        </th>
                        <th>
                          Spesifikasi
                        </th>
                        <th>
                          Asal Daerah
                        </th>
                        <th>
                          Pencipta
                        </th>
                        <th>
                          Bahan
                        </th>
                        <th>
                          Jenis
                        </th>
                        <th>
                          Ukuran
                        </th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                        05.17.01.01.01/1.3.5.1.1/13417/13417
                        </td>
                        <td class="text-center">
                          1
                        </td>
                        <td class="text-center">
                          Buku Ilmu Pengetahuan Umum
                        </td>
                        <td class="text-center">
                          Manajemen Bisnis
                        </td>
                        <td class="text-center">
                          -
                        </td>
                        <td>
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
                          -
                        </td>
                        <td class="text-center">
                          1
                        </td>
                        <td class="text-center">
                          2015
                        </td>
                        <td class="text-center">
                         Pembelian/Inventaris/-
                        </td>
                        <td class="text-center">
                          47.000,00
                        </td>
                        <td class="text-center">
                        - /Sekretariat Dinas SKPD: 01. Sekretariat Dinas - 001. Sekretariat Dinas"
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
              var table = $('#table_kib_e').removeAttr('width').DataTable({
                scrollY: "500px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                columnDefs: [{
                    width: 300,
                    targets: 15
                  }
                ],
                fixedColumns: true
              });
            });
          </script>