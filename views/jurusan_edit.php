<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_jurusan WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Edit Data Jurusan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_jurusan" class="col-sm-3 control-label">Nama Jurusan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_jurusan" value="<?=$data['nama_jurusan']?>"class="form-control" id="inputEmail3" placeholder="Nama Jurusan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_kelas" class="col-sm-3 control-label">Jumlah kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_kelas" value="<?=$data['jumlah_kelas']?>"class="form-control" id="inputEmail3" placeholder="Jumlah Kelas">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Edit Data Jurusan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=siswa&actions=tampil" class="btn btn-danger btn-sm">
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
    $sql="UPDATE tbl_jurusan SET nama_jurusan='$nama_jurusan',jumlah_kelas='$jumlah_kelas' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=jurusan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



