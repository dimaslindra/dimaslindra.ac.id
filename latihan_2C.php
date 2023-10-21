<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2C</title>

    <style>
    
    .outlook {
        width: 300px;
        height: 300px;
        padding: 30px;
        background-color: chocolate;
        border: 3px solid blue;
        margin: auto;
    }

    .solid {
        width: 40px;
        height: 40px;
        text-align: center;
        border: 2px solid black;
        margin-top: 10px;
        margin-left: 5px;
        font-size: 30px;
        display: inline-block;
    }

    .teks1 {
        color: red;
        font-size: 50px;
        text-align: center;
        margin-top: -25px;
    }

    .Ganjil {
        background-color: #003;
        color: #fff;
    }

    .Genap {
        background-color: #999;
    }
</style>

</head>

<body>
    <div class="outlook">
        <?php
        for ($i = 1; $i <= 6; $i++) {
            $R = ($i % 2 == 0) ? 'Ganjil' : 'Genap';
            for ($j = 1; $j < $i; $j++) {
               echo " <div class='solid $R'>" . $j . "</div>";
            }
            echo "<br>";
        }
        ?>
    </div>

    <div class="teks1">
        <p>DIMAS LINDRA</p>
    </div>

</body>

</html>