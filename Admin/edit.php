<?php
require_once('config.php');
include 'app.php';

	
	// berikut script untuk proses edit barang ke database 
	if(!empty($_POST['nama_barang'])){
		// menangkap data post 
		$nama_barang = $_POST['nama_barang'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		$tanggal = $_POST['tanggal'];
		$id = $_POST['id_barang'];
		
		$data[] = $nama_barang;
		$data[] = $stok;
		$data[] = $harga;
		$data[] = $tanggal;
		$data[] = $id;
		
		// simpan data barang
		
		$sql = 'UPDATE tbl_barang SET nama_barang=?,stok=?,harga_barang=?,tgl_masuk=? WHERE id_barang=?';
		$row = $koneksi->prepare($sql);
		$row->execute($data);
		
		// redirect
		echo '<script>alert("Berhasil Edit Data");window.location="index.php"</script>';
	}
	// untuk menampilkan data barang berdasarkan id barang
	$id = $_GET['id'];
	$sql = "SELECT *FROM tbl_barang WHERE id_barang= ?";
	$row = $koneksi->prepare($sql);
	$row->execute(array($id));
	$hasil = $row->fetch();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"></h5>
              </div>
              <div class="card-body">

 

    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST"enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" required  class="form-control" name="nama" placeholder="Nama Lengkap">
                </div>
                
                  <div class="form-group">
                    <label for="">Tempat Tanggal Lahir</label>
                    <div class="row">
                      <div class="col-3">
                     <input type="text" required  class="form-control" name="tempat" placeholder="Tempat Lahir">
                      </div>

                     <div class="col-4">
                     <input type="date" required class="form-control" name="TTL" placeholder="Tanggal Lahir">
                  </div>
                  
                </div>
                  </div>

                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" required class="form-control" name="nik" placeholder="NIK">
                </div>
                <div class="form-group">
                    <label for="">KK</label>
                    <input type="text" required class="form-control" name="kk" placeholder="Kartu Keluarga">
                </div>
                <div class="form-group">
                    <label for="">No Rumah</label>
                    <input type="text" required class="form-control" name="no_rmh" placeholder="No Rumah">
                </div>
                 <div class="form-group">
                    <label for="">No HP</label>
                    <input type="text" required class="form-control" name="no_hp" placeholder="No Handphone">
                </div>

                 <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" required id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="create" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

         </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
