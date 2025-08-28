<?php include 'app.php';?>


<?php
	require_once('config.php');
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
    <a href="/admin/portfolios/create" class="btn btn-primary mb-1">Tambah Data</a>
 

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama</th>
                    <th>nik</th>
                    <th>kk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
             <?php
                       
						$sql = "SELECT * FROM data_warga";
						$row = $koneksi->prepare($sql);
						$row->execute();
						$data_warga = $row->fetchAll();
						$a =1;
                       foreach($data_warga as $s){ 
                        ?>
            <tbody>
                      

                <tr>
                    <td><?php echo $a?></td>
                    <td><?php echo $s['nama']?></td>
                    <td><?php echo $s['nik']?></td>
                    <td><?php echo $s['kk']?></td>
                   
                    <td>
							

                        <a href="edit.php?id=<?php echo $isi['id'];?>" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="hapus.php?id=<?php echo $isi['id_barang'];?>" 
							class="btn btn-danger btn-md"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            </tbody>
            <?php
						$a++;
						}
					?>
        </table>
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


