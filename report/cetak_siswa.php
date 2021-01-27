<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Calon Siswa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendaftaran Siswa Baru SMAN 4 Kisaran</h2>
                        Jl. Nusa Indah, Sei Renggas, Kec. Kota Kisaran Barat<br>
                        Kabupaten Asahan, Sumatera Utara 21211,
                        <hr>
                        <h3>DATA Calon Siswa</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th width="10%">Nik</th>
                                    <th width="20%">Nama </th>
                                    <th width="10%">Tempat Lahir</th>
                                    <th width="10%">Tanggal Lahir</th>
                                    <th width="10%">Nomor Telepon</th>
                                    <th width="15%">Asal Sekolah</th>
                                    <th width="10%">Jenis Kelamin</th>
                                </tr>
							</thead>
						<tbody>
                        <!--ambil data dari database, dan tampilkan kedalam tabel-->
                        <?php
                        //buat sql untuk tampilan data, gunakan kata kunci select
                        $sql = "SELECT * FROM tbl_siswa";
                        $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                        //Baca hasil query dari databse, gunakan perulangan untuk 
                        //Menampilkan data lebh dari satu. disini akan digunakan
                        //while dan fungdi mysqli_fecth_array
                        //Membuat variabel untuk menampilkan nomor urut
                        $nomor = 0;
                        //Melakukan perulangan u/menampilkan data
                        while ($data = mysqli_fetch_array($query)) {
                            $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['nik'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['tempat_lahir'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
									<td><?= $data['telp'] ?></td>
                                    <td><?= $data['asal_sekolah'] ?></td>
                                    <td><?= $data['jk'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Anggie Dermawan<strong></u><br>
                                        NIP.1234567890
									</td>
								</tr>
							</tfoot> 
						</tbody>
                        </tbody>    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>