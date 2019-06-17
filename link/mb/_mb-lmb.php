<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="class col-md-4"></div>
      <div class="class col-md-4"><p class="card-title text-center"><p class="card-title text-center"><strong>BUKU INVENTARIS BARANG</strong></p></div>
      <div class="class col-md-4"><button type="button" class="btn btn-outline-primary ml-2 float-right"> <a href="index.php?page=insert-lmb">Input Data</a> </button></div>
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
      <table id="table_lmb" class="display">
        <thead class="text-primary ">
          <tr>
            <th colspan="3" class="text-center">
              No
            </th>
            <th colspan="4" class="text-center">
              Spesifikasi Barang
            </th>
            <th rowspan="3">
              Asal / Cara Perolehan Barang
            </th>
            <th rowspan="3">
              Tahun Perolehan
            </th>
            <th rowspan="3">
              Ukuran Barang / Konstruksi (P,SP,D)
            </th>
            <th rowspan="3">
              Satuan
            </th>
            <th rowspan="3">
              Kondisi (B,RR,RB)
            </th>
            <th colspan="2" class="text-center">
              Jumlah Awal
            </th>
            <th colspan="4" class="text-center">
              Mutasi / Perubahan
            </th>
            <th colspan="2" class="text-center">
              Jumlah(Akhir)
            </th>
            <th rowspan="3">
              Keterangan
            </th>
            <th rowspan="3"></th>
          </tr>
          <tr>
            <th rowspan="2">
              No. Urut
            </th>
            <th rowspan="2">
              Kode Barang
            </th>
            <th rowspan="2">
              Register
            </th>
            <th rowspan="2">
              Nama Barang
            </th>
            <th rowspan="2">
              Merk / Tipe
            </th>
            <th rowspan="2">
              No. Sertifikat / No. Pabrik / No. Chasis / No. Mesin
            </th>
            <th rowspan="2">
              Bahan
            </th>
            <th rowspan="2">
              Barang
            </th>
            <th rowspan="2">
              Harga
            </th>
            <th colspan="2" class="text-center">
              Berkurang
            </th>
            <th colspan="2" class="text-center">
              Bertambah
            </th>
            <th rowspan="2">
              Barang
            </th>
            <th rowspan="2">
              Harga
            </th>
          </tr>
          <tr>
            <th>
              Jumlah Barang
            </th>
            <th>
              Jumlah Harga
            </th>
            <th>
              Jumlah Barang
            </th>
            <th>
              Jumlah Harga
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $result = mysqli_query($connect, "SELECT * from MUTASI_BARANG where JENIS_MUTASI = 'LMB'");

          $i = 1;
          while ($data = mysqli_fetch_array($result)) { ?>
            <tr>
              <td><?= $i; ?></td>
              <td><?= $data['NOMOR_KODE_BARANG']; ?></td>
              <td><?= $data['NOMOR_REGISTER']; ?></td>
              <td><?= $data['NAMA_BARANG']; ?></td>
              <td><?= $data['MERK_TIPE']; ?></td>
              <td><?= $data['NO_SERTIFIKAT']; ?></td>
              <td><?= $data['BAHAN']; ?></td>
              <td><?= $data['ASAL']; ?></td>
              <td><?= $data['TAHUN_PEROLEHAN']; ?></td>
              <td><?= $data['UKURAN_BARANG']; ?></td>
              <td><?= $data['SATUAN']; ?></td>
              <td><?= $data['KONDISI']; ?></td>
              <td><?= $data['JUMLAH_BARANG']; ?></td>
              <td><?= $data['JUMLAH_HARGA']; ?></td>
              <td><?= $data['JUMLAH_BARANG_BERKURANG']; ?></td>
              <td><?= $data['JUMLAH_HARGA_BERKURANG']; ?></td>
              <td><?= $data['JUMLAH_BARANG_BERTAMBAH']; ?></td>
              <td><?= $data['JUMLAH_HARGA_BERTAMBAH']; ?></td>
              <td><?= $data['JUMLAH_BARANG_AKHIR']; ?></td>
              <td><?= $data['JUMLAH_HARGA_AKHIR']; ?></td>
              <td><?= $data['KETERANGAN']; ?></td>
              <td>
                <button type="button" class="btn-xs btn-outline-primary ml-2 mb-2"><a href="index.php?page=edit-lmb&kode=<?php echo $data['ID_MUTASI']; ?>" title="Edit" style="text-decoration:none;">Edit</a></button>
                <button type="button" class="btn-xs btn-outline-danger ml-2"> <a href="link/crud.php?process=delete_lmb&kode=<?php echo $data['ID_MUTASI']; ?>">Delete</a> </button>
              </td>
            </tr>
            <?php $i++;
          } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script>
              $(document).ready(function() {
                var table = $('#table_lmb').removeAttr('width').DataTable({
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
                  fixedColumns: true
                });
                table.buttons().container().appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
              });
            </script>