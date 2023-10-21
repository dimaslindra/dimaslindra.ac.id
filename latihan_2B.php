<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2b</title>
    <style>
        .boxed-letter {
            font-size: 30px;
            padding: 20px;
            border: 2px solid chocolate;
            display: inline-block;
            margin-right: 5px;
            background-color: gray;
            margin-bottom: 10px;

        }

        .onebox {
            border: 3px solid blue;
            padding: 10px;
            margin: 10px;
            color: yellow;
            width: 25%;
        }
    </style>
</head>

<body>
    <div class="onebox">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class='boxed-letter'>" . $j . "</div>";
            }
            echo "<br>";
        }
        ?>
    </div>
</body>

</html>