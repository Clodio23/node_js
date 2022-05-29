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
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
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
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($data['absend'] as $absend) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?php echo "$absend->nama"; ?></td>
                                                <td><?php echo "$absend->absen"; ?></td>
                                                <td><?php echo "$absend->keterangan"; ?></td>
                                                <td><?php echo "$absend->file"; ?></td>
                                                <td><?php echo "$absend->time"; ?></td>
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