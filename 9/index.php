<?php
    /*  запис в кукі простого рядка
    if(isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
        setcookie('name', $name);
        //setcookie('name', $name, time() + 60);    кукі буде жити 60 сек
        //setcookie('name', '');    // видаляє кукі
    }
    elseif (isset($_COOKIE['name'])) {
        $name = $_COOKIE['name'];
    }
    else{
        $name = "user";
    }
     */

    // запис масиву в кукі
    $arr = ['name' => 'Богдан', 'surname' => 'Баран', 'age' => '20'];
    $result = serialize($arr);      // перетворення масиву в рядок
    setcookie('arr', $result);
?>

<html>
    <head>
        <title>index</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--
            Привіт <?php echo $name; ?>
        -->
        <form method="POST">
            <input type="text" name="name">
            <input type="submit">
        </form>
    </body>
</html>