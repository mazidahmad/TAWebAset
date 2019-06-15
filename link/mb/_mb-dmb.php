<div class="card"><button type="button" class="btn btn-outline-primary ml-2"> <a href="index.php?page=insert-dmb">Input Data</a> </button>
  <div class="card-header">
    <p class="card-title text-center"><strong>Daftar Mutasi Barang</strong></p>
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
      <table id="table-dmb" class="table-filtered display">
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
          $result = mysqli_query($connect, "SELECT * from MUTASI_BARANG where JENIS_MUTASI = 'DMB'");

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
                <button type="button" class="btn-xs btn-outline-primary ml-2 mb-2"><a href="index.php?page=edit-dmb&kode=<?php echo $data['ID_MUTASI']; ?>" title="Edit" style="text-decoration:none;">Edit</a></button>
                <button type="button" class="btn-xs btn-outline-danger ml-2"> <a href="link/crud.php?process=delete_dmb&kode=<?php echo $data['ID_MUTASI']; ?>">Delete</a> </button>
              </td>
            </tr>
            <?php $i++;
          } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>