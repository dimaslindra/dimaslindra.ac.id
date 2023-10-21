<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 1</title>
    <style>
        .kotak {
            width: 550px;
            height: 720px;
            border: 2px solid black;
            text-align: justify;
            margin-left: 15px;
        }
    </style>
</head>

<body>
    <div class="kotak">
        <?php
        function Prima($number)
        {
            if ($number <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        echo "Pengulangan Untuk Mencari kategori bilangan :<br>";

        for ($j = 1; $j < 20; $j++) {
            echo "<br>";
            if (($j % 2) == 0) {
                echo "* Angka $j adalah bilangan Genap";
            } else {
                echo "* Angka $j adalah bilangan Ganjil";
            }

            if (Prima($j)) {
                if ($j > 10) {
                    echo " dan sekaligus bilangan prima";
                } else {
                    echo " sekaligus bilangan prima";
                }
            }
            if ($j >= 1) {
                echo "<br>";
            }
        }
        ?>
    </div>
</body>

</html>