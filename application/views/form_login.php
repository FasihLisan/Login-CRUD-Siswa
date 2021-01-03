<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body>
    <div class="container">

        <div class="row p-5 bg-light row-login mx-auto rounded shadow">

            <div class="col-sm-5 mx-auto dekstop-m">
                <img width="200" src="<?= base_url('assets/img/logo_smk.png'); ?>" class="rounded mx-auto d-block" alt="...">
                <h1 class="text-center">Data Siswa SMKN 2 BANGKALAN</h1>
            </div>

            <div class="col-sm-6 shadow p-5 rounded ml-3 mx-auto bg-white">
                <h3 class="text-center">Masuk</h3>
                <?php $eror = $this->session->flashdata('gagal'); ?>
                <?= form_open('Login/proses_login'); ?>
                <div class="alert alert-<?= $eror ? 'danger' : 'info' ?> text-center" role="alert">
                    <?= $eror ? $eror : "Harap Login" ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputusername">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputusername" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center mt-4 mb-4">
        <a class="text-white">&copy; Copyright 2020 Ach fasihul lisan</a>
    </footer>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/jquery-3.5.1.slim.min.js'); ?>"></script>
</body>

</html>