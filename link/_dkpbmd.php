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
                            <div class="class col-md-4"><p class="card-title text-center"><strong>Daftar Kebutuhan Pemeliharaan Barang Milik Daerah</strong></p></div>
                            <div class="class col-md-4"><button type="button" class="btn btn-outline-primary ml-2 float-right"> <a href="index.php?page=dkpbmd-input">Input Data</a> </button></div>
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
                            <table id="table_dkpbmd" class="display">
                                <thead class="text-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>NAMA_BARANG</th>
                                        <th>NO_REGISTER</th>
                                        <th>TAHUN_PEROLEHAN</th>
                                        <th>TAHUN_ANGGARAN</th>
                                        <th>JENIS_PEMELIHARAAN</th>
                                        <th>URAIAN_PEMELIHARAAN</th>
                                        <th>JUMLAH_BARANG</th>
                                        <th>HARGA_SATUAN</th>
                                        <th>JUMLAH_HARGA</th>
                                        <th>KODE_REKENING</th>
                                        <th>KETERANGAN</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "connect.php";

                                    $result = mysqli_query($connect, "SELECT * FROM DKPBMD");

                                    $i = 1;
                                    while ($data = mysqli_fetch_array($result)) { ?>
                                        <tr>
                                            <td class="text-center"><?php echo $i; ?></td>
                                            <td class="text-center"><?php echo $data['NAMA_BARANG']; ?></td>
                                            <td class="text-center"><?php echo $data['NO_REGISTER']; ?></td>
                                            <td class="text-center"><?php echo $data['TAHUN_PEROLEHAN']; ?></td>
                                            <td class="text-center"><?php echo $data['TAHUN_ANGGARAN']; ?></td>
                                            <td class="text-center"><?php echo $data['JENIS_PEMELIHARAAN']; ?></td>
                                            <td class="text-center"><?php echo $data['URAIAN_PEMELIHARAAN']; ?></td>
                                            <td class="text-center"><?php echo $data['JUMLAH_BARANG']; ?></td>
                                            <td class="text-center"><?php echo $data['HARGA_SATUAN']; ?></td>
                                            <td class="text-center"><?php echo $data['JUMLAH_HARGA']; ?></td>
                                            <td class="text-center"><?php echo $data['KODE_REKENING']; ?></td>
                                            <td class="text-center"><?php echo $data['KETERANGAN']; ?></td>
                                            <td>
                                                <button type="button" class="btn-xs btn-outline-primary ml-2 mb-2"><a href="index.php?page=dkpbmd-edit&ID_DKPBMD=<?php echo $data['ID_DKPBMD']; ?>" title="Edit" style="text-decoration:none;">Edit</a></button>
                                                <button type="button" class="btn-xs btn-outline-danger ml-2"> <a href="link/crud.php?process=delete_dkpbmd&ID_DKPBMD=<?php echo $data['ID_DKPBMD']; ?>">Delete</a> </button>
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
                var table = $('#table_dkpbmd').removeAttr('width').DataTable({
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