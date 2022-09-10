<?php 
define("phi", 3.14);
    
    function kelilingLingkaran (int $angka){
        $radius = $angka / 5;

        return 2 * phi * $radius;
    }

    function luasLingkaran (int $angka){
        $radius = $angka / 3;

        return phi * ($radius * $radius);
    }

    function luasPersegi (int $angka){
        $panjang = $angka / 3;
        $lebar = $angka / 5;

        return $panjang * $lebar;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar - Tugas | Bootcamp Inosoft</title>
</head>
<body>
    <?php for($i = 1; $i <= 100; $i++) : ?>
        <?php if($i % 3 == 0) : ?>
            <?= number_format(luasLingkaran($i), 2, ".", "") ?> <br>
        <?php elseif($i % 5 == 0) : ?>
            <?= number_format(kelilingLingkaran($i), 2, ".", "") ?> <br>
        <?php elseif($i % 5 == 0 && $i % 3 == 0) : ?>
            <?= number_format(luasPersegi($i), 2, ".", "") ?> <br>
        <?php else : ?>
            <?= number_format($i, 2, ".", "") ?> <br>
        <?php endif; ?>
    <?php endfor; ?>
</body>
</html>