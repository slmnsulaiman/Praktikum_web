<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa oleh Sulaiman - 2110020038</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Form Edit Mahasiswa</h1>
        <form action="<?= site_url('mahasiswa/perbaharui/' . $mahasiswa->id_mahasiswa) ?>" method="post">
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" placeholder=" " value="<?php echo $mahasiswa->NIM ?>" required>
            <label for="nama_mhs">Nama Mahasiswa</label>
            <input type="text" name="nama_mhs" id="nama_mhs" placeholder=" " value="<?php echo $mahasiswa->nama_mhs ?>" required>
            <label for="id_prodi">Program Studi</label>
            <select name="id_prodi" id="id_prodi" required>
                <option value="">Pilih Program Studi</option>
                <?php foreach ($prodi as $ps) : ?>
                    <option value="<?= $ps->id_prodi ?>" <?= $mahasiswa->id_prodi == $ps->id_prodi ? 'selected' : '' ?>> <?= $ps->nama_prodi ?></option>
                <?php endforeach; ?>
            </select><br>
            <input type="submit" value="Perbaharui">
        </form>
    </div>
</body>

</html>