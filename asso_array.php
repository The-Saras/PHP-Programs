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
        Enter index:<input type="text" name="index"><br>
        Display elements with keys and values<input type="radio" value=1 name="ch"><br>
        Display size of array<input type="radio" value=2 name="ch"><br>
        Delete an element from array at a given index<input type="radio" value=3 name="ch"><br>
        Reverse order of each element's key value pair<input type="radio" value=4 name="ch"><br>
        Traverse the array in random order<input type="radio" value=5 name="ch"><br>
        <input type="Submit"><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ch = $_POST['ch'];
        $index = $_POST['index'];
        $arr = array("Saras" => 1, "Harsh" => 2, "Aboli" => 3, "Mrunmay" => 4);
        switch ($ch) {
            case 1:
                foreach ($arr as $key => $value) {
                    echo "<h2>Displaying Elements and keys of array</h2>";
                    echo "$key:$value";
                    echo "<br>";
                }
                break;
            case 2:
                echo "Displaying size of array";
                echo "size of array => " . sizeof($arr);
                break;
            case 3:
                echo "Deleting given index of array";
                echo "<br>";
                unset($arr[$index]);
                echo "After deleting index the array is -->";
                echo "<br>";
                foreach ($arr as $key) {
                    echo $key;
                    echo "<br>";
                }
                break;
            case 4:
                echo "Reversing key and values of array";
                echo "<br>";

                print(array_flip($arr));
                echo "After Reversing key and values the array is -->";
                echo "<br>";
                foreach ($arr as $key => $value) {
                    echo $key . ":" . $value;
                    echo "<br>";
                }
                break;
            case 5:
                echo "Shuffeling elements of array -->";
                echo "<br>";
                shuffle($arr);
                echo "After Shuffeling array the array is -->";
                echo "<br>";
                foreach ($arr as $key) {
                    echo $key;
                    echo "<br>";
                }
                break;
        }
    }
    ?>
</body>

</html>