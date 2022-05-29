            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="row" style="display: inline-block;">
                    <div class="tile_count">
                        <div class="col-md-3 col-sm-4  tile_stats_count ">
                            <span class="count_top"><i class="fa fa-user"></i> Total Data Guru</span>
                            <div class="count"><?= db_guru('tb_guru'); ?></div>
                        </div>
                        <div class="col-md-3 col-sm-4  tile_stats_count ">
                            <span class="count_top"><i class="fa fa-user"></i> Total Data Pegawai</span>
                            <div class="count"><?= db_pegawai('tb_pegawai'); ?></div>
                        </div>
                        <div class="col-md-3 col-sm-4  tile_stats_count ">
                            <span class="count_top"><i class="fa fa-user"></i> Total Data Siswa</span>
                            <div class="count green"><?= db_siswa('tb_siswa'); ?></div>
                        </div>
                        <div class="col-md-3 col-sm-4  tile_stats_count ">
                            <span class="count_top"><i class="fa fa-user"></i> Total Data Kurikulum</span>
                            <div class="count"><?= db_kurikulum('tb_kurikulum'); ?></div>
                        </div>
                        <div class="col-md-3 col-sm-4  tile_stats_count ">
                            <span class="count_top"><i class="fa fa-user"></i> Total Data Ujian</span>
                            <div class="count"><?= db_ujian('tb_ujian'); ?></div>
                        </div>
                        <div class="col-md-3 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> Total Data Sarana</span>
                            <div class="count"><?= db_sarana('tb_sarana'); ?></div>
                        </div>
                        <div class="col-md-3 col-sm-4  tile_stats_count ">
                            <span class="count_top"><i class="fa fa-user"></i> Total Data Surat</span>
                            <div class="count"><?= db_surat('tb_surat'); ?></div>
                        </div>
                    </div>
                </div>
                <!-- /top tiles -->

                <br />

                <div class="row">


                    <div class="col-md-10 col-sm-4 ">
                        <div class="x_panel tile fixed_height_620">
                            <div class="x_title">
                                <h2>Pesentasi Data</h2>
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
                                <div class="widget_summary">
                                    <div class="w_left w_25">
                                        <span>Data Guru</span>
                                    </div>
                                    <div class="w_center w_55">
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?= db_guru('tb_admin') ?>%;">
                                                <span class="sr-only"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="widget_summary">
                                    <div class="w_left w_25">
                                        <span>Data Pegawai</span>
                                    </div>
                                    <div class="w_center w_55">
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: <?= db_pegawai('tb_pegawai') ?>%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget_summary">
                                    <div class="w_left w_25">
                                        <span>Data Siswa</span>
                                    </div>
                                    <div class="w_center w_55">
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?= db_siswa('tb_siswa') ?>%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget_summary">
                                    <div class="w_left w_25">
                                        <span>Data Kurikulum</span>
                                    </div>
                                    <div class="w_center w_55">
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: <?= db_kurikulum('tb_kurikulum') ?>%;">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget_summary">
                                    <div class="w_left w_25">
                                        <span>Data Ujian</span>
                                    </div>
                                    <div class="w_center w_55">
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?= db_ujian('tb_ujian') ?>%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget_summary">
                                    <div class="w_left w_25">
                                        <span>Data Sarana</span>
                                    </div>
                                    <div class="w_center w_55">
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?= db_sarana('tb_sarana') ?>%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget_summary">
                                    <div class="w_left w_25">
                                        <span>Data Surat</span>
                                    </div>
                                    <div class="w_center w_55">
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?= db_surat('tb_surat') ?>%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w_right w_20">

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10 col-sm-4 ">
                        <div class="x_panel tile fixed_height_620">
                            <div class="x_title">
                                <h2>Lokasi SMP NEGERI 7 AMBON</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="widget_summary">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.6944938146257!2d128.18296761431947!3d-3.6569170438361467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce8d4717cc3c5%3A0x66560b9178e8120e!2sSMP%20Negeri%207%20Ambon!5e0!3m2!1sid!2sid!4v1652193359229!5m2!1sid!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->