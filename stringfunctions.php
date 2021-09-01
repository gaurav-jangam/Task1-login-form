<html>
    <head>
        <Title> String Functions</Title>
    </head>
    <body>
        <?php
        // Strings can also be denoted as single quote
        // Strings can be stored in variables
        // Concatonate
        ?>
      <?php
      $First = "Hey how are you ";
      $Second = "I'm fine";
      ?>
      <?php 
      $Third = $First;
      $Third .= $Second;
      echo $Third;
      ?>
      <br/>
    Lowercase: <?php echo strtolower($Third); ?><br/>
    uppercase: <?php echo strtoupper($Third); ?><br/>
    Lowercase first-letter: <?php echo ucfirst($Third); ?><br/>
    uppercase words: <?php echo ucwords($Third); ?><br/>
    <br/>
    Length: <?php echo strlen($Third); ?><br/>
    Trim: <?php echo $Fourth = $First . trim($Second); ?><br/>
    Find: <?php echo strstr($Third, "you") ?><br/>
    Replaced by string: <?php echo str_replace("you", "we", $Third) ?><br/>


    Repeat string: <?php echo str_repeat($Third, 2) ?><br/>
    Sub string: <?php echo substr($Third, 2,12) ?><br/>
    Find position string: <?php echo strpos($Third, "you") ?><br/>
    Find Character: <?php echo strchr($Third, "o") ?><br/>


    </body>
</html>