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
                    <a class=" nav-item nav-link text-danger" href="<?= base_url('Login/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <a href=""><a href=""><a href=""></a></a></a>

    <div class="container">
        <!-- alert -->
        <?= ($this->session->flashdata('success')) ?
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            ' . $this->session->flashdata('success') . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>'
            : '' ?>
        <!-- title -->
        <h1><?= $title; ?></h1>
        <hr>
        <!-- tombol tambah -->
        <a href="<?= base_url('Siswa/tambah'); ?>" class="btn btn-primary col-md-2 p-2 mb-2"> Tambah Data</a>
        <!-- table -->
        <table class="table table-hover mt-2">
            <thead>
                <tr class="shadow">
                    <th scope="col">#</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Telepone</th>
                    <th scope="col">Alamat</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if (!empty($siswa)) :
                    $no = 1;
                    foreach ($siswa as $s) :
                ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $s->nis; ?></td>
                            <td><?= $s->nama; ?></td>
                            <td><?= $s->jenis_kelamin; ?></td>
                            <td><?= $s->telp; ?></td>
                            <td><?= $s->alamat; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('Siswa/edit/' . $s->nis); ?>" class="btn btn-secondary">Edit</a>
                                <a href="<?= base_url('Siswa/delete/' . $s->nis); ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin!');">Delete</a>

                            </td>
                        </tr>
                    <?php
                        $no++;
                    endforeach;
                else :
                    ?>
                    <tr>
                        <td>Data tidak ada</td>
                    </tr>
                <?php endif; ?>

            </tbody>
        </table>

    </div>








    <script src="<?= base_url('assets/bootstrap/js/jquery-3.5.1.slim.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>

</html>