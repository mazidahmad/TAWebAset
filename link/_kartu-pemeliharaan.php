<div class="panel-header panel-header-sm">
    <!-- <img src="../assets/img/header/bg-inventory.jpg" alt="bg-inventory" width="100%"> -->
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="class col-md-4"></div>
                            <div class="class col-md-4"><p class="card-title text-center"><strong>Daftar Kartu Pemeliharaan</strong></p></div>
                            <div class="class col-md-4"><button type="button" class="btn btn-outline-primary ml-2 float-right"> <a href="index.php?page=kartu-pemeliharaan-input">Input Data</a> </button></div>
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
                            <table id="table_kartupemeliharaan" class="display">
                                <thead class="text-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>KODE_BARANG</th>
                                        <th>NO_REGISTER</th>
                                        <th>NAMA_BARANG</th>
                                        <th>JENIS_PEMELIHARAAN</th>
                                        <th>YANG_MEMELIHARA</th>
                                        <th>TANGGAL_PEMELIHARAAN</th>
                                        <th>BIAYA_PEMELIHARAAN</th>
                                        <th>BUKTI_PEMELIHARAAN</th>
                                        <th>NOMOR_SPK</th>
                                        <th>TANGGAL_SPK</th>
                                        <th>NOMOR_BAST</th>
                                        <th>TANGGAL_BAST</th>
                                        <th>FOTO_ASET</th>
                                        <th>FILE_ASET</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "connect.php";

                                    $result = mysqli_query($connect, "SELECT * FROM KARTU_PEMELIHARAAN ");

                                    $i = 1;
                                    while ($data = mysqli_fetch_array($result)) { ?>
                                        <tr>
                                            <td class="text-center"><?php echo $i; ?></td>
                                            <td class="text-center"><?php echo $data['KODE_BARANG']; ?></td>
                                            <td class="text-center"><?php echo $data['NO_REGISTER']; ?></td>
                                            <td class="text-center"><?php echo $data['NAMA_BARANG']; ?></td>
                                            <td class="text-center"><?php echo $data['JENIS_PEMELIHARAAN']; ?></td>
                                            <td class="text-center"><?php echo $data['YANG_MEMELIHARA']; ?></td>
                                            <td class="text-center"><?php echo $data['TANGGAL_PEMELIHARAAN']; ?></td>
                                            <td class="text-center"><?php echo $data['BIAYA_PEMELIHARAAN']; ?></td>
                                            <td class="text-center"><?php echo $data['BUKTI_PEMELIHARAAN']; ?></td>
                                            <td class="text-center"><?php echo $data['NOMOR_SPK']; ?></td>
                                            <td class="text-center"><?php echo $data['TANGGAL_SPK']; ?></td>
                                            <td class="text-center"><?php echo $data['NOMOR_BAST']; ?></td>
                                            <td class="text-center"><?php echo $data['TANGGAL_BAST']; ?></td>
                                            <td class="text-center">
                                                <img style="width:500px;" src="assets/lampiran/kartu-pemeliharaan/<?php echo $data['FOTO_ASET']; ?>">
                                            </td>
                                            <td class="text-center">
                                                <a href="assets/lampiran/kartu-pemeliharaan/<?php echo $data['FILE_ASET']; ?>">Lihat Lampiran</a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn-xs btn-outline-primary ml-2 mb-2"><a href="index.php?page=kartu-pemeliharaan-edit&ID_KARTU=<?php echo $data['ID_KARTU']; ?>" title="Edit" style="text-decoration:none;">Edit</a></button>
                                                <button type="button" class="btn-xs btn-outline-danger ml-2"> <a href="link/crud.php?process=delete_kartu_pemeliharaan&ID_KARTU=<?php echo $data['ID_KARTU']; ?>">Delete</a> </button>
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
    <script>
              $(document).ready(function() {
                var table = $('#table_kartupemeliharaan').removeAttr('width').DataTable({
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