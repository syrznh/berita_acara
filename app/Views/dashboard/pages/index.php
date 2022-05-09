<?= $this->extend('dashboard/layouts/master') ?>
<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        Selamat Datang
        <?php
        if (session()->get('role') == 1) {
            echo "Admin";
        } elseif (session()->get('role') == 2) {
            echo "User";
        } else {
            echo "Management";
        }
        ?>
    </h1>

    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Berita Acara </h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Add Berita Acara</a>
                        <a class="dropdown-item" href="#">Delete Berita </a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <table class="table dt-responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Jenis Berita Acara</td>
                            <td>Judul Pekerjaan</td>
                            <td>Jenis Pekerjaan</td>
                            <td>Document</td>
                            <td>Persentase</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Berita Acara Penuh</td>
                            <td>Pekerjaan Sewa Komputer X</td>
                            <td>Non Rutin</td>
                            <td>BA 100%</td>
                            <td>100%</td>
                            <td>Selesai</td>
                        </tr>
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