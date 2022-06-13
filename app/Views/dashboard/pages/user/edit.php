<?= $this->extend('dashboard/layouts/master') ?>

<?= $this->section('title') ?>
<title>Edit Data User - Berita Acara</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Row -->
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl">
        <h2>Edit Data User</h2>
        <div class="card shadow mt-4 mb-4">
            <!-- Card Body -->
            <div class="card-body">
                <form action="<?= base_url('/users/update' . $users['id']); ?>" method="post" class="mt-3 mx-5 my-4">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= $users['nama']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= $users['email']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?= $users['username']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control form-control-sm <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" <?= $users['password']; ?>>
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role_id" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-8">
                            <select class="form-control form-control-sm <?= ($validation->hasError('role_id')) ? 'is-invalid' : ''; ?>" id="role_id" name="role_id" value="<?= $users['role_id']; ?>">
                                <option selected disabled>-- Pilih Role --</option>
                                <option value="1" <?php if ($users['role_id'] == '1') { ?> selected <?php } ?>>Admin</option>
                                <option value="2" <?php if ($users['role_id'] == '2') { ?> selected <?php } ?>>User</option>
                                <option value="3" <?php if ($users['role_id'] == '3') { ?> selected <?php } ?>>Management</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('role_id'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <?= $this->endSection() ?>