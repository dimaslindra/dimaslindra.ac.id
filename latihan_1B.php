<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1B</title>

    <style>
        .posisi {
            font-size: 40px;
            margin-top: 180px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="posisi">
        <?php
        $x = "10";

        $baris1 = " Aku Adalah Angka " . $x;
        echo "<span style ='color: aqua;'>$baris1 </span><br>";

        $baris2 =  $x * 8;
        echo " <span style ='color: green;'>  Jika Aku di kali 8, jumlahku sekarang $baris2 </span> <br>";

        $baris3 =  $baris2 / 4;
        echo " <span style ='color: red;'> Jika Aku di bagi 4, jumlahku sekarang  $baris3 </span> <br>";

        $baris4 = $baris3 - 6;
        echo " <span style ='color: blue;'> Jika Aku di kurang 6, jumlahku sekarang $baris4 </span> <br>";

        $baris5 =  $baris4 + 2;
        echo " <span style ='color: yellow;'> Jika Aku di tambah 2, jumlahku sekarang  $baris5 </span> <br>";
        ?>
    </div>



</body>

</html>