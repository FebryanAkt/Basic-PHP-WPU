<?php
// hostname, username, password, database name
    $conn = mysqli_connect("localhost", "root", "", "php_dasar" );

    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

    if (!$result) {
        echo mysqli_error($conn);
    }

    // ambil data fetch
    // mysqli_fetch_row() mengembalikan array numerik
    // mysqli_fetch_assoc() mengembalikan array associative
    // mysqli_fetch_array() mengembalikan keduanya
    // mysqli_fetch_object() mengembalikan object ->

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
        <?php while ($row = mysqli_fetch_assoc($result) ): ?>
            <tr>
                <td><?= $i ?>.</td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td><?= $row["nama"] ;?></td>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>