<?php
    require 'functions.php';
    session_start();
// cek jika user belum login
    if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
    $id = $_GET["id"];
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id") [0];

    if (isset($_POST["submit"])) {
        if (ubah($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data tidak berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data mahasiswa</title>
</head>
<body>
    <h1> Update data mahasiswa</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required required value="<?= $mhs["nama"]?>">
            </li>

            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required required value="<?= $mhs["email"]?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required required value="<?= $mhs["jurusan"]?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah data</button>
            </li>
        </ul>
    </form>
</body>
</html>