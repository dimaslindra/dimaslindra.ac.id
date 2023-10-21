<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1A</title>

    <style>
        body {
            background-color: black;
        }

        .teks {
            font-size: 40px;
            text-align: center;
            margin-top: 250px;
        }
    </style>

</head>

<body>

    <div>
        <div class="teks">
            <?php
            $x = " Topi ";
            $y = " Bundar ";

            $j = $x . " Saya " . $y;
            echo "<span style ='color: red;'>$j ,</span>";

            $k = $y . $x . " Saya ";
            echo " <span style ='color: white;'> $k </span> <br>";

            ?>
        </div>
    </div>

</body>

</html>