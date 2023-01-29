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
        Enter radius <input name="r" type="text">
        Enter height <input name="h" type="text">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $r = $_POST['r'];
        $h = $_POST['h'];
        define('pi', '3.14');
        interface fun
        {
            function area($r, $h);
            function volume($r, $h);
        }
        class cyl implements fun
        {
            function area($r, $h)
            {
                $area = (2 * pi * $r * ($r + $h));
                echo "Area of cylinder: " . $area;
                echo "<br>";
            }
            function volume($r, $h)
            {
                $volume = (pi * $r * $r * $h);
                echo "Volume of cylinder: " . $volume;
            }
        }

        $o = new cyl;
        $o->area($r, $h);
        $o->volume($r, $h);
    }
    ?>
</body>

</html>