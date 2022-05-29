<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= BASE_URL; ?>/assets/images/LOGOATAS.png" type="image/ico" />

    <title><?= $data['judul']; ?></title>


    <!-- Bootstrap -->
    <link href="<?= BASE_URL; ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= BASE_URL; ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= BASE_URL; ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= BASE_URL; ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="<?= BASE_URL; ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Theme Style -->
    <link href="<?= BASE_URL; ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title" style="font-size: 15px;"><i class="fa fa-home"></i><span>SMP NEGERI 7 AMBON</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= BASE_URL; ?>/images/img.jpg" alt="<?= BASE_URL; ?>." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><i class="fa fa-circle text-success"></i>&nbsp<?= user()->username; ?><br>
                                <small><?= user()->level; ?></small>
                            </h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Umum</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?= BASE_URL; ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                                <li><a><i class="fa fa-pencil"></i> Absensi <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <?php if ($_SESSION['level'] == 'pegawai' || $_SESSION['level'] == 'guru') { ?>
                                            <li><a href="<?= BASE_URL; ?>/absend/index">Isi Absen</a></li>
                                        <?php } ?>
                                        <?php if ($_SESSION['level'] == 'pegawai' || $_SESSION['level'] == 'guru') { ?>
                                            <li><a href="<?= BASE_URL; ?>/absend/tb_absen">Data Absen</a></li>
                                        <?php } ?>
                                        <?php if ($_SESSION['level'] == 'admin') { ?>
                                            <li><a href="<?= BASE_URL; ?>/absend/tb_adminAbsen">Kumpulan Data Absen</a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Kumpulan Data <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">

                                        <?php if ($_SESSION['level'] == 'admin') { ?>
                                            <li><a href="<?= BASE_URL; ?>/Dashboard/tb_dataadmin">Data Guru</a></li>
                                        <?php } ?>
                                        <?php if ($_SESSION['level'] == 'guru') { ?>
                                            <li><a href=" <?= BASE_URL; ?>/Dashboard/user">Data Pribadi</a></li>
                                        <?php } ?>
                                        <?php if ($_SESSION['level'] == 'admin') { ?>
                                            <li><a href="<?= BASE_URL; ?>/Pegawai">Data Pegawai</a></li>
                                        <?php } ?>
                                        <?php if ($_SESSION['level'] == 'pegawai') { ?>
                                            <li><a href="<?= BASE_URL; ?>/Pegawai/userPegawai">Data Pribadi Pegawai</a></li>

                                        <?php } ?>
                                        <?php if ($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'guru') { ?>
                                            <li><a href="<?= BASE_URL; ?>/Siswa">Data Siswa</a></li>
                                            <li><a href="<?= BASE_URL; ?>/kurikulum">Data Kurikulum</a></li>
                                            <li><a href="<?= BASE_URL; ?>/Ujian">Data Ujian</a></li>
                                        <?php } ?>
                                        <?php if ($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'pegawai') { ?>
                                            <li><a href="<?= BASE_URL; ?>/Sarana">Data Sarana</a></li>
                                            <li><a href="<?= BASE_URL; ?>/Surat/tb_surat">Data Surat</a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <?php if ($_SESSION['level'] == 'admin') { ?>
                                    <li><a><i class="fa fa-home"></i>User Management<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <?php if ($_SESSION['level'] == 'admin') { ?>
                                                <li><a href="<?= BASE_URL; ?>/management">Management</a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- modal tambah data-->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= BASE_URL; ?>/images/img.jpg" alt=""><?= user()->username; ?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= BASE_URL; ?>/Logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->