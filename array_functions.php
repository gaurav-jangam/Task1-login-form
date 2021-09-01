<html>
    <head>
        <Title>Arrays Functions</Title>
    </head>
    <body>
        <pre>
     <?php $array = array(4,8,15,16,23,42);
     echo "0 position {$array[0]}";
     ?><br/>
     Count: <?php echo count($array) ?><br/>
     Max: <?php echo max($array) ?><br/>
     Min: <?php echo min($array) ?><br/>
     <br/>
     Sort: <?php sort($array); print_r($array) ?><br/>
     Reverse Sort: <?php rsort($array); print_r($array) ?><br/>
     <br/>
     Implode: <?php echo $string = implode(" * ", $array); ?><br/>
     Explode: <?php print_r(explode(" * ", $string)); ?><br/>
     <br/>
     In array: <?php echo in_array(42, $array); ?><br/>
     <?php print_r($array); ?>
     </pre>
    </body>
</html>