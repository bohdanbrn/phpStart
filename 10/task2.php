<?php
    session_start();
    
    $answer1 = $_POST['answer1'];
    
    $_SESSION['answer1'] = $answer1;
?>

<p> Question 2: </p>
<p> 3 + 3 = ?</p>  
  
<form action="task3.php" method="post">
    <div> </div>
    <input type="text" name="answer2">
    <input type ="submit">
</form>