<?= $this->extend('dashboard/layouts/master') ?>

<?= $this->section('title') ?>
<title>Tambah Data - Berita Acara</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        Tambah Data Berita Acara
    </h1>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl">
        <div class="card shadow mb-4">
            <!-- Card Body -->
            <div class="card-body mt-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg 12">
                            <form action="/TransaksiController/save" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="ba_id">Jenis Berita Acara</label>
                                    <select name="ba_id" id="ba_id" class="form-control form-control-md">
                                        <option value="" selected disabled>--Masukkan Jenis Berita Acara--</option>
                                        <?php foreach ($listBa as $key) : ?>
                                            <option value="<?= $key['ba_id']; ?>"><?= $key['nama_ba']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="dokumen_id">Document</label>
                                    <select name="dokumen_id" id="dokumen_id" class="form-control form-control-md">
                                        <option value="" selected disabled>--Masukkan Tipe Dokumen--</option>
                                        <?php foreach ($listDokumen as $key) : ?>
                                            <option value="<?= $key['dokumen_id']; ?>" <?php echo $dokumen_id == $key['dokumen_id'] ? 'selected' : ''; ?>><?= $key['tipe_dokumen']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_id">Jenis Pekerjaan</label>
                                    <select name="pekerjaan_id" id="pekerjaan_id" class="form-control form-control-md">
                                        <option value="" selected disabled>--Masukkan Jenis Pekerjaan--</option>
                                        <?php foreach ($listPekerjaan as $key) : ?>
                                            <option value="<?= $key['pekerjaan_id']; ?>" <?php echo $pekerjaan_id == $key['pekerjaan_id'] ? 'selected' : ''; ?>><?= $key['jenis_pekerjaan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="template_id">Template</label>
                                    <select name="template_id" id="template_id" class="form-control form-control-md">
                                        <option value="" selected disabled>--Masukkan Template--</option>
                                        <?php foreach ($listTemplate as $key) : ?>
                                            <option value="<?= $key['template_id']; ?>" <?php echo $template_id == $key['template_id'] ? 'selected' : ''; ?>><?= $key['nama_template']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-7 mb-3 mb-sm-0">
                                        <label>Nomor Berita Acara</label>
                                        <input type="text" class="form-control form-control-md" id="no_ba" placeholder="Masukkan Nomor Berita Acara">
                                    </div>
                                    <div class="col-sm-5 ">
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control form-control-md" id="tgl_ba" placeholder="Pilih Tanggal">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-7 mb-3 mb-sm-0">
                                        <label>Nomor Kontrak Kerja</label>
                                        <input type="text" class="form-control form-control-md" id="no_kontrak" placeholder="Masukkan Nomor Kontrak Kerja">
                                    </div>
                                    <div class="col-sm-5">
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control form-control-md" id="tgl_kontrak" placeholder="Pilih Tanggal">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Pihak Pertama</label>
                                    <input type="text" class="form-control form-control-md" id="pihak_pertama" placeholder="Masukkan Pihak Pertama">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-7 mb-3 mb-sm-0">
                                        <label>Penanggung Jawab</label>
                                        <input type="text" class="form-control form-control-md" id="penanggung_jawab_1" placeholder="Masukkan Penanggung Jawab">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Jabatan</label>
                                        <input type="text" class="form-control form-control-md" id="jabatan_1" placeholder="Masukkan Jabatan">
                                    </div>
                                    <div class="col-sm-1">
                                        <div style="margin-top: 30px;">
                                            <button class="btn btn-success btn-md" id="add_pihak_pertama" type="button"><i class="fa fa-plus-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Pihak Kedua</label>
                                    <input type="text" class="form-control form-control-md" id="pihak_kedua" placeholder="Masukkan Pihak Kedua">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-7 mb-3 mb-sm-0">
                                        <label>Penanggung Jawab</label>
                                        <input type="text" class="form-control form-control-md" id="penanggung_jawab_2" placeholder="Masukkan Penanggung Jawab">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Jabatan</label>
                                        <input type="text" class="form-control form-control-md" id="jabatan_2" placeholder="Masukkan Jabatan">
                                    </div>
                                    <div class="col-sm-1">
                                        <div style="margin-top: 30px;">
                                            <button class="btn btn-success btn-md" id="add_pihak_kedua" type="button"><i class="fa fa-plus-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top: 50px;">
                                    <button type="submit" class="btn btn-warning btn-block">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>

<?= $this->extend('dashboard/layouts/master') ?>
<?= $this->section('add-script') ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $('#ba_id').select2({
        placeholder: "Pilih Jenis Berita Acara",
        theme: "bootstrap4"
    });
    $('#dokumen_id').select2({
        placeholder: "Pilih Tipe Dokumen",
        theme: "bootstrap4",
        ajax: {
            url: "<?php echo site_url('TransaksiController/ajaxDokumen') ?>",
            dataType: 'json',
            delay: 250,
            data: function(data) {
                return {
                    ba_id: $('#ba_id').val(),
                    searchTerm: data.term
                };
            },
            processResults: function(data) {
                return {
                    results: data.data,

                };
            },
            cache: true
        },
    });
    $('#pekerjaan_id').select2({
        placeholder: "Pilih Jenis Pekerjaan",
        theme: "bootstrap4",
        ajax: {
            url: "<?php echo site_url('TransaksiController/ajaxPekerjaan') ?>",
            dataType: 'json',
            delay: 250,
            data: function(data) {
                return {
                    dokumen_id: $('#dokumen_id').val(),
                    searchTerm: data.term
                };
            },
            processResults: function(data) {
                return {
                    results: data.data,

                };
            },
            cache: true
        },
    });
    $('#template_id').select2({
        placeholder: "Pilih Template",
        theme: "bootstrap4",
        ajax: {
            url: "<?php echo site_url('TransaksiController/ajaxTemplate') ?>",
            dataType: 'json',
            delay: 250,
            data: function(data) {
                return {
                    pekerjaan_id: $('#pekerjaan_id').val(),
                    searchTerm: data.term
                };
            },
            processResults: function(data) {
                return {
                    results: data.data,

                };
            },
            cache: true
        },
    });
</script>


<?= $this->endSection() ?>