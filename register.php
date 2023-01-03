<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Hebat</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <?php
    //Tambahkan Koneksi Databases
    require_once 'koneksi.php';
    $_pesan = "";

    if (isset($_POST['btn-register'])) {
      //menerima data dari form
      $nama = $_POST['nama'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $level = $_POST['level'];

      // buat query tampil tabel users
      $sql = "SELECT username FROM users WHERE username='$username'";
      $result = mysqli_query($koneksi, $sql);

      if (mysqli_fetch_assoc($result)) { // jika username ada maka tampilkan pesan error username sudah ada
        echo " <script> alert('Error! Username sudah ada'); </script> ";
      }

      $sql = "INSERT INTO users (id, nama, username, password,level) VALUES ('', '$nama', '$username', '$password', '$level')";
      if (mysqli_query($koneksi, $sql)) { // jika query benar maka tampilkan pesan berhasil 
        $pesan = '
        <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                  Sukses.user baru telah ditambahkan
                </div>
                ';
      } else { // jika error query maka muncul pesan error
        $pesan = "Error: " . $sql . "<br>" . mysqli_error($koneksi);
      }
    }

    mysqli_close($koneksi);


    ?>
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/index2.html" class="h1">Hotel Hebat</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="nama" class="form-control" name="nama" placeholder="nama">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="username" class="form-control" name="username" placeholder="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">

                        <select name="level" class="form-control" required>
                            <option value="">--- Pilih Level ---</option>
                            <option value="3">Tamu</option>
                        </select>
                    </div>
            </div>

            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block" name="btn-register">Register</button>
            </div>
            <a href="login.php" class="text-center">Sudah Mendaftar? Loginn Yukk!!</a>
        </div>
        <!-- /.col -->
    </div>
    </form>



    <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>