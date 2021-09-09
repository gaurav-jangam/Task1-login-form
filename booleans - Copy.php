<html>
    <head>
        <Title>Booleans and NULL</Title>
    </head>
    <body>
     <?php 
     $bool = true;
     $bool2 = false;
     ?>
     $bool:<?php echo $bool; ?><br/>
     $bool2:<?php echo $bool2; ?><br/>
     <br/>
     <?php 
     $var = 3;
     $var4 = 3;
     $var2 = "cat";
     ?>
     $var1 is set: <?php echo isset($var); ?><br/>
     $var2 is set: <?php echo isset($var2); ?><br/>
     $var3 is set: <?php echo isset ($var3); ?><br/>
     <br/>
     $var1 is set: <?php echo isset($var); ?><br/>
     $var2 is set: <?php echo isset($var2); ?><br/>
     $var3 is set: <?php echo isset ($var3); ?><br/>
     <br/>
     $var1 is empty: <?php echo empty($var); ?><br/>
    
    </body>
</html>