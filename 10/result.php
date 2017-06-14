<?php
    session_start();
    
    $answer3 = $_POST['answer3'];
    
    $_SESSION['answer3'] = $answer3;
    
    $answer1 = $_SESSION['answer1'];
    $answer2 = $_SESSION['answer2'];
    $answer3 = $_SESSION['answer3'];
    
?>

<p> Answer: </p>
<p> </p>


<?php
    if ( ($answer1 == 4) && ($answer2 == 6) && ($answer3 == 8) ) {
        echo '+++';
        echo '<br>';
    }
    else {
        echo '---';
        echo '<br>';
    }
    echo session_id();      // виводить id  сесії
    echo '<br>' . session_name();       // виводить назву кукі, який містить id сесії
?>
