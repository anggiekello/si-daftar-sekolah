<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Jurusan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="nama_jurusan" class="col-sm-3 control-label">Nama Jurusan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_jurusan" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Jurusan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jumlah_kelas" class="col-sm-3 control-label">Banyak Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_kelas" class="form-control" id="inputEmail3" placeholder="Inputkan Banyak Kelas" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=jurusan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Jurusan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$nama_jurusan=$_POST['nama_jurusan'];
	$jumlah_kelas=$_POST['jumlah_kelas'];
    //buat sql
    $sql="INSERT INTO tbl_jurusan VALUES ('','$nama_jurusan','$jumlah_kelas')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=jurusan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
