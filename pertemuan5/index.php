<?php
    $hari = array("senin", "selasa", "rabu");
    $bulan = ["januari", "februari", "maret"];
    $arr1 = [123, "string", false];

    // var_dump ($hari);
    // echo "<br>";
    // var_dump ($arr1);
    // echo "<br>";
    // echo $arr1 [0];
    // echo "<br>";
    // var_dump($hari);
    // $hari[] = "kamis";
    // echo "<br>";
    // var_dump($hari);

    echo "<br>";
    $angka = [1,2,3,4,5,6,7];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both;}
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($angka) ; $i++ ) { ?>
        <div class="kotak"><?php echo $angka[$i];?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $a ) {?>
        <div class="kotak"><?php echo $a; ?> </div>
    <?php }?>

    <div class="clear"></div>

    <?php foreach ($angka as $a): ?>
        <div class="kotak"><?= $a; ?></div>
        <?php endforeach;?>
</body>
</html>