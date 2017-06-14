<!DOCTYPE html>
<html>
    <head>
        <title> config </title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $connect = mysqli_connect('localhost', 'root', '', 'test');
            mysqli_set_charset($connect, 'utf8');

            if (mysqli_connect_errno()) {
                echo 'Faled to connect to MSQL: ' + mysqli_connect_error();
            }
            else{
                echo "Ок <br>";
            }
            //INSERT INTO `news` VALUES (NULL, '345', '345', '345', '345', '345', CURRENT_TIMESTAMP, '345', '1');
            /*
                $query = "INSERT INTO `news_category` VALUES (NULL, 'Категорія 4', 'Опис 4', '1', '1')";
                $info = mysqli_query($connect, $query);
                var_dump($info);
            */

            /*
                $query = "DELETE FROM news_category WHERE id ='6' ";
                $info = mysqli_query($connect, $query);
                var_dump($info);
             */

            /*
                $query = "DELETE FROM news WHERE date < DATE_SUB(CURDATE(), INTERVAL 5 DAY)";
                $info = mysqli_query($connect, $query);
                var_dump($info);
            */
            
            /*
                $query = "UPDATE news SET status = '0' WHERE status = '1'";
                $info = mysqli_query($connect, $query);
                var_dump($info);
                echo mysqli_affected_rows($connect); // кількість рядків які були змінені
             */
            
            /*
                $query = "SELECT * FROM news WHERE author_id = 1 ORDER BY id DESC LIMIT 10";
                $result = mysqli_query($connect, $query);
                $count = mysqli_num_rows($result);
            
                if ($count) {
                    while($row = mysqli_fetch_array($result)){
                        echo $row['h1'] . "<br>";
                    }
                }
            */
            
            $query = "SELECT status, COUNT(*) AS count FROM news GROUP BY status";
            $result = mysqli_query($connect, $query);
            $count = mysqli_num_rows($result);
           
            if ($count) {
                while($row = mysqli_fetch_array($result)){
                    echo 'status: ' . $row['status'] . ' count: ' . $row['count'] . "<br>";
                }
            }
            
        ?>
    </body>
</html>
