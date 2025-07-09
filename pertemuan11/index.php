<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");

    if (isset($_POST["cari"])) {
        $mahasiswa = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br></br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br></br>
    
    <table border="1" cellpadding="10" cellspacing="0" >
        <?php $i = 1; ?>
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php foreach($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $i ?>.</td>
            <td>
                <a href="ubah.php?id=<?= $mhs["id"]; ?>">ubah</a>
                <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('yakin?')" >hapus</a>
            </td>
            <td><?= $mhs["nama"] ;?></td>
            <td><?= $mhs["nim"] ?></td>
            <td><?= $mhs["email"] ?></td>
            <td><?= $mhs["jurusan"] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>