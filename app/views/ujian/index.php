            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Tabel Kumpulan Data : <small><?= $data['judul']; ?></small></h2>
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
                                            <?php Flashh::flashUjian(); ?>
                                            <span><button type="button" class="btn btn-primary tombolTambahDataUjian" data-bs-toggle="modal" data-bs-target="#formtambah">
                                                    <i class="fa fa-plus"></i> Tambah Data
                                                </button></span>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:120%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Ujian</th>
                                                        <th>Semester</th>
                                                        <th>Tahun Ajaran</th>
                                                        <th>Tanggal Ujian</th>
                                                        <th>Mata Pelajaran</th>
                                                        <th>Kelas</th>
                                                        <th>Pengampu</th>
                                                        <th>File Ujian</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($data['ujian'] as $ujian) : ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $ujian['nama_ujian']; ?></td>
                                                            <td><?= $ujian['semester']; ?></td>
                                                            <td><?= $ujian['tahun_ajaran']; ?></td>
                                                            <td><?= $ujian['tanggal_ujian']; ?></td>
                                                            <td><?= $ujian['mata_pelajaran']; ?></td>
                                                            <td><?= $ujian['kelas']; ?></td>
                                                            <td><?= $ujian['pengampu']; ?></td>
                                                            <td><a href="<?= BASE_URL; ?>/upload/ujian/<?= $ujian['file_ujian']; ?>"><?= $ujian['file_ujian']; ?></a></td>
                                                            <td>
                                                                <div class="btn-group btn-group-sm" role="group">
                                                                    <a href="" class="btn btn-success tampilEditlUjian" data-bs-toggle="modal" data-bs-target="#formtambah" data-id="<?= $ujian['id_ujian']; ?>"><i class="fa fa-pencil-square-o"></i></a>

                                                                    <a class="btn btn-secondary" onclick="return confirm('Anda Yakin Ingin Menghapus Data');" href="<?= BASE_URL; ?>/Ujian/hapus/<?= $ujian['id_ujian']; ?>"><i class="fa fa-trash"></i></a>

                                                                    <a class="btn btn-primary" href="<?= BASE_URL; ?>/upload/ujian/<?= $ujian['file_ujian']; ?>"><i class="fa fa-download"></i></a>
                                                                </div>
                                                            </td>
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
            <!-- Modal form Tambah -->
            <div class="modal fade" id="formtambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="formModalLabel">Tambah Data Ujian</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="x_content">
                                    <br />
                                    <form method="POST" action="<?= BASE_URL; ?>/Ujian/tambahUjian" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                        <input hidden type="text" name="id_ujian" id="id_ujian">


                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Ujian <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="nama_ujian" id="nama_ujian" type="text" placeholder="Nama Ujian">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Semester<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="semester" id="semester" type="text" placeholder="Semester">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tahun Ajaran<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="tahun_ajaran" id="tahun_ajaran" type="text" placeholder="Tahun Ajaran">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Ujian <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="tanggal_ujian" id="tanggal_ujian" type="date">
                                            </div>
                                        </div>

                                        <div class="item form-group">

                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mata Pelajaran<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="mata_pelajaran" id="mata_pelajaran" type="text" placeholder="Mata Pelajaran">
                                            </div>
                                        </div>
                                        <div class="item form-group">

                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kelas<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="kelas" id="kelas" type="text" placeholder="Isi Kelas">

                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Pengampu<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="pengampu" id="pengampu" type="text" placeholder="Pengampu">
                                                <span> *Pengampu*</span>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Upload File Siswa<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-3 ">
                                                <input class="form-control" name="file_ujian" id="file_ujian" type="file">

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