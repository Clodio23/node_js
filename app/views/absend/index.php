<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Pengisian Data Absen</h3>
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Absen <small>Data</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="#">Settings 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form method="POST" action="<?= BASE_URL; ?>/Absend/tambahabsend" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="item form-group">

                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" aria-label="Default select example" type="text" name="nama" id="nama">
                                </div>
                            </div>
                            <div class="item form-group">

                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Absen<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="absen" id="absen" class="form-control" aria-label="Default select example">
                                        <option selected>pilihan Absen...</option>
                                        <option value="masuk">Masuk</option>
                                        <option value="keluar">Keluar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">

                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Keterangan<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="keterangan" id="keterangan" class="form-control" aria-label="Default select example">
                                        <option selected>pilihan Keterangan...</option>
                                        <option value="hadir">Hadir</option>
                                        <option value="Ijin">Ijin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Bukti Absen<span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3 ">
                                    <input class="form-control" name="file" type="file">

                                </div>

                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Waktu Absen<span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3 ">
                                    <input class="form-control" name="time" id="time" type="time">

                                </div>

                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" name="action" class="btn btn-success">Save</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>