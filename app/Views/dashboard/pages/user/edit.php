<?= $this->extend('dashboard/layouts/master') ?>

<?= $this->section('title') ?>
<title>Edit Data User - Berita Acara</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Row -->

<div class="row">
    <!-- Area Chart -->
    <div class="col-xl">
        <h2>Ubah Data User</h2>
        <div class="card shadow mt-4 mb-4">
            <!-- Card Body -->
            <div class="card-body">
                <!-- Content Row -->
                <div class="row">
                    <div class="col">
                        <?php if ($error) { ?>
                            <div class="alert alert-danger">
                                <strong>Maaf!</strong> Terjadi Kesalahan:
                                <ul>
                                    <?php foreach ($error as $e) { ?>
                                        <li><?php echo $e ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                        <?php if ($email) { ?>
                            <div class="alert alert-danger w-100 mx-auto">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong><?php echo $email ?></strong>
                            </div>
                        <?php } ?>
                        <form action="<?php echo base_url('' . $user['id']); ?>" method="post" enctype="multipart/form-data" class="mt-3 mx-5 my-4">
                            <?= csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" name="nama" placeholder="Masukkan Nama" value="<?= $user['nama'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control form-control-sm" name="email" placeholder="Masukkan Email" value="<?= $user['email'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" name="username" placeholder="Masukkan Username" value="<?= $user['username'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control form-control-sm" name="password" placeholder="Masukkan Password">
                                </div>
                            </div>
                            <fieldset class="form-group row">
                                <legend class="col-form-label col-sm-2 float-sm-left pt-0">Role</legend>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" value="admin">
                                        <label class="form-check-label" for="">Admin</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" value="user">
                                        <label class="form-check-label" for="">User</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" value="management">
                                        <label class="form-check-label" for="">Management</label>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group" style="margin-top: 20px;">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>