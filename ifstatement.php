<?php 
    $title = 'Switch Statement';
    include 'include/header.php'
    ?>
    <h3 style="color: red"></h3>
    <?php  
    
     // An If statement that will carry out and action based on the value of the variable

     echo '<h2>IF Statement</h2>';

     $grade = 50;

     if($grade >= 50){
         echo '<h3 style="color: green"> YOU HAVE PASSED</h3>';
     }
     else{
        echo '<h3 style="color: red"> YOU HAVE FAILED</h3>';
     }
     $grade = 'A';
     // If-Else IF-Else
     if($grade == 'A'){
         echo '<h2 style="color: green"> YOU ARE A SUPERSTAR!</h2>';
     }
     elseif ($grade == 'B'){
         echo '<h2 style="color: blue">YOU DID WELL!</h2>';
     }
     else{
         echo '<h2 style="color: red"> YOU HAVE FAILED....</h2>';
     }
    ?>
<?php 
    include 'include/footer.php'
    ?>