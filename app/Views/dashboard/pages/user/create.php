<?= $this->extend('dashboard/layouts/master') ?>

<?= $this->section('title') ?>
<title>Tambah Data User - Berita Acara</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Row -->

<div class="row">
    <!-- Area Chart -->
    <div class="col-xl">
        <h2>Tambah Data User</h2>
        <div class="card shadow mt-4 mb-4">
            <!-- Card Body -->
            <div class="card-body">
                <!-- Content Row -->
                <div class="row">
                    <div class="col">
                        <form action="<?php echo base_url('') ?>" method="post" class="mt-3 mx-5 my-4">
                            <?= csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control form-control-sm" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control form-control-sm" id="inputPassword3">
                                </div>
                            </div>
                            <fieldset class="form-group row">
                                <legend class="col-form-label col-sm-2 float-sm-left pt-0">Role</legend>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" id="" value="admin">
                                        <label class="form-check-label" for="">
                                            Admin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" id="" value="user">
                                        <label class="form-check-label" for="">
                                            User
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" id="" value="management">
                                        <label class="form-check-label" for="">
                                            Management
                                        </label>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group" style="margin-top: 20px;">
                                <button type="submit" class="btn btn-success">Tambah</button>
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