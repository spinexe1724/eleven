<?php
require_once('config.php');
include 'app.php';

	// berikut script untuk proses tambah barang ke database 
	if(!empty($_POST['nama_barang'])){
		// menangkap data post 
		$nama_barang = $_POST['nama_barang'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		$tanggal = $_POST['tanggal'];
		
		$data[] = $nama_barang;
		$data[] = $stok;
		$data[] = $harga;
		$data[] = $tanggal;
		
		// simpan data barang
		
		$sql = 'INSERT INTO tbl_barang (nama_barang,stok,harga_barang,tgl_masuk)VALUES (?,?,?,?)';
		$row = $koneksi->prepare($sql);
		$row->execute($data);
		
		// redirect
		echo '<script>alert("Berhasil Tambah Data");window.location="index.php"</script>';
	}
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
    <a href="/admin/clients" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST"enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Judul">
                </div>
               
                <div class="form-group">
                    <label for="">Tempat Tanggal Lahir</label>
                    <textarea name="TTL" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>

               <div class="form-group">
                    <label for="">NIK</label>
                    <textarea name="NIK" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
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
