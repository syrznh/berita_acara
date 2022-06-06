<?= $this->extend('dashboard/layouts/master') ?>
<?= $this->section('content') ?>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl">
        <h1>Data Master</h1>
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
                                <td><?= $key['role_name']; ?></td>
                                <td>
                                    <a href="" class="d-none d-sm-inline-block btn btn-warning btn-sm shadow-sm">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <a href="" class="d-none d-sm-inline-block btn btn-danger btn-sm shadow-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
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