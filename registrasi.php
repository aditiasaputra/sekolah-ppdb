<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('Data Anggota Berhasil Ditambahkan!. Silahkan Anda Login!');
        document.location.href= 'login.php';
        </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi</title>

    <!-- Custom fonts for this template-->
    <link href="css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form action="" method="post" class="user formregistrasi">
                                <div class="form-group ">
                                    <input name="nama" type="text" class="form-control form-control-user" id="exampleYourName" placeholder="Nama Anda" required>
                                </div>
                                <div class="form-group">
                                    <input name="username" type="text" class="form-control form-control-user" id="exampleUsername" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat Email" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="password_ulang" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulang Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="level" type="hidden" class="form-control form-control-user" id="exampleLevel" value="guru">
                                </div>
                                <input name="registrasi" id="registrasi" class="btn btn-primary btn-user btn-block" type="submit" value="Registrasi Akun!">
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="lupa_password.php">Lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Sudah punya akun? Silahkan Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="lib/easing/easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>