<div class="card">
<div class="card-header">
                    <div class="row">
                      <div class="class col-md-4"></div>
                      <div class="class col-md-4"><p class="card-title text-center"><strong>Kartu Inventaris Barang (KIB) B <br>Peralatan dan Mesin</strong></p></div>
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
                  <table id="table_kib_b" class="table-filtered display">
                    <thead class="text-primary">
                      <tr class="text-center">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Kode Barang</th>
                        <th rowspan="2">Nama Barang</th>
                        <th rowspan="2">Nomor Register</th>
                        <th rowspan="2">Merk/Type</th>
                        <th rowspan="2">Ukuran/CC</th>
                        <th rowspan="2">Bahan</th>
                        <th rowspan="2">Tahun Perolehan</th>
                        <th colspan="5">Nomor</th>
                        <th rowspan="2">Asal Usul Cara Perolehan</th>
                        <th rowspan="2">Harga</th>
                        <th rowspan="2">Keterangan</th>
                        <th rowspan="3"></th>
                      </tr>
                      <tr class="text-center">
                        <th>Pabrik</th>
                        <th>Rangka</th>
                        <th>Mesin</th>
                        <th>Polisi</th>
                        <th>BPKB</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <tr>
                        <td>1</td>
                        <td>02.02.08.06.01</td>
                        <td class="text-center">Mesin Bor Batu</td>
                        <td class="text-center">1</td>
                        <td class="text-center">ISUZU ELF TRUCK</td>
                        <td class="text-center">4,57</td>
                        <td>BESI</td>
                        <td class="text-center">2010</td>
                        <td class="text-center">ISUZU</td>
                        <td class="text-center">MHCNK71LYAJ020035</td>
                        <td class="text-center">B020035</td>
                        <td>D 8565 C</td>
                        <td class="text-center">H-08139654</td>
                        <td class="text-center">Pembelian/Inventaris/</td>
                        <td class="text-center">674.965.800,00</td>
                        <td class="text-center">-</td>
                        <td>
                          <button type="button" class="btn-xs btn-outline-primary ml-2 mb-2"><a href="#" title="Edit" style="text-decoration:none;">Edit</a></button>
                          <button type="button" class="btn-xs btn-outline-danger ml-2"> <a href="#">Delete</a> </button>
                        </td>  
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>02.03.01.01.01 464196
                        </td>
                        <td class="text-center">Sedan</td>
                        <td class="text-center">1</td>
                        <td class="text-center">HONDA CITY</td>
                        <td class="text-center">-</td>
                        <td>BESI</td>
                        <td class="text-center">2010</td>
                        <td class="text-center">HONDA</td>
                        <td class="text-center">MRHGM26604P020433</td>
                        <td class="text-center">L15472803348</td>
                        <td>D 1516 F</td>
                        <td class="text-center">H-02161953</td>
                        <td class="text-center">Pembelian/Inventaris</td>
                        <td class="text-center">262.500.000,00</td>
                        <td class="text-center">-</td>
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
          var table = $('#table_kib_b').removeAttr('width').DataTable({
            scrollY: "500px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            columnDefs: [{
                width: 300,
                targets: 6
              }
            ],
            fixedColumns: true
          });
        });
      </script>