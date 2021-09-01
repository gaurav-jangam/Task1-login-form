<html>
    <head>
        <Title>Arrays</Title>
    </head>
    <body>
     <?php $array = array(4,8,15,16,23,42);
     echo $array[0];
     ?>
     <?php $array2 = array(6,"fox","dog", array("x","y","z"));
     $array2[3] = "cat";
     echo $array2[3][1];?>
     <br/>
     <?php
     echo $array2[3];
     ?>
     <br/>
     <?php $array3 = array("fname" => "Gaurav", "lname" => "Jangam");
     echo $array3["fname"]. " " .$array3["lname"];
     ?><br/>
     <?php $array3["fname"] = "Bunty"; ?>
     <?php echo $array3["fname"]. " " .$array3["lname"]; ?>
     <br/>
     <pre><?php print_r($array3); ?></pre>
    </body>
</html>