<?php
    /*  запис в кукі простого рядка
    if (isset($_COOKIE['name'])) {
        $name = $_COOKIE['name'];
        //setcookie('name', '');    // видаляє кукі
    }
    else{
        $name = "user";
    }
     */

    // зчитування масиву з кукі
    $arr = unserialize($_COOKIE{'arr'});        // перетворення рядка в масив
    echo ($arr[name]);
?>

<html>
    <head>
        <title>page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>
           <!--
            Привіт <?php echo $name; ?>
           -->
        </p>
    </body>
</html>