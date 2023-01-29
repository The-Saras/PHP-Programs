<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Enter distannce <input type="text" name="dis">
        KM to MILES<input type="radio" name="ch" value=1>
        MILES TO KM<input type="radio" name="ch" value=2>
        <input type="submit">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dis = $_POST['dis'];
        $ch = $_POST['ch'];
        switch ($ch) {
            case 1:
                $conv_dis_kil = 1.609 * $dis;
                echo "Distance converted to KM : " . $conv_dis_kil;
                break;
            case 2:
                $conv_dis_miles = $dis / 1.609;
                echo "Distance converted to MILES" . $conv_dis_miles;
                break;
        }
    }
    ?>
</body>

</html>