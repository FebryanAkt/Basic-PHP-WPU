<?php
    $mahasiswa = [
        [
            "nama" => "febryan", 
            "nim" =>"244",
            "jurusan" => "ti", 
            "email" =>"Sub@mail"
        ],
        [
            "nama" => "roni", 
            "nim" =>"277",
            "jurusan" => "te", 
            "email" =>"Ron@mail"
        ]
            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; 
                ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>