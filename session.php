<?php 
session_start();
?>
<html>
    <head>
        <title>
        Sessions
        </title>
    <head>
    <body>
        <?php
        $_SESSION['fname'] = "Gaurav";
        $_SESSION['lname'] = "Jangam";
        
      ?>
      <?php
      $name = $_SESSION['fname'] . " " . $_SESSION['lname'];
      echo $name; 
      ?>
</body>        
</html>