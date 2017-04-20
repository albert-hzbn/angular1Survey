<?php
    require("../config.php");

    $_POST = json_decode(file_get_contents('php://input'), true);
  
            $qno=$_POST['qno'];
            $question=$_POST['question'];
            $ans=$_POST['ans'];
           
            $q = mysqli_query($con,"INSERT INTO `survey_answers`(qno,question,answer) VALUES('$qno','$question','$ans')");




            ?>
    
    
