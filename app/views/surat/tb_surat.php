            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Tabel Data Surat : <small><?= $data['nama']; ?></small></h2>
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
                                            <?php Flashh::flashSurat(); ?>
                                            <span><button type="button" class="btn btn-primary tombolTambahDataSurat" data-bs-toggle="modal" data-bs-target="#formtambah">
                                                    <i class="fa fa-plus"></i> Tambah Data
                                                </button></span>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:120%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nomor Surat</th>
                                                        <th>Perihal Surat</th>
                                                        <th>Instansi</th>
                                                        <th>Tanggal Surat</th>
                                                        <th>Tanggal Terima</th>
                                                        <th>FIle Surat</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <?php $no = 1; ?>
                                                <?php foreach ($data['admin'] as $admin) : ?>
                                                    <tr>
                                                        <td><?= $no++; ?></td>
                                                        <td><?= $admin['no_surat']; ?></td>
                                                        <td><?= $admin['perihal_surat']; ?></td>
                                                        <td><?= $admin['instansi']; ?></td>
                                                        <td><?= $admin['tanggal_surat']; ?></td>
                                                        <td><?= $admin['tanggal_terima']; ?></td>
                                                        <td><a href="<?= BASE_URL; ?>/upload/surat/<?= $admin['file_surat']; ?>"><?= $admin['file_surat']; ?></a></td>
                                                        <td>
                                                            <div class="btn-group btn-group-sm" role="group">

                                                                <a href="<?= BASE_URL; ?>/Surat/ubah/<?= $admin['id_surat']; ?>" class="btn btn-success tampilModalEditSurat" data-bs-toggle="modal" data-bs-target="#formtambah" data-id="<?= $admin['id_surat']; ?>"><i class="fa fa-pencil-square-o"></i></a>

                                                                <a class="btn btn-secondary" onclick="return confirm('Anda Yakin Ingin Menghapus Data');" href="<?= BASE_URL; ?>/Surat/hapusSurat/<?= $admin['id_surat']; ?>"><i class="fa fa-trash"></i></a>

                                                                <a class="btn btn-primary" href="<?= BASE_URL; ?>/upload/surat/<?= $admin['file_surat']; ?>"><i class="fa fa-download"></i></a>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <tbody style="text-align: center;">


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
            <!-- Modal form Tambah -->
            <div class="modal fade" id="formtambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="x_content">
                                    <br />
                                    <form method="POST" action="<?= BASE_URL; ?>/Surat/tambahSurat" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                        <input type="hidden" name="id_surat" id="id_surat">

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">No Surat<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="no_surat" id="no_surat" type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Perihal Surat<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="perihal_surat" id="perihal_surat" type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Instansi<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="instansi" id="instansi" type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Surat<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="tanggal_surat" id="tanggal_surat" type="date">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Terima<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="tanggal_terima" id="tanggal_terima" type="date">
                                            </div>
                                        </div>
                                        <!-- <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kelas<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="kelas" class="form-control" aria-label="Default select example">
                                                    <option selected>Pilih Kelas</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div> -->

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Uploud File Surat<span class="required">*</span>
                                            </label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input class="form-control" name="file_surat" id="file_surat" type="file">

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
            <!-- /page content -->