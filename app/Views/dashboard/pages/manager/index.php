<?= $this->extend('dashboard/layouts/master') ?>
<?= $this->section('content') ?>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header"></div>
                        <a class="dropdown-item" href="#">Tambah Data</a>
                        <a class="dropdown-item" href="#">Hapus data</a>
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