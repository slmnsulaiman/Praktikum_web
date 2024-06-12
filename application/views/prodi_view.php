<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa oleh Sulaiman dan 211020038</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Selamat Datang di web Sulaiman</h1>
        <a href="<?php echo site_url('prodi/tambah') ?>"> Tambah</a>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">NO</th>
                    <th scope="col" class="text-center">Kode Prodi</th>
                    <th scope="col" class="text-center">Nama Prodi</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($prodi as $row) { ?>
                    <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td><?php echo $row->kode_prodi ?></td>
                        <td><?php echo $row->nama_prodi ?></td>
                        <td class="text-center">
                            <a href="<?php echo site_url('prodi/edit/' . $row->id_prodi) ?>"> Edit</a>
                            <a href="<?php echo site_url('prodi/hapus/' . $row->id_prodi) ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS and dependencies (optional but useful) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>