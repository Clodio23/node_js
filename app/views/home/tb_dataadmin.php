            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Tabel Kumpulan Data : <small><?= $data['nama']; ?></small></h2>
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
                                            <?php Flashh::flash(); ?>
                                            <span><button type="button" class="btn btn-primary tambah" data-bs-toggle="modal" data-bs-target="#formtambah">
                                                    <i class="fa fa-plus"></i> Tambah Data
                                                </button></span>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:120%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nip</th>
                                                        <th>gambar</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>No Telepon</th>
                                                        <th>Status Pegawai</th>
                                                        <th>Jabatan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>


                                                <tbody style="text-align: center;">
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($data['admin'] as $admin) : ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $admin['nip']; ?></td>
                                                            <td><img src="<?= BASE_URL; ?>/upload/guru/img/<?= $admin['img']; ?>" alt="" width="100"></td>
                                                            <td><?= $admin['nama_lengkap']; ?></td>
                                                            <td><?= $admin['jenis_kelamin']; ?></td>
                                                            <td><?= $admin['no_hp']; ?></td>
                                                            <td><?= $admin['status_pegawai']; ?></td>
                                                            <td><?= $admin['jabatan']; ?></td>
                                                            <td>

                                                                <div class="btn-group btn-group-sm" role="group">

                                                                    <a href="<?= BASE_URL; ?>/Dashboard/detail/<?= $admin['id']; ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>

                                                                    <a href="" class="btn btn-success tombolEditGuru" data-bs-toggle="modal" data-bs-target="#formtambah" data-id="<?= $admin['id']; ?>"><i class="fa fa-pencil-square-o"></i></a>


                                                                    <a class="btn btn-secondary" onclick="return confirm('Anda Yakin Ingin Menghapus Data');" href="<?= BASE_URL; ?>/Dashboard/hapusadmin/<?= $admin['id']; ?>"><i class="fa fa-trash"></i></a>

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
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="x_content">
                                    <h5 class="" id="formModalLabel" style="text-align: center;">Pegawai</h5>
                                    <br>
                                    <form id="demo-form2" enctype="multipart/form-data" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST" action="<?= BASE_URL; ?>/Dashboard/tambahadmin">
                                        <div class="container">
                                            <div class="row g-0">

                                                <input hidden type="text" id="id" name="id">
                                                <input hidden type="text" id="admin_id" name="admin_id">

                                                <!-- biodata -->
                                                <div class="col-md-6">
                                                    <div class="item form-group ">
                                                        <label class="col-form-label  col-sm-3 label-align" for="first-name">NIP <span class="required">:</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="number" id="nip" name="nip" required="required" class="form-control ">
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
                                                        <div class="col-md-9">
                                                            <input type="text" id="tgl_lahir" name="tgl_lahir" required="required" class="form-control">
                                                            <span>Catatan Contoh : Ambon, 20/01/2000</span>
                                                        </div>

                                                    </div>

                                                    <div class="item form-group ">
                                                        <label for="jenis_kelamin" class="col-form-label  col-sm-3 label-align">Jenis Kelamin :</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control form-select" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin">
                                                                <option selected>pilihan...</option>
                                                                <option value="laki-laki">Laki-Laki</option>
                                                                <option value="perempuan">Perempuan</option>
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

                                                <div class="col-md-4">
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
                                                    <input type="hidden" id="tgl_inputdata" name="tgl_inputdata">
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
            </div>
            <!-- /page content -->