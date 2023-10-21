<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1C</title>
    <link rel="stylesheet" href="hay.css">

    <Style>
        .box1 {
            margin-top: 25px;
            width: 70px;
            height: 70px;
            border: 3px solid yellow;
            font-size: 60px;
            color: red;
            margin-left: 30px;
            text-align: center;
        }

        .box2 {
            width: 70px;
            height: 70px;
            border: 3px solid green;
            margin-left: 30px;
            text-align: center;
            color: purple;
            font-size: 60px;
            margin-top: 10px;
        }

        .box3 {
            width: 70px;
            height: 70px;
            border: 3px solid black;
            margin-left: 115px;
            text-align: center;
            color: blue;
            font-size: 60px;
            margin-top: -76px;
        }

        .box4 {
            width: 70px;
            height: 70px;
            border: 3px solid red;
            margin-top: 10px;
            margin-left: 30px;
            text-align: center;
            color: black;
            font-size: 60px;

        }

        .box5 {
            width: 70px;
            height: 70px;
            border: 3px solid chocolate;
            margin-left: 115px;
            text-align: center;
            color: aqua;
            font-size: 60px;
            margin-top: -76px;
        }

        .box6 {
            width: 70px;
            height: 70px;
            border: 3px solid blue;
            margin-left: 200px;
            text-align: center;
            color: blueviolet;
            font-size: 60px;
            margin-top: -76px;
        }

        .kotak {
            width: 300px;
            height: 300px;
            border: 4px solid orange;
            margin-top: 80px;
            margin-left: 500px;

        }
    </Style>
</head>

<body>
    <div>
        <div class="kotak">
            <div>
                <div class="box1"> <?php $A1 = "A" ?>
                    <?php
                    echo "$A1 </br>";
                    ?>
                </div>
                <div>
                    <div class="box2"><?php $A2 = "A" ?>
                        <?php
                        echo "$A2 </br>";
                        ?>
                    </div>
                    <div class="box3"><?php $B = "B" ?>
                        <?php
                        echo "$B </br>";
                        ?>
                    </div>
                    <div class="box4"><?php $A3 = "A" ?>
                        <?php
                        echo "$A3 </br>";
                        ?>
                    </div>
                    <div class="box5"><?php $B2 = "B" ?>
                        <?php
                        echo "$B2 </br>";
                        ?>
                    </div>
                    <div class="box6"><?php $C = "C" ?>
                        <?php
                        echo "$C </br>";
                        ?>
                    </div>
                </div>
</body>

</html>