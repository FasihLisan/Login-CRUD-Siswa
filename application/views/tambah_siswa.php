<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">

    <title><?= $title; ?></title>

</head>

<body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 shadow">
        <div class="container">
            <a class="navbar-brand" href="#">Fasih</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#">Home</a>
                    <a class="nav-item nav-link active" href="<?= base_url('Siswa'); ?>">Siswa</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link text-danger" href="<?= base_url('Login/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">

        <h1><?= $title; ?></h1>
        <hr>

        <?= form_open('Siswa/tambah'); ?>
        <div class="form-group col-md-4">
            <label for="exampleFormControlInput1">NIS</label>
            <input type="text" class="form-control <?= (form_error('input_nis')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput1" name="input_nis" value="<?= set_value('input_nis'); ?>">
            <div class="invalid-feedback">
                <?= form_error('input_nis'); ?>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="exampleFormControlInput2">Nama</label>
            <input type="text" class="form-control <?= (form_error('input_nama')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput2" name="input_nama" value="<?= set_value('input_nama'); ?>">
            <div class="invalid-feedback">
                <?= form_error('input_nama'); ?>
            </div>
        </div>

        <div class="p-4">

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="input_jenis_kelamin" class="custom-control-input <?= (form_error('input_jenis_kelamin')) ? 'is-invalid' : ''; ?>" value="laki-laki" <?= set_radio('input_jenis_kelamin', 'laki-laki'); ?>>
                <label class="custom-control-label" for="customRadioInline1">Laki-Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="input_jenis_kelamin" class="custom-control-input <?= (form_error('input_jenis_kelamin')) ? 'is-invalid' : ''; ?>" value="perempuan" <?= set_radio('input_jenis_kelamin', 'perempuan'); ?>>
                <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
            </div>

        </div>

        <div class="form-group col-md-6">
            <label for="exampleFormControlInput3">Telepon</label>
            <input type="text" class="form-control <?= (form_error('input_telepone')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput3" name="input_telepone" value="<?= set_value('input_telepone'); ?>">
            <div class="invalid-feedback">
                <?= form_error('input_telepone'); ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="exampleFormControlTextarea4">Alamat</label>
            <textarea class="form-control <?= (form_error('input_alamat')) ? 'is-invalid' : ''; ?>" id="exampleFormControlTextarea4" rows="3" name="input_alamat"><?= set_value('input_alamat'); ?></textarea>
            <div class="invalid-feedback">
                <?= form_error('input_alamat'); ?>
            </div>
        </div>
        <div class="col mb-4">
            <input type="submit" class="btn btn-success" name="submit" value="Tambah">
            <a href="<?= base_url('Siswa'); ?>" class="btn btn-danger">Batal</a>
        </div>
        <?= form_close(); ?>
    </div>


    <script src="<?= base_url('assets/bootstrap/js/jquery-3.5.1.slim.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>


</body>

</html>