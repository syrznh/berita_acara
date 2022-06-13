<?= $this->extend('dashboard/layouts/master') ?>

<?= $this->section('title') ?>
<title>Data User - Berita Acara</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl">
        <h2 class="h3 mb-3 text-gray-800">Data Master</h2>
        <?php if (session()->getFlashdata('success')) :  ?>
            <div class="my-2 alert alert-secondary" role="alert">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php endif; ?>
        <div class="card shadow mt-4 mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Master User</h6>
                <a href="<?= route_to('usersCreate') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fa fa-plus-square fa-sm text-white-50"></i>
                    Tambah Data
                </a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <table class="table dt-responsive nowrap" id="dataTable" width="100%">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Nama</td>
                            <td>Email</td>
                            <td>Username</td>
                            <td>Role</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $key) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $key['nama']; ?></td>
                                <td><?= $key['email']; ?></td>
                                <td><?= $key['username']; ?></td>
                                <td><?= $key['name_role']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('/users/edit/' . $key['id']); ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                    <a href="<?php echo base_url('/users/delete/' . $key['id']); ?>" onclick="return confirm('Yakin untuk menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>