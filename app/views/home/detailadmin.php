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
                                            <img width="100%" class="img-responsive avatar-view" src="<?= BASE_URL; ?>/upload/guru/img/<?= $data['admin']['img']; ?>" alt="<?= $data['admin']['img']; ?>" title="Change the avatar">
                                        </div>
                                    </div>
                                    <h3><?= $data['admin']['nama_lengkap']; ?></h3>

                                    <ul class="list-unstyled user_data">
                                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?= $data['admin']['alamat']; ?>
                                        </li>

                                        <li>
                                            <i class="fa fa-archive user-profile-icon"></i> <?= $data['admin']['jabatan']; ?>
                                        </li>

                                        <!-- <li class="m-top-xs">
                                            <i class="fa fa-external-link user-profile-icon"></i>
                                            <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                                        </li> -->
                                    </ul>
                                    <!-- <span><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formtambah">
                                            <i class="fa fa-pencil"></i> Edit Profile
                                        </button></span> -->
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
                                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Data Diri</a>
                                            </li>
                                           
                                            <!-- <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Aktifitas</a>
                                            </li> -->
                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">

                                                <!-- start recent activity -->

                                                <ul class="messages">
                                                    <li>
                                                        <img src="<?= BASE_URL; ?>/upload/guru/img/<?= $data['admin']['img']; ?>" class="avatar" alt="Avatar">
                                                        <div class="message_date">
                                                            <h3 class="date text-info"><?= date('D,d', strtotime($data['admin']['tgl_inputdata'])); ?></h3>
                                                            <p class="month"><?= date('M Y', strtotime($data['admin']['tgl_inputdata'])); ?></p>
                                                        </div>
                                                        <div class="message_wrapper">
                                                            <h4 class="heading"><?= $data['admin']['nama_lengkap']; ?></h4>
                                                            <blockquote class="message">
                                                                <div class="container" style="font-size:17px; color:#06113C;">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            NIP : <?= $data['admin']['nip']; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            Password : <?= $data['admin']['password']; ?>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-6">
                                                                            NIK : <?= $data['admin']['nik']; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            TTL.Lahir : <?= $data['admin']['tgl_lahir']; ?>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-6">
                                                                            Jenis Kelamin : <?= $data['admin']['jenis_kelamin']; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            Agama : <?= $data['admin']['agama']; ?>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-6">
                                                                            No.HP : <?= $data['admin']['no_hp']; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            Email : <?= $data['admin']['alamat_email']; ?>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-6">
                                                                            Alamat : <?= $data['admin']['alamat']; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            NUPTK : <?= $data['admin']['nuptk']; ?>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-6">
                                                                            Bidang Studi : <?= $data['admin']['bidang_studi']; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            Jabatan : <?= $data['admin']['jabatan']; ?>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-6">
                                                                            Tambahan Tugas : <?= $data['admin']['tugas_tambahan']; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            Status Pegawai : <?= $data['admin']['status_pegawai']; ?>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-6">
                                                                            Status Keaktifan : <?= $data['admin']['status_keaktifan']; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            Status Nikah : <?= $data['admin']['status_nikah']; ?>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-6">
                                                                            TMT.Cpns : <?= $data['admin']['tmt_cpns']; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            TMT.Pangkat : <?= $data['admin']['tmt_pangkat']; ?>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-6">
                                                                            Pangkat Golongan : <?= $data['admin']['pangkat_golongan']; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            Sumbar Gaji : <?= $data['admin']['sumber_gaji']; ?>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-6">
                                                                            NPWP : <?= $data['admin']['npwp']; ?>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            File : <?= $data['admin']['file']; ?> <a class="btn btn-info btn-sm" style="color:white;" href="<?= BASE_URL; ?>/upload/guru/file/<?= $data['admin']['file']; ?>"><i class="fa fa-save"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>





                                                            </blockquote>
                                                            <br>
                                                            <!-- <p class="url">
                                                                <span class="fs1 text-info" aria-hidden="true" data-icon="???"></span>
                                                                <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                                            </p> -->
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
            <!-- Modal form Tambah -->
            <div class="modal fade" id="formtambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="x_content">
                                    <h5 class="" style="text-align: center;">Edit Data</h5>
                                    <br>
                                    <form id="demo-form2" enctype="multipart/form-data" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST" action="<?= BASE_URL; ?>/Dashboard/tambahadmin">
                                        <div class="container">
                                            <div class="row g-0">

                                                <!-- biodata -->
                                                <div class="col-md-6">
                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="first-name">NIP <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="number" id="first-name" name="nip" required="required" class="form-control ">
                                                            <span style="font-size: 12px;">Catatan: Harap Isi Dengan Teliti !</span>
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="password">Password <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="password" name="password" required="required" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="nik">NIK <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="number" id="nik" name="nik" required="required" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="nama_lengkap">Nama Lengkap <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="nama_lengkap" name="nama_lengkap" required="required" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group">
                                                        <label class="col-form-label  col-sm-3 label-align" for="tgl_lahir">TTL <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-5">
                                                            <input type="text" id="tgl_lahir" name="tgl_lahir" required="required" class="form-control">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="date" id="tgl_lahir" name="tgl_lahir" required="required" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label for="jenis_kelamin" class="col-form-label  col-sm-3 label-align">Jenis Kelamin :</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control form-select" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin">
                                                                <option selected>pilihan...</option>
                                                                <option value="Laki-Laki">Laki-Laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label for="agama" class="col-form-label  col-sm-3 label-align">Agama :</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control form-select" aria-label="Default select example" id="agama" name="agama">
                                                                <option selected>pilihan...</option>
                                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                                <option value="Kristen Katolik">Kristen Katolik</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Buddha">Buddha</option>
                                                                <option value="Khonghucu">Khonghucu</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="no_hp">No.HP <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="number" id="no_hp" name="no_hp" required="required" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="alamat_email">Email<span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="alamat_email" name="alamat_email" required="required" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="alamat">Alamat <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="alamat" name="alamat" required="required" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="nuptk">NUPTK <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="nuptk" name="nuptk" required="required" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="bidang_studi">Bidang Studi <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="bidang_studi" name="bidang_studi" required="required" class="form-control ">
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- tutup biadata -->

                                                <!-- biodata kerja -->
                                                <div class="col-md-6">

                                                    <div class="item form-group ">
                                                        <label for="jabatan" class="col-form-label col-sm-3 label-align">Jabatan :</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control form-select" aria-label="Default select example" id="jabatan" name="jabatan">
                                                                <option selected>pilihan...</option>
                                                                <option value="Guru Madya">Guru Madya</option>
                                                                <option value="Guru Muda">Guru Muda</option>
                                                                <option value="Guru Pratama">Guru Pratama</option>
                                                                <option value="Guru Pembina">Guru Pembina</option>
                                                                <option value="Guru">Guru</option>
                                                                <option value="Pelaksana">Pelaksana</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="tugas_tambahan">Tugas Tambahan <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="tugas_tambahan" name="tugas_tambahan" required="required" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label for="status_pegawai" class="col-form-label  col-sm-3 label-align">Status Pegawai :</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control form-select" aria-label="Default select example" id="status_pegawai" name="status_pegawai">
                                                                <option selected>pilihan...</option>
                                                                <option value="PNS">PNS</option>
                                                                <option value="CPNS">CPNS</option>
                                                                <option value="Guru Honor Sekolah">Guru Honor Sekolah</option>
                                                                <option value="Tenaga Honor Sekolah">Tenaga Honor Sekolah</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label for="status_keaktifan" class="col-form-label  col-sm-3 label-align">Status Keaktifan :</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control form-select" aria-label="Default select example" id="status_keaktifan" name="status_keaktifan">
                                                                <option selected>pilihan...</option>
                                                                <option value="Aktif">Aktif</option>
                                                                <option value="Tidak Aktif">Tidak Aktif</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label for="status_nikah" class="col-form-label  col-sm-3 label-align">Status Nikah :</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control form-select" aria-label="Default select example" id="status_nikah" name="status_nikah">
                                                                <option selected>pilihan...</option>
                                                                <option value="Menikah">Menikah</option>
                                                                <option value="Belum Menikah">Belum Menikah</option>
                                                                <option value="Janda">Janda</option>
                                                                <option value="Duda">Duda</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="tmt_pns">TMT PNS <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="tmt_pns" name="tmt_pns" required="required" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="tmt_cpns">TMT CPNS <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="tmt_cpns" name="tmt_cpns" required="required" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="tmt_pangkat">TMT Pangkat <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="tmt_pangkat" name="tmt_pangkat" required="required" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="pangkat_golongan">Pangkat Golongan <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="pangkat_golongan" name="pangkat_golongan" required="required" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="sumber_gaji">Sumber Gaji <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="sumber_gaji" name="sumber_gaji" required="required" class="form-control ">
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="npwp">NPWP <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="npwp" name="npwp" required="required" class="form-control ">
                                                        </div>
                                                    </div>

                                                </div>

                                                <hr>

                                                <div class="col-md-6">
                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="img">Foto <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-12">
                                                            <input type="file" id="img" name="img" multiple="multiple" required="required" class="form-control "><span style="font-size: 12px;">Catatan: Harap Isi Dengan Format Yang Benar Yaitu : (jpg,jpeg,png) !</span>
                                                        </div>
                                                    </div>

                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="file">File <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-12">
                                                            <input type="file" id="file" name="file" required="required" class="form-control ">
                                                            <span style="font-size: 12px;">Catatan: Harap Isi Dengan Format Yang Benar Yaitu : (doc,docx,pdf) !</span>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" id="tgl_inputdata" name="tgl_inputdata" </div>
                                                </div>

                                            </div>
                                            <!-- tutp biodata kerja -->

                                            <div class="modal-footer ">
                                                <div class="item form-group">
                                                    <div class="">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button class="btn btn-primary" type="reset">Reset</button>
                                                        <button type="submit" name="action" class="btn btn-success">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tutup form tambah -->