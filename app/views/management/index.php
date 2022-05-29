z<!-- page content -->
<div class="right_col" role="main">
    <div class="">


        <div class="clearfix"></div>



        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small> User Management </small></h2>
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
                            <?php Flashh::flashManagement(); ?>
                                <p class="text-muted font-13 m-b-30">
                                    Data Management User
                                </p>
                                <table id="datatable" class="table table-striped table-bordered" style="width:80%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Nip</th>
                                            <th>Level</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($data['login'] as $login) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $login['username'] ?></td>
                                                <td><?= $login['nip'] ?></td>
                                                <td>
                                                    <div class="btn-group btn-group-sm" role="group">
                                                        <a style="color: white;" class="btn btn-secondary"><?= $login['level']; ?></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                <a class="btn btn-secondary" onclick="return confirm('Anda Yakin Ingin Menghapus Data');" href="<?= BASE_URL; ?>/Management/hapusManagement/<?= $login['admin_id']; ?>"><i class="fa fa-trash"></i></a>
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