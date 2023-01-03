<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel Hebat</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
  <div class="wrapper">


  

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-body">
                <h1>Data pemesanan Kamar</h1>
       <form method="get">
			<label>Cari Data</label>
			<input type="text" name="nama_tamu">
			<input type="submit" value="Cari">
		</form>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama Tamu</th>
                      <th>Tanggal Cek In</th>
                      <th>Tanggal Cek Out</th>
                      <th>No Kamar</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
			$no = 1;
      include '../koneksi.php';
			if(isset($_GET['nama_tamu'])){
				$tgl = $_GET['nama_tamu'];
				$sql = mysqli_query($koneksi,"SELECT * FROM pesanan WHERE nama_tamu='$tgl'");
			}else{
				$sql = mysqli_query($koneksi,"SELECT * from pesanan");
			}
			while($data = mysqli_fetch_array($sql)){
			?>

		
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama_tamu']; ?></td>
                        <td><?php echo $data['cek_in']; ?></td>
                        <td><?php echo $data['cek_out']; ?></td>
                        <td>
                          <?php 
                          $kamar = mysqli_query($koneksi, "select * from kamar");
                          while ($a = mysqli_fetch_array($kamar)) {
                            if ($a['id_kamar'] == $data['id_kamar']) { ?>
                              <?php echo $a['no_kamar']; ?>
                              <?php
                            }
                          }
                          ?>
                        </td>
                        <td>
                        
                      </tr>
                    	<?php 
			}
			?>
                
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
   
     
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/dist/js/adminlte.min.js"></script>
  <script>window.print();</script>
</body>
</html>