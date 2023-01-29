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
        <input type="email" name="email">
        <input type="submit">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST["email"];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email is valid you can continue..";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email is not valid try again ";
        }
    }

    ?>
</body>

</html>