<?php 
    // $mahasiswa = [
    //     ["roni", "12345", "TI", "email"], ["agus", "98765", "TI", "email"] 
    // ];
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
    // echo $mahasiswa [1]["email"];
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
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><?php echo $mhs["nama"]; ?></li>
            <li><?php echo $mhs["nim"]; ?></li>
            <li><?php echo $mhs["jurusan"]; ?></li>
            <li><?php echo $mhs["email"]; ?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>