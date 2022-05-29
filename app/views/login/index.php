<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= BASE_URL; ?>/assets/images/gambar.ico" type="image/ico" />

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="<?= BASE_URL; ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= BASE_URL; ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= BASE_URL; ?>/vendors/nprogress/nprogress.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="<?= BASE_URL; ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login" style="background:linear-gradient(to right, #000046, #1cb5e0);">
    <div>
        <!-- <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a> -->
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <?php
                    if (!is_array($data)) {
                        echo "<div class='alert alert-danger' role='alert'>$data</div>";
                    }
                    ?>
                    <form id="login-form" class="form" action="" method="post">
                        <h1 style="color: white;">LOGIN ADMIN</h1>
                        <h6 style="color: white;">SISTEM PENGARSIPAN DOKUMEN <br> GURU DAN PEGAWAI</h6>
                        <br>
                        <div class="col-12">
                            <input type="text" class="form-control" name="username" placeholder="Username" required="" />
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" name="nip" placeholder="Nip Anda" required="" />
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                        </div>
                        <div class="col-6" style="margin-left:50px ;">
                            <input class="btn btn-success form-control submit" type="submit" value="Log in" name="action">
                        </div>

                        <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
                        <div class="clearfix"></div>
                        <div class="separator" style="color: white ;">
                            <p class="change_link"> Login Sebagai
                                <br>
                                &nbsp;&nbsp;&nbsp;
                                <a class="btn btn-danger btn-sm" href="<?= BASE_URL; ?>/login/pegawai"> Pegawai </a>
                                <a class="btn btn-danger btn-sm" href="<?= BASE_URL; ?>/login/guru"> Guru </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div style="margin-top:-40px ; width: 600px; margin-left: -120px;">
                                <br>
                                <h4>
                                    <img src=" <?= BASE_URL; ?>/images/2.png" alt="" width="80"> Smp Negeri 7 Ambon
                                    <img src=" <?= BASE_URL; ?>/images/1.png" alt="" width="100">
                                </h4>
                                <p>©CopyRight. Ambon,2022</p>
                            </div>
                        </div>
                    </form>
            </div>
            </section>
        </div>


    </div>
    </div>
</body>

</html>