<!-- page content -->
<div class="right_col" role="main">
    <div class="">


        <div class="clearfix"></div>



        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>Data Absen</small></h2>
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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <?php Flashh::flashAbsen(); ?>
                                <p class="text-muted font-13 m-b-30">
                                    Data Uploud Yang Telah di Isi Oleh Guru/Pegawai
                                </p>
                                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Absen</th>
                                            <th>Keterangan</th>
                                            <th>Bukti</th>
                                            <th>Waktu</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($data['absend'] as $absend) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $absend['nama']; ?></td>
                                                <td><?= $absend['absen']; ?></td>
                                                <td><?= $absend['keterangan']; ?></td>
                                                <td><?= $absend['file']; ?></td>
                                                <td><?= $absend['time']; ?> </td>
                                                <td>
                                                    <div class="btn-group btn-group-sm" role="group">
                                                        <a class="btn btn-success tampilModalAbsend" data-bs-toggle="modal" data-bs-target="#formtambah" data-id="<?= $absend['id']; ?>" href="<?= BASE_URL; ?>/Absend/edit/<?= $absend['id']; ?>"><i class="fa fa-pencil-square-o"></i></i></a>

                                                        <a class="btn btn-secondary" onclick="return confirm('Anda Yakin Ingin Menghapus Data');" href="<?= BASE_URL; ?>/Absend/hapusAbsen/<?= $absend['id']; ?>"><i class="fa fa-trash"></i></a>

                                                        <a class="btn btn-primary" href="<?= BASE_URL; ?>/upload/absensi/<?= $absend['file']; ?>"><i class="fa fa-download"></i></a>
                                                    </div>
                                                </td>
                            </div>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        </table>
                        </div>
                    </div>
                </div>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="formModalLabel">Tambah data Siswa</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="x_content">
                        <br />
                        <form method="POST" action="<?= BASE_URL; ?>/Siswa/tambahDataSiswa" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <input hidden type="text" name="id" id="id">
                            <input hidden type="text" name="admin_id" id="admin_id">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" name="nama" id="nama" type="text">
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
                                        <option selected>pilihan Absen...</option>
                                        <option value="hadir">Hadir</option>
                                        <option value="ijin">Ijin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Bukti<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-3 ">
                                    <input class="form-control" name="file" id="file" type="text">

                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Waktu Absen<span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 ">
                                        <input class="form-control" name="time" id="time" type="time">

                                    </div>

                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" name="action" class="btn btn-success">Submit</button>
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
</div>