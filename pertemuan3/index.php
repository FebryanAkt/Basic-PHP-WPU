<?php
    // for ($i=1; $i < 5; $i++) { 
    // echo $i;
    // }

    // $a = 2;
    // while ($a <= 10) {
    //     echo $a;
    //     $a++;
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpading=""10 cellspacing="0">
        <?php
            // for ($i=1; $i <= 3; $i++) { 
            //     echo "<tr>";
            //     for ($j=1; $j <= 5; $j++) { 
            //         echo "<td>$i,$j</td>";
            //     }
            // }
            // echo "</tr>";
        ?>
        <!-- menulis secara template -->
        <?php for ($i=1; $i <= 5; $i++) : ?> 
            <?php if ($i % 2 == 1) :?>
                <tr class="warna-baris">
            <?php endif;?>
                    <?php for ($j=1; $j <= 5; $j++) : ?>
                        <td><?php echo "$i, $j"; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>
</body>
</html>