<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= BASE_URL; ?>/assets/images/gambar.ico" type="image/ico" />

    <title><?= $data['judul']; ?></title>

    <!-- Bootstrap -->
    <link href="<?= BASE_URL; ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= BASE_URL; ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= BASE_URL; ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= BASE_URL; ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= BASE_URL; ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login" style="background:linear-gradient(to right, #000046, #1cb5e0);">
    <div>
        <!-- <a class=" hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a> -->

        <div class="login_wrapper">
            <div class="animate form login_form">

                <section class="login_content">
                    <?php
                    if (!is_array($data)) {
                        echo "<div class='alert alert-danger' role='alert'>$data</div>";
                    }
                    ?>
                    <form action="" method="post">
                        <h1 style="color: white;">Registerasi Pegawai</h1>

                        <div>
                            <input type="text" class="form-control" name="username" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="number" class="form-control" name="nip" placeholder="Nip Anda" required="" />
                        </div>
                        <br>
                        <select name="level" class="form-control" aria-label="Default select example">
                            <option value="pegawai">Pegawai</option>
                        </select>
                        <br>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="password" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password_confirm" placeholder="Password_confirm" required="" />
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <input type="submit" name="action" value="Daftar" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="separator" style="color: white ;">
                            <p class="change_link">Login Dengan Akun Yang Sudah Ada?
                                <a href="<?= BASE_URL; ?>/login/pegawai" style="color:aqua ;"> Log in </a>
                            </p>

                            <div class=" clearfix">
                            </div>
                            <br />
                            <div style="margin-top:-40px ; width: 600px; margin-left: -120px;">
                                <br>
                                <h4> <img src=" <?= BASE_URL; ?>/images/2.png" alt="" width="80"> Smp Negeri 7 Ambon <img src=" <?= BASE_URL; ?>/images/1.png" alt="" width="100"></h4>
                                <p>©CopyRight. Ambon,2022</p>
                            </div>
                        </div>
            </div>
            </form>
            </section>
        </div>

    </div>
</body>

</html>