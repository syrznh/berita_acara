<?= $this->extend('dashboard/layouts/master') ?>

<?= $this->section('title') ?>
<title>Dashboard - Berita Acara</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php $nama = session()->get('nama'); ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h2 class="h3 mb-0 text-gray-800">
        Selamat Datang <?php echo ucwords($nama) ?>
    </h2>
</div>


<!-- Content Row -->
<div class="row">

    <!-- Area Chart -->
    <div class="col-xl">
        <div class="card shadow mb-4">

            <!-- DataTables Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h6 class="m-0 font-weight-bold text-primary">Data Berita Acara</h6>
                        <?php if (session()->get('role') == 1) { ?>
                            <a href="<?php echo base_url('/transaksi') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fa fa-plus-square fa-sm text-white-50"></i>
                                Tambah Data
                            </a>
                        <?php } elseif (session()->get('role') == 2) { ?>
                            <a href="<?php echo base_url('/transaksi') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fa fa-plus-square fa-sm text-white-50"></i>
                                Tambah Data
                            </a>
                        <?php } else { ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm dt-responsive wrap" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Jenis Berita Acara</th>
                                    <th>Judul Pekerjaan</th>
                                    <th>Jenis Pekerjaan</th>
                                    <th>Document</th>
                                    <th>Persentase</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($transaksi as $key) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $key['nama_ba']; ?></td>
                                        <td><?= $key['judul_pekerjaan']; ?></td>
                                        <td><?= $key['jenis_pekerjaan']; ?></td>
                                        <td><?= $key['tipe_dokumen']; ?></td>
                                        <td><?= $key['persentase']; ?></td>
                                        <td><?= $key['keterangan']; ?></td>
                                        <td>
                                            <a href="" class="d-none d-sm-inline-block btn btn-info btn-sm shadow-sm">
                                                <i class="fa fa-info-circle"></i>
                                            </a>
                                            <br>
                                            <?php if (session()->get('role') == 1) { ?>
                                                <a href="" class="d-none d-sm-inline-block btn btn-warning btn-sm shadow-sm">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <br>
                                                <a href="" class="d-none d-sm-inline-block btn btn-danger btn-sm shadow-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            <?php } elseif (session()->get('role') == 2) { ?>
                                                <a href="" class="d-none d-sm-inline-block btn btn-warning btn-sm shadow-sm">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <br>
                                                <a href="" class="d-none d-sm-inline-block btn btn-danger btn-sm shadow-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            <?php } else { ?>
                                            <?php } ?>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div> -->
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>