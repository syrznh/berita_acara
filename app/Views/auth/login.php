<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Welcome To Berita Acara</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceland&family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php

                use App\Controllers\Dashboard;

                echo base_url('dashbaord/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('dashboard/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-image: url("zyro-image.jpg");
            background-size: 100%;
        }

        .row {
            justify-content: right;

        }

        .card {
            height: 85vh;
            border-radius: 30px;
        }

        .card-body {
            padding-top: 60px !important;
        }
    </style>
</head>
<?php
$session = session();
$login = $session->getFlashdata('login');
$email = $session->getFlashdata('email');
$password = $session->getFlashdata('password');
?>

<body>
    <div class="container">
        <!-- Outer Row -->
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="p-4 m-4">
                            <div class="text-center">
                                <h1 class="h5 text-gray-900 mb-4">Selamat Datang di Berita Acara</h1>
                                <p class="mb-4">Masukan username dan password anda!</p>
                                <?php if ($email) { ?>
                                    <strong><?php echo $email ?></strong>
                                <?php } ?>

                                <?php if ($password) { ?>
                                    <strong><?php echo $password ?></strong>
                                <?php } ?>

                                <?php if ($login) { ?>
                                    <strong><?php echo $login ?></strong>
                                <?php } ?>
                            </div>


                            <form action="/auth/valid_login" method="POST" autocomplete="off" class="user">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                                </div>
                                <!-- <a href="<?php echo base_url("dashboard/layouts/index") ?>" class="btn btn-warning btn-user btn-block">
                                    Login
                                </a> -->
                                <button type="submit" class="btn btn-warning btn-user btn-block">
                                    Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('dashboard/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('dashboard/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('dashboard/js/sb-admin-2.min.js') ?>"></script>
</body>

</html>





</head>





</body>

</html>