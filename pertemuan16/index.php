<?php
    session_start();
    // cek jika user belum login
    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
    require 'functions.php';

    // pagination
    $jmlDataPerHalaman = 2;
    $jmlData = count(query("SELECT * FROM mahasiswa"));
    $jmlHalaman = ceil($jmlData / $jmlDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"]) ? $_GET["halaman"] : 1);
    $awalData  = ($jmlDataPerHalaman * $halamanAktif) - $jmlDataPerHalaman;

    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jmlDataPerHalaman");

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
    <br>

    <!-- pagination -->
     <?php if ($halamanAktif > 1): ?>
     <a href="?halaman= <?= $halamanAktif - 1 ?>">&laquo back</a>
     <?php endif; ?>

    <?php for ($i = 1; $i <= $jmlHalaman; $i++) : ?>

        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman= <?= $i ?>" style="font-weight: bold; color: red;"><?= $i ?></a>
        <?php else : ?>
            <a href="?halaman= <?= $i ?>"><?= $i ?></a>
        <?php endif; ?>

    <?php endfor; ?>

    <?php if ($halamanAktif < $jmlHalaman): ?>
     <a href="?halaman= <?= $halamanAktif + 1 ?>">&raquo next</a>
     <?php endif; ?>

    <br> </br>
    <a href="logout.php">Logout</a>
</body>
</html>