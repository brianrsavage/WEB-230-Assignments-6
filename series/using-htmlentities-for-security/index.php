<?php
      if ( isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']) ) {
        // 01. Explain what htmlentities is doing.
        //~~~~~htmlentities is being wraped around our day, year, and date attributes so that
        //~~~~~ it can just print the html code someone could use to potentionaly harm our website with.
        //~~~~~ We make it so html is echoed out instead of initialized.
        $day = htmlentities($_GET['day']);
        $date = htmlentities($_GET['date']);
        $year = htmlentities($_GET['year']);
        if ( !empty($day) && !empty($date) && !empty($year)) {
          echo 'It is '.$day.' '.$date.' '.$year;
        }else{
          echo 'Fill in all fields';
        }
      }
    ?>
    <form action="index.php" method="GET">
      Day:<br/><input type="text" name="day"><br>
      Date:<br/><input type="text" name="date"><br>
      Year:<br/><input type="text" name="year"><br>
      <input type="submit" value="Submit">
    </form>
