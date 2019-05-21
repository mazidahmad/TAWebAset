<?php
				include 'connect.php';

				function insert_kib_a($connect){
					if (isset($_POST['insert_kib_a'])){
						$kode            = $_POST['kode'];
						$tanggal           = $_POST['tanggal'];
						$noregis        = $_POST['noregis'];
						$noserti        = $_POST['noserti'];
						$nama           = $_POST['nama'];
						$pengguna        = $_POST['pengguna'];
						$hak        = $_POST['hak'];
						$asal        = $_POST['asal'];
						$luas        = $_POST['luas'];
						$tahun           = $_POST['tahun'];
						$harga        = $_POST['harga'];
						$alamat           = $_POST['alamat'];
						$ket        = $_POST['ket'];
						$fototmp = $_FILES['foto']['tmp_name'];
						$filetmp = $_FILES['filename']['tmp_name'];

						$path1 = "../assets/lampiran/kib-a/".$kode."-FOTO-".date("dmy").".jpg";
						$path2 = "../assets/lampiran/kib-a/".$kode."-FILE-".date("dmy").".pdf";

						$nfoto = $kode."-FOTO-".date("dmy").".jpg";
						$nfile = $kode."-FILE-".date("dmy").".pdf";

						if(!empty($kode) && !empty($tanggal) && !empty($noregis) && !empty($noserti) && !empty($nama)
						&& !empty($pengguna) && !empty($hak) && !empty($asal) && !empty($luas) && !empty($tahun)
						&& !empty($harga) && !empty($alamat) && !empty($ket)){
								if(move_uploaded_file($fototmp, $path1) && move_uploaded_file($filetmp, $path2)){
									$query = "INSERT INTO kib_a SET kode_barang='$kode',nama_barang='$nama',register='$noregis',luas='$luas', tahun_pengadaan='$tahun',alamat='$alamat', hak='$hak', sertifikat_tanggal='$tanggal',sertifikat_nomor='$noserti', penggunaan='$pengguna', asal_usul='$asal', harga='$harga', keterangan='$ket', foto='$nfoto', file_name='$nfile'";
									$sql = mysqli_query($connect, $query);
									if($sql && isset($_GET['process'])){
											if($_GET['process'] == 'insert_kib_a'){
												header("location:../index.php?page=kib");
											}
									}
								} else {
										echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
										echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
								}
							} else {
									$pesan = "Tidak dapat menyimpan, data belum lengkap!";
							}
					}
				}

				function update_kib_a($connect){
					if(isset($_POST['update_kib_a'])){
							$kode            = $_POST['kode'];
							$tanggal           = $_POST['tanggal'];
							$noregis        = $_POST['noregis'];
							$noserti        = $_POST['noserti'];
							$nama           = $_POST['nama'];
							$pengguna        = $_POST['pengguna'];
							$hak        = $_POST['hak'];
							$asal        = $_POST['asal'];
							$luas        = $_POST['luas'];
							$tahun           = $_POST['tahun'];
							$harga        = $_POST['harga'];
							$alamat           = $_POST['alamat'];
							$ket        = $_POST['ket'];

							if(!empty($kode) && !empty($tanggal) && !empty($noregis) && !empty($noserti) && !empty($nama)
							&& !empty($pengguna) && !empty($hak) && !empty($asal) && !empty($luas) && !empty($tahun)
							&& !empty($harga) && !empty($alamat) && !empty($ket)){
								$query = "UPDATE kib_a SET nama_barang='$nama',register='$noregis',luas='$luas', tahun_pengadaan='$tahun',alamat='$alamat', hak='$hak', sertifikat_tanggal='$tanggal',sertifikat_nomor='$noserti', penggunaan='$pengguna', asal_usul='$asal', harga='$harga', keterangan='$ket' WHERE kode_barang='$kode'";
									$update = mysqli_query($connect, $query);
									if($update && isset($_GET['process'])){
											if($_GET['process'] == 'update_kib_a'){
													header('location: ../index.php?page=kib');
											}
									}
							} else {
									$pesan = "Data tidak lengkap!";
							}
					}
				}

				function delete_kib_a($connect){
					if(isset($_GET['kode']) && isset($_GET['process'])){
							$kode = $_GET['kode'];
							$query = "DELETE FROM kib_a WHERE kode_barang='$kode'";
							$delete = mysqli_query($connect, $query);
							if($delete){
									if($_GET['process'] == 'delete_kib_a'){
											header('location: ../index.php?page=kib');
									}
							}
					}
				}

				function insert_kir($connect){
					if (isset($_POST['insert_kir'])){
						$kode		= $_POST['kode'];
						$nama   = $_POST['nama'];
						$merk   = $_POST['merk'];
						$noseri = $_POST['noseri'];
						$ukuran = $_POST['ukuran'];
						$bahan  = $_POST['bahan'];
						$tahun  = $_POST['tahun'];
						$jumlah = $_POST['jumlah'];
						$harga  = $_POST['harga'];
						$baik   = $_POST['baik'];
						$kurang = $_POST['kurang'];
						$rusak  = $_POST['rusak'];
						$ket    = $_POST['ket'];

						if(!empty($kode) && !empty($nama) && !empty($merk) && !empty($noseri) && !empty($ukuran)
						&& !empty($bahan) && !empty($tahun) && !empty($jumlah) && !empty($harga) && !empty($baik)
						&& !empty($kurang) && !empty($rusak) && !empty($ket)){
									$query = "INSERT INTO kir SET no_kode='$kode',nama_barang='$nama',merk='$merk',no_seri='$noseri', ukuran='$ukuran',bahan='$bahan', tahun='$tahun', jumlah='$jumlah', harga='$harga',baik='$baik', kurang_baik='$kurang', rusak_berat='$rusak', keterangan='$ket'";
									$sql = mysqli_query($connect, $query);
									if($sql && isset($_GET['process'])){
											if($_GET['process'] == 'insert_kir'){
												header("location:../index.php?page=kir");
											}
									}
							} else {
									$pesan = "Tidak dapat menyimpan, data belum lengkap!";
							}
					}
				}

				function update_kir($connect){
					if(isset($_POST['update_kir'])){
							$kode		= $_POST['kode'];
							$nama   = $_POST['nama'];
							$merk   = $_POST['merk'];
							$noseri = $_POST['noseri'];
							$ukuran = $_POST['ukuran'];
							$bahan  = $_POST['bahan'];
							$tahun  = $_POST['tahun'];
							$jumlah = $_POST['jumlah'];
							$harga  = $_POST['harga'];
							$baik   = $_POST['baik'];
							$kurang = $_POST['kurang'];
							$rusak  = $_POST['rusak'];
							$ket    = $_POST['ket'];

							if(!empty($kode) && !empty($nama) && !empty($merk) && !empty($noseri) && !empty($ukuran)
							&& !empty($bahan) && !empty($tahun) && !empty($jumlah) && !empty($harga) && !empty($baik)
							&& !empty($kurang) && !empty($rusak) && !empty($ket)){
								$query = "UPDATE kir SET nama_barang='$nama',merk='$merk',no_seri='$noseri', ukuran='$ukuran',bahan='$bahan', tahun='$tahun', jumlah='$jumlah', harga='$harga',baik='$baik', kurang_baik='$kurang', rusak_berat='$rusak', keterangan='$ket' WHERE no_kode='$kode'";
									$update = mysqli_query($connect, $query);
									if($update && isset($_GET['process'])){
											if($_GET['process'] == 'update_kir'){
													header('location: ../index.php?page=kir');
											}
									}
							} else {
									$pesan = "Data tidak lengkap!";
							}
					}
				}

				function delete_kir($connect){
					if(isset($_GET['kode']) && isset($_GET['process'])){
							$kode = $_GET['kode'];
							$query = "DELETE FROM kir WHERE no_kode='$kode'";
							$delete = mysqli_query($connect, $query);
							if($delete){
									if($_GET['process'] == 'delete_kir'){
											header('location: ../index.php?page=kir');
									}
							}
					}
				}

				function insert_usulan($connect){
					if (isset($_POST['insert_kir'])){
						$NOMOR_KODE_BARANG   = $_POST['NOMOR_KODE_BARANG'];
						$NOMOR_REGISTER   = $_POST['NOMOR_REGISTER'];
						$NAMA_BARANG   = $_POST['NAMA_BARANG'];
						$MERK_TIPE = $_POST['MERK_TIPE'];
						$NO_SERTIFIKAT = $_POST['NO_SERTIFIKAT'];
						$BAHAN  = $_POST['BAHAN'];
						$CARA_PEROLEHAN  = $_POST['CARA_PEROLEHAN'];
						$TAHUN_PEROLEHAN = $_POST['TAHUN_PEROLEHAN'];
						$UKURAN_BARANG  = $_POST['UKURAN_BARANG'];
						$KEADAAN_BARANG   = $_POST['KEADAAN_BARANG'];
						$JUMLAH_BARANG = $_POST['JUMLAH_BARANG'];
						$JUMLAH_HARGA  = $_POST['JUMLAH_HARGA'];
						$KETERANGAN    = $_POST['KETERANGAN'];

						$query = "INSERT INTO USULAN_PENGHAPUSAN SET NOMOR_KODE_BARANG   = '$NOMOR_KODE_BARANG',NOMOR_REGISTER   = '$NOMOR_REGISTER',NAMA_BARANG   = '$NAMA_BARANG',MERK_TIPE = '$MERK_TIPE',NO_SERTIFIKAT = '$NO_SERTIFIKAT',BAHAN  = '$BAHAN',CARA_PEROLEHAN  = '$CARA_PEROLEHAN',TAHUN_PEROLEHAN = '$TAHUN_PEROLEHAN',UKURAN_BARANG  = '$UKURAN_BARANG',KEADAAN_BARANG   = '$KEADAAN_BARANG',JUMLAH_BARANG = '$JUMLAH_BARANG',JUMLAH_HARGA  = '$JUMLAH_HARGA',KETERANGAN    = '$KETERANGAN'";
						if(mysqli_query($connect, $query)){
							header("location:../index.php?page=usulan-penghapusan.php");
						}else{
							header("location:../index.php?page=usulan-penghapusan.php&&status=gagal-insert");
						}

					}
				}

				function update_usulan($connect){
					if(isset($_POST['update_kir'])){
							$NOMOR_KODE_BARANG   = $_POST['NOMOR_KODE_BARANG'];
							$NOMOR_REGISTER   = $_POST['NOMOR_REGISTER'];
							$NAMA_BARANG   = $_POST['NAMA_BARANG'];
							$MERK_TIPE = $_POST['MERK_TIPE'];
							$NO_SERTIFIKAT = $_POST['NO_SERTIFIKAT'];
							$BAHAN  = $_POST['BAHAN'];
							$CARA_PEROLEHAN  = $_POST['CARA_PEROLEHAN'];
							$TAHUN_PEROLEHAN = $_POST['TAHUN_PEROLEHAN'];
							$UKURAN_BARANG  = $_POST['UKURAN_BARANG'];
							$KEADAAN_BARANG   = $_POST['KEADAAN_BARANG'];
							$JUMLAH_BARANG = $_POST['JUMLAH_BARANG'];
							$JUMLAH_HARGA  = $_POST['JUMLAH_HARGA'];
							$KETERANGAN    = $_POST['KETERANGAN'];

							$query = "UPDATE  USULAN_PENGHAPUSAN SET NOMOR_KODE_BARANG   = '$NOMOR_KODE_BARANG',NOMOR_REGISTER   = '$NOMOR_REGISTER',NAMA_BARANG   = '$NAMA_BARANG',MERK_TIPE = '$MERK_TIPE',NO_SERTIFIKAT = '$NO_SERTIFIKAT',BAHAN  = '$BAHAN',CARA_PEROLEHAN  = '$CARA_PEROLEHAN',TAHUN_PEROLEHAN = '$TAHUN_PEROLEHAN',UKURAN_BARANG  = '$UKURAN_BARANG',KEADAAN_BARANG   = '$KEADAAN_BARANG',JUMLAH_BARANG = '$JUMLAH_BARANG',JUMLAH_HARGA  = '$JUMLAH_HARGA',KETERANGAN    = '$KETERANGAN'";
							if(mysqli_query($connect, $query)){
								header("location:../index.php?page=usulan-penghapusan.php");
							}else{
								header("location:../index.php?page=usulan-penghapusan.php&&status=gagal-update");
							}
					}
				}

				function delete_usulan($connect){
					if(isset($_GET['kode']) && isset($_GET['process'])){
							$kode = $_GET['kode'];
							$query = "DELETE FROM kir WHERE no_kode='$kode'";
							$delete = mysqli_query($connect, $query);
							if($delete){
									if($_GET['process'] == 'delete_kir'){
											header('location: ../index.php?page=kir');
									}
							}
					}
				}

				function insert_bi($connect){
						if (isset($_POST['insert_bi'])){
							$kode		= $_POST['kode'];
							$nama   = $_POST['nama'];
							$merk   = $_POST['merk'];
							$noserti = $_POST['noserti'];
							$ukuran = $_POST['ukuran'];
							$bahan  = $_POST['bahan'];
							$asal  = $_POST['asal'];
							$tahun  = $_POST['tahun'];
							$harga  = $_POST['harga'];
							$register   = $_POST['register'];
							$keadaan = $_POST['keadaan'];
							$barang  = $_POST['barang'];
							$ket    = $_POST['ket'];

							if(!empty($kode) && !empty($nama) && !empty($merk) && !empty($noserti) && !empty($ukuran)
							&& !empty($bahan) && !empty($tahun) && !empty($asal) && !empty($harga) && !empty($register)
							&& !empty($barang) && !empty($keadaan) && !empty($ket)){
										$query = "INSERT INTO kir SET no_kode_barang='$kode',nama_barang='$nama',merk_tipe='$merk',no_sertifikat='$noserti', ukuran_barang='$ukuran',bahan='$bahan', tahun_perolehan='$tahun', asal='$asal', jumlah_harga='$harga',no_register='$register', keadaan_barang='$keadaan', jumlah_barang='$jumlah', keterangan='$ket'";
										$sql = mysqli_query($connect, $query);
										if($sql && isset($_GET['process'])){
												if($_GET['process'] == 'insert_kir'){
													header("location:../index.php?page=bi");
												}
										}
								} else {
										$pesan = "Tidak dapat menyimpan, data belum lengkap!";
								}
						}
					}

					function update_bi($connect){
						if(isset($_POST['update_bi'])){
								$kode		= $_POST['kode'];
								$nama   = $_POST['nama'];
								$merk   = $_POST['merk'];
								$noserti = $_POST['noserti'];
								$ukuran = $_POST['ukuran'];
								$bahan  = $_POST['bahan'];
								$asal  = $_POST['asal'];
								$tahun  = $_POST['tahun'];
								$harga  = $_POST['harga'];
								$register   = $_POST['register'];
								$keadaan = $_POST['keadaan'];
								$barang  = $_POST['barang'];
								$ket    = $_POST['ket'];

								if(!empty($kode) && !empty($nama) && !empty($merk) && !empty($noserti) && !empty($ukuran)
								&& !empty($bahan) && !empty($tahun) && !empty($asal) && !empty($harga) && !empty($register)
								&& !empty($barang) && !empty($keadaan) && !empty($ket)){
										$query = "INSERT INTO kir SET no_kode_barang='$kode',nama_barang='$nama',merk_tipe='$merk',no_sertifikat='$noserti', ukuran_barang='$ukuran',bahan='$bahan', tahun_perolehan='$tahun', asal='$asal', jumlah_harga='$harga',no_register='$register', keadaan_barang='$keadaan', jumlah_barang='$jumlah', keterangan='$ket' WHERE no_kode_barang='$kode'";
										$update = mysqli_query($connect, $query);
										if($update && isset($_GET['process'])){
												if($_GET['process'] == 'update_bi'){
														header('location: ../index.php?page=bi');
												}
										}
								} else {
										$pesan = "Data tidak lengkap!";
								}
						}
					}

					function delete_bi($connect){
						if(isset($_GET['kode']) && isset($_GET['process'])){
								$kode = $_GET['kode'];
								$query = "DELETE FROM bi WHERE no_kode_barang='$kode'";
								$delete = mysqli_query($connect, $query);
								if($delete){
										if($_GET['process'] == 'delete_bi'){
												header('location: ../index.php?page=bi');
										}
								}
						}
					}

					function insert_lmb($connect){
						if (isset($_POST['insert_lmb'])){

							$kode_barang            = $_POST['kode_barang'];
							$register				= $_POST['register'];
							$nama_barang			= $_POST['nama_barang'];
							$merk	           		= $_POST['merk'];
							$no_sertif         		= $_POST['no_sertif'];
							$bahan	           		= $_POST['bahan'];
							$asal_barang       		= $_POST['asal_barang'];
							$tahun_perolehan	    = $_POST['tahun_perolehan'];
							$ukuran_barang	        = $_POST['ukuran_barang'];
							$satuan	           		= $_POST['satuan'];
                            
							$kondisi                = $_POST['kondisi'];
							$jumlah_barang_awal		= $_POST['jumlah_barang_awal'];
							$jumlah_harga_awal		= $_POST['jumlah_harga_awal'];
							$jumlah_barang_berkurang= $_POST['jumlah_barang_berkurang'];
							$jumlah_harga_berkurang	= $_POST['jumlah_harga_berkurang'];
							$jumlah_barang_bertambah= $_POST['jumlah_barang_bertambah'];
							$jumlah_harga_bertambah	= $_POST['jumlah_harga_bertambah'];
							$jumlah_barang_akhir	= $_POST['jumlah_barang_akhir'];
							$jumlah_harga_akhir		= $_POST['jumlah_harga_akhir'];
							$ket	           		= $_POST['ket'];
                            
                            echo "<pre>"; var_dump($_POST); echo "</pre>";

							if(!empty($kode_barang) && !empty($register) && !empty($nama_barang) && !empty($merk) && !empty($no_sertif)
							&& !empty($bahan) && !empty($asal_barang) && !empty($tahun_perolehan) && !empty($ukuran_barang)){
                                echo "in \n";
                                
                                $query = "INSERT INTO MUTASI_BARANG (NOMOR_KODE_BARANG, NOMOR_REGISTER, "
                                    ."NAMA_BARANG, MERK_TIPE, NO_SERTIFIKAT, BAHAN, ASAL, TAHUN_PEROLEHAN, "
                                    ."UKURAN_BARANG, SATUAN, KONDISI, JUMLAH_BARANG, JUMLAH_HARGA, "
                                    ."JUMLAH_BARANG_BERKURANG, JUMLAH_HARGA_BERKURANG, JUMLAH_BARANG_BERTAMBAH, "
                                    ."JUMLAH_HARGA_BERTAMBAH, JUMLAH_BARANG_AKHIR, JUMLAH_HARGA_AKHIR, KETERANGAN, "
                                    ."JENIS_MUTASI) VALUES ('$kode_barang', '$register', '$nama_barang', '$merk', "
                                    ."'$no_sertif', '$bahan', '$asal_barang', '$tahun_perolehan', '$ukuran_barang', "
                                    ."'$satuan', '$kondisi', $jumlah_barang_awal, $jumlah_harga_awal, "
                                    ."$jumlah_barang_berkurang, $jumlah_harga_berkurang, $jumlah_barang_bertambah, "
                                    ."$jumlah_harga_bertambah, $jumlah_barang_akhir, $jumlah_harga_akhir, '$ket', 'LMB')";
                                
                                echo $query;
                                $sql = mysqli_query($connect, $query);
                                
                                if($sql && isset($_GET['process'])){
                                        if($_GET['process'] == 'insert_lmb'){
                                            header("location:../index.php?page=mb");
                                        }
                                }
                                else{ echo "unsaved \n";}
                                
                            } else {
                                    $pesan = "Tidak dapat menyimpan, data belum lengkap!";
                                echo $pesan;
                            }
						}
					}
					
					function update_lmb($connect){
						if (isset($_POST['update_lmb'])){

							$id_mutasi				= $_POST['id_mutasi'];

							$kode_barang            = $_POST['kode_barang'];
							$register				= $_POST['register'];
							$nama_barang			= $_POST['nama_barang'];
							$merk	           		= $_POST['merk'];
							$no_sertif         		= $_POST['no_sertif'];
							$bahan	           		= $_POST['bahan'];
							$asal_barang       		= $_POST['asal_barang'];
							$tahun_perolehan	    = $_POST['tahun_perolehan'];
							$ukuran_barang	        = $_POST['ukuran_barang'];
							$satuan	           		= $_POST['satuan'];
                            
							$kondisi                = $_POST['kondisi'];
							$jumlah_barang_awal		= $_POST['jumlah_barang_awal'];
							$jumlah_harga_awal		= $_POST['jumlah_harga_awal'];
							$jumlah_barang_berkurang= $_POST['jumlah_barang_berkurang'];
							$jumlah_harga_berkurang	= $_POST['jumlah_harga_berkurang'];
							$jumlah_barang_bertambah= $_POST['jumlah_barang_bertambah'];
							$jumlah_harga_bertambah	= $_POST['jumlah_harga_bertambah'];
							$jumlah_barang_akhir	= $_POST['jumlah_barang_akhir'];
							$jumlah_harga_akhir		= $_POST['jumlah_harga_akhir'];
							$ket	           		= $_POST['ket'];
                            
                            echo "<pre>"; var_dump($_POST); echo "</pre>";

							if(!empty($kode_barang) && !empty($register) && !empty($nama_barang) && !empty($merk) && !empty($no_sertif)
							&& !empty($bahan) && !empty($asal_barang) && !empty($tahun_perolehan) && !empty($ukuran_barang)){
                                echo "in \n";
                                
                                $query = "UPDATE MUTASI_BARANG SET NOMOR_KODE_BARANG='$kode_barang', NOMOR_REGISTER= '$register', "
									."NAMA_BARANG='$nama_barang', MERK_TIPE='$merk', NO_SERTIFIKAT='$no_sertif', BAHAN='$bahan', "
									."ASAL='$asal_barang', TAHUN_PEROLEHAN='$tahun_perolehan', UKURAN_BARANG='$ukuran_barang', "
									."SATUAN='$satuan', KONDISI='$kondisi', JUMLAH_BARANG=$jumlah_barang_awal, JUMLAH_HARGA=$jumlah_harga_awal, "
									."JUMLAH_BARANG_BERKURANG=$jumlah_barang_berkurang, JUMLAH_HARGA_BERKURANG=$jumlah_harga_berkurang, "
									."JUMLAH_BARANG_BERTAMBAH=$jumlah_barang_bertambah, JUMLAH_HARGA_BERTAMBAH=$jumlah_harga_bertambah, "
									."JUMLAH_BARANG_AKHIR=$jumlah_barang_akhir, JUMLAH_HARGA_AKHIR=$jumlah_harga_akhir, KETERANGAN='$ket' "
                                    ."WHERE ID_MUTASI=$id_mutasi AND JENIS_MUTASI='LMB'";
                                
                                echo $query;
                                $sql = mysqli_query($connect, $query);
                                
                                if($sql && isset($_GET['process'])){
                                        if($_GET['process'] == 'update_lmb'){
                                            header("location:../index.php?page=mb");
                                        }
                                }
                                else{ echo "unsaved \n";}
                                
                            } else {
                                    $pesan = "Tidak dapat menyimpan, data belum lengkap!";
                                echo $pesan;
                            }
						}
					}

					function delete_lmb($connect){
						if(isset($_GET['kode']) && isset($_GET['process'])){
								$kode = $_GET['kode'];
								$query = "DELETE FROM MUTASI_BARANG WHERE id_mutasi=$kode";
								$delete = mysqli_query($connect, $query);
								if($delete){
										if($_GET['process'] == 'delete_lmb'){
												header('location: ../index.php?page=mb');
										}
								}
						}
					}
	
					
				function insert_dmb($connect){
					if (isset($_POST['insert_dmb'])){

						$kode_barang            = $_POST['kode_barang'];
						$register				= $_POST['register'];
						$nama_barang			= $_POST['nama_barang'];
						$merk	           		= $_POST['merk'];
						$no_sertif         		= $_POST['no_sertif'];
						$bahan	           		= $_POST['bahan'];
						$asal_barang       		= $_POST['asal_barang'];
						$tahun_perolehan	    = $_POST['tahun_perolehan'];
						$ukuran_barang	        = $_POST['ukuran_barang'];
						$satuan	           		= $_POST['satuan'];
						
						$kondisi                = $_POST['kondisi'];
						$jumlah_barang_awal		= $_POST['jumlah_barang_awal'];
						$jumlah_harga_awal		= $_POST['jumlah_harga_awal'];
						$jumlah_barang_berkurang= $_POST['jumlah_barang_berkurang'];
						$jumlah_harga_berkurang	= $_POST['jumlah_harga_berkurang'];
						$jumlah_barang_bertambah= $_POST['jumlah_barang_bertambah'];
						$jumlah_harga_bertambah	= $_POST['jumlah_harga_bertambah'];
						$jumlah_barang_akhir	= $_POST['jumlah_barang_akhir'];
						$jumlah_harga_akhir		= $_POST['jumlah_harga_akhir'];
						$ket	           		= $_POST['ket'];
						
						echo "<pre>"; var_dump($_POST); echo "</pre>";

						if(!empty($kode_barang) && !empty($register) && !empty($nama_barang) && !empty($merk) && !empty($no_sertif)
						&& !empty($bahan) && !empty($asal_barang) && !empty($tahun_perolehan) && !empty($ukuran_barang)){
							echo "in \n";
							
							$query = "INSERT INTO MUTASI_BARANG (NOMOR_KODE_BARANG, NOMOR_REGISTER, "
								."NAMA_BARANG, MERK_TIPE, NO_SERTIFIKAT, BAHAN, ASAL, TAHUN_PEROLEHAN, "
								."UKURAN_BARANG, SATUAN, KONDISI, JUMLAH_BARANG, JUMLAH_HARGA, "
								."JUMLAH_BARANG_BERKURANG, JUMLAH_HARGA_BERKURANG, JUMLAH_BARANG_BERTAMBAH, "
								."JUMLAH_HARGA_BERTAMBAH, JUMLAH_BARANG_AKHIR, JUMLAH_HARGA_AKHIR, KETERANGAN, "
								."JENIS_MUTASI) VALUES ('$kode_barang', '$register', '$nama_barang', '$merk', "
								."'$no_sertif', '$bahan', '$asal_barang', '$tahun_perolehan', '$ukuran_barang', "
								."'$satuan', '$kondisi', $jumlah_barang_awal, $jumlah_harga_awal, "
								."$jumlah_barang_berkurang, $jumlah_harga_berkurang, $jumlah_barang_bertambah, "
								."$jumlah_harga_bertambah, $jumlah_barang_akhir, $jumlah_harga_akhir, '$ket', 'DMB')";
							
							echo $query;
							$sql = mysqli_query($connect, $query);
							
							if($sql && isset($_GET['process'])){
									if($_GET['process'] == 'insert_dmb'){
										header("location:../index.php?page=mb");
									}
							}
							else{ echo "unsaved \n";}
							
						} else {
								$pesan = "Tidak dapat menyimpan, data belum lengkap!";
							echo $pesan;
						}
					}
				}

				function update_dmb($connect){
					if (isset($_POST['update_dmb'])){

						$id_mutasi				= $_POST['id_mutasi'];

						$kode_barang            = $_POST['kode_barang'];
						$register				= $_POST['register'];
						$nama_barang			= $_POST['nama_barang'];
						$merk	           		= $_POST['merk'];
						$no_sertif         		= $_POST['no_sertif'];
						$bahan	           		= $_POST['bahan'];
						$asal_barang       		= $_POST['asal_barang'];
						$tahun_perolehan	    = $_POST['tahun_perolehan'];
						$ukuran_barang	        = $_POST['ukuran_barang'];
						$satuan	           		= $_POST['satuan'];
						
						$kondisi                = $_POST['kondisi'];
						$jumlah_barang_awal		= $_POST['jumlah_barang_awal'];
						$jumlah_harga_awal		= $_POST['jumlah_harga_awal'];
						$jumlah_barang_berkurang= $_POST['jumlah_barang_berkurang'];
						$jumlah_harga_berkurang	= $_POST['jumlah_harga_berkurang'];
						$jumlah_barang_bertambah= $_POST['jumlah_barang_bertambah'];
						$jumlah_harga_bertambah	= $_POST['jumlah_harga_bertambah'];
						$jumlah_barang_akhir	= $_POST['jumlah_barang_akhir'];
						$jumlah_harga_akhir		= $_POST['jumlah_harga_akhir'];
						$ket	           		= $_POST['ket'];
						
						echo "<pre>"; var_dump($_POST); echo "</pre>";

						if(!empty($kode_barang) && !empty($register) && !empty($nama_barang) && !empty($merk) && !empty($no_sertif)
						&& !empty($bahan) && !empty($asal_barang) && !empty($tahun_perolehan) && !empty($ukuran_barang)){
							echo "in \n";
							
							$query = "UPDATE MUTASI_BARANG SET NOMOR_KODE_BARANG='$kode_barang', NOMOR_REGISTER= '$register', "
								."NAMA_BARANG='$nama_barang', MERK_TIPE='$merk', NO_SERTIFIKAT='$no_sertif', BAHAN='$bahan', "
								."ASAL='$asal_barang', TAHUN_PEROLEHAN='$tahun_perolehan', UKURAN_BARANG='$ukuran_barang', "
								."SATUAN='$satuan', KONDISI='$kondisi', JUMLAH_BARANG=$jumlah_barang_awal, JUMLAH_HARGA=$jumlah_harga_awal, "
								."JUMLAH_BARANG_BERKURANG=$jumlah_barang_berkurang, JUMLAH_HARGA_BERKURANG=$jumlah_harga_berkurang, "
								."JUMLAH_BARANG_BERTAMBAH=$jumlah_barang_bertambah, JUMLAH_HARGA_BERTAMBAH=$jumlah_harga_bertambah, "
								."JUMLAH_BARANG_AKHIR=$jumlah_barang_akhir, JUMLAH_HARGA_AKHIR=$jumlah_harga_akhir, KETERANGAN='$ket' "
								."WHERE ID_MUTASI=$id_mutasi AND JENIS_MUTASI='DMB'";
							
							echo $query;
							$sql = mysqli_query($connect, $query);
							
							if($sql && isset($_GET['process'])){
									if($_GET['process'] == 'update_dmb'){
										header("location:../index.php?page=mb");
									}
							}
							else{ echo "unsaved \n";}
							
						} else {
								$pesan = "Tidak dapat menyimpan, data belum lengkap!";
							echo $pesan;
						}
					}
				}

				function delete_dmb($connect){
					if(isset($_GET['kode']) && isset($_GET['process'])){
							$kode = $_GET['kode'];
							$query = "DELETE FROM MUTASI_BARANG WHERE id_mutasi=$kode";
							$delete = mysqli_query($connect, $query);
							if($delete){
									if($_GET['process'] == 'delete_dmb'){
											header('location: ../index.php?page=mb');
									}
							}
					}
				}
				
				function insert_bmd($connect){
          if (isset($_POST['insert_kir'])){
            $NO_KODE_LOKASI_BARANG   = $_POST['NO_KODE_LOKASI_BARANG'];
            $NO_KODE_BARANG   = $_POST['NO_KODE_BARANG'];
            $NO_REGISTER   = $_POST['NO_REGISTER'];
            $NAMA_BARANG = $_POST['NAMA_BARANG'];
            $DOKUMEN_BARANG = $_POST['DOKUMEN_BARANG'];
            $ALAMAT_BARANG  = $_POST['ALAMAT_BARANG'];
            $ASAL_USUL  = $_POST['ASAL_USUL'];
            $TAHUN_PEMBELIAN = $_POST['TAHUN_PEMBELIAN'];
            $KONSTRUKSI  = $_POST['KONSTRUKSI'];
            $LUAS   = $_POST['LUAS'];
            $NILAI_BARANG = $_POST['NILAI_BARANG'];
            $SK_KDH  = $_POST['SK_KDH'];
            $JANGKA_WAKTU    = $_POST['JANGKA_WAKTU'];
            $ALAMA_PHK_KETIGAT    = $_POST['ALAMA_PHK_KETIGAT'];
            $KETERANGAN    = $_POST['KETERANGAN'];
              
            $query = "INSERT INTO BMD_GUNAUSAHA SET NOMOR_KODE_BARANG   = '$NOMOR_KODE_BARANG',NOMOR_REGISTER   = '$NOMOR_REGISTER',NAMA_BARANG   = '$NAMA_BARANG',MERK_TIPE = '$MERK_TIPE',NO_SERTIFIKAT = '$NO_SERTIFIKAT',BAHAN  = '$BAHAN',CARA_PEROLEHAN  = '$CARA_PEROLEHAN',TAHUN_PEROLEHAN = '$TAHUN_PEROLEHAN',UKURAN_BARANG  = '$UKURAN_BARANG',KEADAAN_BARANG   = '$KEADAAN_BARANG',JUMLAH_BARANG = '$JUMLAH_BARANG',JUMLAH_HARGA  = '$JUMLAH_HARGA',KETERANGAN    = '$KETERANGAN'";
            if(mysqli_query($connect, $query){
              header("location:../index.php?page=usulan-penghapusan.php");
            }else{
              header("location:../index.php?page=usulan-penghapusan.php&&status=gagal-insert");
            }
            
          }
        }

        function update_bmd($connect){
          if(isset($_POST['update_kir'])){
              $NO_KODE_LOKASI_BARANG   = $_POST['NO_KODE_LOKASI_BARANG'];
              $NO_KODE_BARANG   = $_POST['NO_KODE_BARANG'];
              $NO_REGISTER   = $_POST['NO_REGISTER'];
              $NAMA_BARANG = $_POST['NAMA_BARANG'];
              $DOKUMEN_BARANG = $_POST['DOKUMEN_BARANG'];
              $ALAMAT_BARANG  = $_POST['ALAMAT_BARANG'];
              $ASAL_USUL  = $_POST['ASAL_USUL'];
              $TAHUN_PEMBELIAN = $_POST['TAHUN_PEMBELIAN'];
              $KONSTRUKSI  = $_POST['KONSTRUKSI'];
              $LUAS   = $_POST['LUAS'];
              $NILAI_BARANG = $_POST['NILAI_BARANG'];
              $SK_KDH  = $_POST['SK_KDH'];
              $JANGKA_WAKTU    = $_POST['JANGKA_WAKTU'];
              $ALAMA_PHK_KETIGAT    = $_POST['ALAMA_PHK_KETIGAT'];
              $KETERANGAN    = $_POST['KETERANGAN'];
              
              $query = "UPDATE  BMD_GUNAUSAHA SET NOMOR_KODE_BARANG   = '$NOMOR_KODE_BARANG',NOMOR_REGISTER   = '$NOMOR_REGISTER',NAMA_BARANG   = '$NAMA_BARANG',MERK_TIPE = '$MERK_TIPE',NO_SERTIFIKAT = '$NO_SERTIFIKAT',BAHAN  = '$BAHAN',CARA_PEROLEHAN  = '$CARA_PEROLEHAN',TAHUN_PEROLEHAN = '$TAHUN_PEROLEHAN',UKURAN_BARANG  = '$UKURAN_BARANG',KEADAAN_BARANG   = '$KEADAAN_BARANG',JUMLAH_BARANG = '$JUMLAH_BARANG',JUMLAH_HARGA  = '$JUMLAH_HARGA',KETERANGAN    = '$KETERANGAN'";
              if(mysqli_query($connect, $query){
                header("location:../index.php?page=usulan-penghapusan.php");
              }else{
                header("location:../index.php?page=usulan-penghapusan.php&&status=gagal-update");
              }
          }          
        }

        function delete_bmd($connect){
          if(isset($_GET['kode']) && isset($_GET['process'])){
              $kode = $_GET['kode'];
              $query = "DELETE FROM BMD_GUNAUSAHA WHERE no_kode='$kode'";
              $delete = mysqli_query($connect, $query);              
              if($delete){
                  if($_GET['process'] == 'delete_kir'){
                      header('location: ../index.php?page=kir');
                  }
              }
          }    
        }

				if (isset($_GET['process'])){
					switch($_GET['process']){
							case "insert_kib_a":
									insert_kib_a($connect);
									break;
							case "update_kib_a":
									update_kib_a($connect);
									break;
							case "delete_kib_a":
									delete_kib_a($connect);
									break;

							case "insert_kir":
									insert_kir($connect);
									break;
							case "update_kir":
									update_kir($connect);
									break;
							case "delete_kir":
									delete_kir($connect);
									break;

							case "insert_usulan":
									insert_usulan($connect);
									break;
							case "update_usulan":
									update_usulan($connect);
									break;
							case "delete_usulan":
									delete_usulan($connect);
									break;

							case "insert_lmb":
									insert_lmb($connect);
									break;
							case "update_lmb":
									update_lmb($connect);
									break;
							case "delete_lmb":
									delete_lmb($connect);
									break;

							case "insert_dmb":
									insert_dmb($connect);
									break;
							case "update_dmb":
									update_dmb($connect);
									break;
							case "delete_dmb":
									delete_dmb($connect);
									break;

							case "insert_bmd":
									insert_bmd($connect);
									break;
							case "update_bmd":
									update_bmd($connect);
									break;
							case "delete_bmd":
									delete_bmd($connect);
									break;

							default:
									echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
									tambah($koneksi);
									tampil_data($koneksi);
					}
				}

				// mysqli_close($connect);

?>