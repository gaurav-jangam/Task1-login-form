<html>
    <head>
        <title>
        Reading cookies
        </title>
    <head>
    <body>
        <?php
        $val1 = 0;
     if(isset($_COOKIE['text'])) {
            $val1 = $_COOKIE['text'];

        }
     
      echo $val1;
      ?>

<?php
        // Delete the cookie
      setcookie("text", 0, time()-(60*60*24*7) );
      ?>
</body>        
</html>