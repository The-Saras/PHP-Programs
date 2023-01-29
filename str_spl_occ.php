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
        Enter string<input type="text" name="str1">
        Enter string<input type="text" name="str2">
        Enter string in replacement for string 2<input type="text" name="str3">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];
        $str3 = $_POST['str3'];

        $strbeg = strpos($str1, $str2);
        if ($strbeg == 0) {
            echo "String 2 is present at first postion in string 1";

            echo "<br>";
        } else {
            echo " sub string is not present at begining ";
            echo "<br>";
        }
        $newstr = str_replace($str2, $str3, $str1);
        echo "After replacing suub-string 2 with sub-string 3 result is -> " . $newstr;
        echo "<br>";
        $splStr = preg_split("//", $str1);
        foreach ($splStr as $v) {
            echo "\t$v";
        }

        $len = strlen($str1) - 3;
        $s = substr($str1, 3, $len);
        $str4 = strrev($s);
        echo "<br>";
        echo $str4;
    }
    ?>
</body>

</html>


