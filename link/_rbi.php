<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="class col-md-4"></div>
              <div class="class col-md-4">
                <p class="card-title text-center"><strong>REKAP BUKU INVENTARIS BARANG</strong></p>
              </div>
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
              </table>
            </div>
            <div class="table table-responsive">
              <table id="table_rbi" class="display">
                <thead class="text-primary">
                  <tr>
                    <th>
                      Nomor
                    </th>
                    <th>
                      Golongan
                    </th>
                    <th>
                      Kode Bidang Barang
                    </th>
                    <th>
                      Nama Bidang Barang
                    </th>
                    <th>
                      Jumlah Barang
                    </th>
                    <th>
                      Jumlah Harga (Rp)
                    </th>
                    <th>
                      Keterangan
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <tr>
                    <td>1</td>
                    <td>01</td>
                    <td>01</td>
                    <td>Tanah</td>
                    <td>16</td>
                    <td>70099096372</td>
                    <td></td>
                  </tr> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    var table = $('#table_rbi').removeAttr('width').DataTable({
      dom: 'Bfrtip',
      buttons: [{
          extend: 'pdfHtml5',
          orientation: 'landscape',
          pageSize: 'LEGAL',
          title: 'Kartu Inventaris Barang A - Tanah',
          messageTop: 'PROVINSI\t\t\t\t\t\t\t:	JAWA BARAT \n KABUPATEN / KOTA \t	:	- \n BIDANG \t\t\t\t\t\t\t  :	BIDANG KIMPRASWIL/KE-PU-AN \n ASISTEM / OPD \t\t\t	:	Dinas Perumahan dan Pemukiman \n BIRO / UPTD / B \t\t\t	:	Sekretariat Dinas \n No. Kode Lokasi \t\t\t	:	11.10.00.05.02.00',
          exportOptions: {
            columns: [0, 1, 2, 3, 4, 5, 6]
          }

        },
        {
          extend: 'print',
          title: 'Kartu Inventaris Barang A - Tanah',
          exportOptions: {
            columns: [0, 1, 2, 3, 4, 5, 6]
          }
        }
      ],
      scrollY: "500px",
      scrollX: false,
      scrollCollapse: true,
      paging: false,
      fixedColumns: true
    });
    table.buttons().container().appendTo($('.col-sm-6:eq(0)', table.table().container()));
  });
</script>