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
  <style>
      #features{
    padding: 5vw 8vw 0 8vw;
    text-align: center;
}

#features .fea-base{
    display: grid;
    grid-template-columns: repeat(auto-fit,minimax(320px,1fr));
    grid-gap: 5rem;
    margin-top: 50px;
}

#features .fea-box{
    
    text-align: start;
}

#features .fea-box i{
    font-size: 2.3rem;
    color: rgb(44, 44, 80);
}

#features .fea-box h3{
    font-size: 1.2rem;
    font-weight: 600;
    color: rgb(46, 46, 59);
    padding: 13px 0 7px 0;
}

#features .fea-box p{
    font-size: 1rem;
    font-weight: 400;
    color: rgb(70, 70, 87 );
} 
  </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="assets/index3.html" class="navbar-brand">
          <img src="admin/gambar/logo.png" alt="Rhotel Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Hotel Hebat</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="kamar.php" class="nav-link">Kamar</a>
            </li>
            <li class="nav-item">
              <a href="fasilitas.php" class="nav-link">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a href="login.php" class="nav-link">Daftar/Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Hotel hebat</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="content">
        <div class="container">
          <div class="col-md-12">
            <?php 
            if(isset($_GET['pesan'])){
              if($_GET['pesan']=="gagal"){?>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Peringatan !!!</h5>
                  Mohon maaf anda tidak bisa mengakses halaman ini
                </div>
              <?php }} ?>
            </div>
          </div>
        </div>      

        <!-- Main content -->
        <div class="content">
          <div class="container">
            <div class="col-md-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="admin/gambar/g1.jpg" alt="First slide" height="450">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="admin/gambar/g2.jpg" alt="Second slide" height="450">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="admin/gambar/g3.jpg" alt="Third slide" height="450">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-custom-icon" aria-hidden="true">
                        <i class="fas fa-chevron-left"></i>
                      </span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-custom-icon" aria-hidden="true">
                        <i class="fas fa-chevron-right"></i>
                      </span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <form action="proses_pesan.php" method="POST">
              <div class="col-md-12">
                <div class="card-body">
                  <div class="row">
                  <h1>Tertarik Dengan Hotel Hebat? Ingin Menginap Disini? <br> Yuk Daftar Terlebih Dahuluu</h1>
                  <button type="button" class="btn btn-block btn-danger "><a href="register.php"> Klik Disini</a></button>
                  </div>
                </div>
              </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
            </form>
            <section id="features">
        <div class="card card-info">
        <div class="col-md-100">
          <div class="card-body">
            <h1 class="text-center">Mengapa Menginap Di Hotel hebat? </h1><br>
            <div class="fea-base" style="display: flex;">
        <div class="fea-box">
           <img src="admin/gambar/icon1.png"  alt="" width=100" height="100">
            <h3>Kamar Yang Nyaman,Bersih,Dan Menarik</h3>
            <p>Di Hotel Hebat Ada Banyak Tipe Kamar Yang Bisa Anda Pilih<br>Sesuai Kebutuhan Anda<br>Serta Hotel Hebat Juga Mempunyai Spot Kamar<br>Dengan Pemandangan Yang Indah<br>Yang Akan Sangat Menarik Untuk Dilihat!!</p>
        </div>
            <div class="fea-box">
              <img src="admin/gambar/icon2.png" alt="" width=100" height=100">
                <h3>Pelayanan Yang Mengutamakan Anda</h3>
                <p>Di Hotel Hebat Anda Adalah Prioritas Kami <br>Jika Ada Ketidaknyamanan Ataupun Hal yang Mengganggu<br> Atau Anda membutuhkan<br> Sesuatu Resepsionis Kita Akan Terus Siap Bagi Anda 24 Jam!</p>
            </div>
                <div class="fea-box">
                   <img src="admin/gambar/icon3.png" alt="" width=100" height="100">
                    <h3>Harga Terjangkau</h3>
                    <p>Di Hotel Hebat Anda Bisa Memilih Berbagai Macam kamar<br> Dengan Harga Yang Relatif Terjangkau<br> Tergantung Pada Tipe Kamar Hotel Yang Anda Pilih,<br>Jadi Gausah Takut Kemahalan Nih Kalau Di Hotel Hebat!</p>
                </div>
    </div>
          </div>
        </div>
        </div>
        </section>   
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
        <div class="float-right d-none d-sm-inline">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2022 Hotel Hebat.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
  </body>
  </html>