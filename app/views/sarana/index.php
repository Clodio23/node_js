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
                                            <?php Flashh::flashSarana(); ?>
                                            <span><button type="button" class="btn btn-primary tombolTambahDataSarana" data-bs-toggle="modal" data-bs-target="#formtambah">
                                                    <i class="fa fa-plus"></i> Tambah Data
                                                </button></span>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:120%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Jenis Sarana</th>
                                                        <th>Letak</th>
                                                        <th>Kepemilikan</th>
                                                        <th>Spesifikasi</th>
                                                        <th>Jumlah</th>
                                                        <th>Laik</th>
                                                        <th>Tidak Laik</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>


                                                <tbody style="text-align: center;">
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($data['sarana'] as $sarana) : ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $sarana['jenis_sarana']; ?></td>
                                                            <td><?= $sarana['letak']; ?></td>
                                                            <td><?= $sarana['kepemilikan']; ?></td>
                                                            <td><?= $sarana['spesifikasi']; ?></td>
                                                            <td><?= $sarana['jumlah']; ?></td>
                                                            <td><?= $sarana['laik']; ?></td>
                                                            <td><?= $sarana['tidak_laik']; ?></td>
                                                            <td>
                                                                <div class="btn-group btn-group-sm" role="group">
                                                                    <a href="" class="btn btn-success tampilEditSarana" data-bs-toggle="modal" data-bs-target="#formtambah" data-id="<?= $sarana['id_sarana']; ?>"><i class="fa fa-pencil-square-o"></i></a>

                                                                    <a class="btn btn-secondary" onclick="return confirm('Anda Yakin Ingin Menghapus Data');" href="<?= BASE_URL; ?>/Sarana/hapus/<?= $sarana['id_sarana']; ?>"><i class="fa fa-trash"></i></a>
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
                            <h4 id="formModalLabel">tes</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="x_content dio">
                                    <br />
                                    <form method="POST" action="<?= BASE_URL; ?>/Sarana/tambahSarana" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        <input hidden type="text" name="id_sarana" id="id_sarana">

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Sarana <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="jenis_sarana" id="jenis_sarana" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Letak <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="letak" id="letak" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Kepemilikan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="kepemilikan" id="kepemilikan" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Spesifikasi <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="spesifikasi" id="spesifikasi" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="jumlah" id="jumlah" type="number">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Laik<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="laik" id="laik" type="number">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tidak Laik<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input class="form-control" name="tidak_laik" id="tidak_laik" type="number">
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