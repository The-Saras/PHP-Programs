<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Enter a number<input type="text" name="num1"><br>
        Enter a number<input type="text" name="num2"><br>
        + <input type="radio" name="ch" value=1><br>
        - <input type="radio" name="ch" value=2><br>
        * <input type="radio" name="ch" value=3><br>
        / <input type="radio" name="ch" value=4><br>
        <input type="submit"><br>
    </form>
    <?php
    function addition($num1, $num2)
    {
        echo $num1 + $num2;
    }
    function substraction($num1, $num2)
    {
        echo $num1 - $num2;
    }
    function multiplication($num1, $num2)
    {
        echo $num1 * $num2;
    }
    function division($num1, $num2)
    {
        echo $num1 / $num2;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['num1'];
        $number2 = $_POST['num2'];
        $choice = $_POST['ch'];

        switch ($choice) {
            case 1:
                echo "Addition is : ";
                addition($number1, $number2);
                break;

            case 2:
                echo "Substraction is : ";
                substraction($number1, $number2);
                break;

            case 3:
                echo "Multiplication is : ";
                multiplication($number1, $number2);
                break;
            case 4:
                echo "Division is : ";
                division($number1, $number2);
                break;
        }
    }
    ?>
</body>

</html>