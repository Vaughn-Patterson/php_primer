

<?php 
    include 'include/header.php'
    ?>

   <h1> Hello HTML - PHP Primer</h1>
   <br/>
   <?php
        //Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>

    <?php
        //declare variable
        $name = 'Vaughn Patterson';
        $age = 26;
        // echo variable
        echo $name;
        echo '<h1>My Name Is: ' .$name.' </h1>';
        echo '<h1>My Age Is: ' .$age.' </h1>';
        


    ?>    

<?php 
    include 'include/footer.php'
    ?>
