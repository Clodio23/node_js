            <!-- page content -->
            <div class="right_col" role="main">
                
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><?= $data['admin']['nip']; ?> <small><?= $data['nama']; ?></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="col-md-3 col-sm-3  profile_left">
                                        <div class="profile_img">
                                            <div id="crop-avatar">
                                                <!-- Current avatar -->
                                                <img width="100%" class="img-responsive avatar-view" src="<?= BASE_URL; ?>/upload/<?= $data['admin']['img']; ?>" alt="<?= $data['admin']['img']; ?>" title="Change the avatar">
                                            </div>
                                        </div>
                                        <h3><?= $data['admin']['nama_lengkap']; ?></h3>

                                        <ul class="list-unstyled user_data">
                                            <li><i class="fa fa-map-marker user-profile-icon"></i> <?= $data['admin']['alamat']; ?>
                                            </li>

                                            <li>
                                                <i class="fa fa-briefcase user-profile-icon"></i> <?= $data['admin']['jabatan']; ?>
                                            </li>

                                            <li class="m-top-xs">
                                                <i class="fa fa-external-link user-profile-icon"></i>
                                                <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                                            </li>
                                        </ul>

                                        <a class="btn btn-primary" style="color: white;"><i class="fa fa-pencil"></i> Edit Profile</a>
                                         <a href="<?= BASE_URL; ?>/Dashboard/tb_dataadmin" class="btn btn-secondary" style="color: white;"><i class="fa fa-angle-double-left"></i> Kembali</a>
                                        <br>

                                        <!-- start skills -->
                                        <!-- <h4>Skills</h4>
                                    <ul class="list-unstyled user_data">
                                        <li>
                                            <p>Web Applications</p>
                                            <div class="progress progress_sm">
                                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="49" style="width: 50%;"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>Website Design</p>
                                            <div class="progress progress_sm">
                                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70" aria-valuenow="69" style="width: 70%;"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>Automation &amp; Testing</p>
                                            <div class="progress progress_sm">
                                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30" aria-valuenow="29" style="width: 30%;"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>UI / UX</p>
                                            <div class="progress progress_sm">
                                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="49" style="width: 50%;"></div>
                                            </div>
                                        </li>
                                    </ul> -->
                                        <!-- end of skills -->

                                    </div>
                                    <div class="col-md-9 col-sm-9 ">

                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Daftar Kegiatan</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Data Diri</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Aktifitas</a>
                                                </li>
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">

                                                    <!-- start recent activity -->
                                                
                                                    <ul class="messages">
                                                        <li>
                                                            <img src="<?= BASE_URL; ?>/upload/<?= $data['admin']['img']; ?>" class="avatar" alt="Avatar">
                                                            <div class="message_date">
                                                                <h3 class="date text-info"><?= date('D,d', strtotime($data['admin']['tgl_inputdata'])); ?></h3>
                                                                <p class="month"><?= date('M Y', strtotime($data['admin']['tgl_inputdata'])); ?></p>
                                                            </div>
                                                            <div class="message_wrapper">
                                                                <h4 class="heading"><?= $data['admin']['nama_lengkap']; ?></h4>
                                                                <blockquote class="message">
                                                                    NIP : <?= $data['admin']['nip']; ?> <br>
                                                                    Password : <?= $data['admin']['password']; ?><br>
                                                                    NIK : <?= $data['admin']['nik']; ?> <br>
                                                                    TTL.Lahir : <?= $data['admin']['tgl_lahir']; ?><br>
                                                                    Jenis Kelamin : <?= $data['admin']['jenis_kelamin']; ?><br>
                                                                    Agama : <?= $data['admin']['agama']; ?><br>
                                                                    No.HP : <?= $data['admin']['no_hp']; ?><br>
                                                                    Email : <?= $data['admin']['alamat_email']; ?><br>
                                                                    Alamat : <?= $data['admin']['alamat']; ?><br>
                                                                    NUPTK : <?= $data['admin']['nuptk']; ?><br>
                                                                    Bidang Studi : <?= $data['admin']['bidang_studi']; ?><br>
                                                                    Jabatan : <?= $data['admin']['jabatan']; ?><br>
                                                                    Tambhan Tugas : <?= $data['admin']['tugas_tambahan']; ?> <br>
                                                                    Status Pegawai : <?= $data['admin']['status_pegawai']; ?><br>
                                                                    Status Keaktifan : <?= $data['admin']['status_keaktifan']; ?><br>
                                                                    Status Nikah : <?= $data['admin']['status_nikah']; ?><br>
                                                                    TMT.Cpns : <?=$data['admin']['tmt_cpns']; ?><br>
                                                                    TMT.Pangkat : <?= $data['admin']['tmt_pangkat']; ?><br>
                                                                    Pangkat Golongan : <?= $data['admin']['pangkat_golongan']; ?><br>
                                                                    Sumbar Gaji : <?= $data['admin']['sumber_gaji']; ?><br>
                                                                    NPWP : <?= $data['admin']['npwp']; ?><br>
                                                                    File : <a href="<?= BASE_URL; ?>/upload/</a><?= $data['admin']['file']; ?>">Download File</a>


                                                                </blockquote>
                                                                <br>
                                                                <p class="url">
                                                                    <span class="fs1 text-info" aria-hidden="true" data-icon="???"></span>
                                                                    <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                                                </p>
                                                            </div>
                                                        </li>

                                                    </ul>

                                                    <!-- end recent activity -->

                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                                    <!-- start user projects -->
                                                    <table class="data table table-striped no-margin">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Project Name</th>
                                                                <th>Client Company</th>
                                                                <th class="hidden-phone">Hours Spent</th>
                                                                <th>Contribution</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>New Company Takeover Review</td>
                                                                <td>Deveint Inc</td>
                                                                <td class="hidden-phone">18</td>
                                                                <td class="vertical-align-mid">
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-success" data-transitiongoal="35" aria-valuenow="35" style="width: 35%;"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <!-- <tr>
                                                            <td>2</td>
                                                            <td>New Partner Contracts Consultanci</td>
                                                            <td>Deveint Inc</td>
                                                            <td class="hidden-phone">13</td>
                                                            <td class="vertical-align-mid">
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-danger" data-transitiongoal="15" aria-valuenow="15" style="width: 15%;"></div>
                                                                </div>
                                                            </td>
                                                        </tr> -->
                                                        </tbody>
                                                    </table>
                                                    <!-- end user projects -->

                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                                        photo booth letterpress, commodo enim craft beer mlkshk </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
            </div>
            <!-- /page content -->