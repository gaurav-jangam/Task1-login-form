<html>
    <head>
        <title>
        Logical Expressions
        </title>
    <head>
    <body>
        
        <?php
        $a = 4;
        $b = 4;
        if($a > $b) {
            echo "a is larger than b";
        }elseif( $a == $b){
            echo "a is equal to b";
        }else{
            echo "b is larger than a";
        }
        ?>
        <br/>
        <?php
        $c = 3;
        $d = 3;
        if(($a > $b) && ($c > $d)){
            echo "a is larger than b AND ";
            echo "c is larger than d";
            echo "<br/>";
        }
        if(($a > $b) || ($c > $d)){
            echo "a is larger than b OR ";
            echo "c is larger than d";
            echo "<br/>";
        }else{
            echo "neither a is larger than b or c is larger than d";
        }
        ?>
        <br/>
        <?php
        unset($a);
        if (!isset($a)){
            $a = 100;
        }
        echo $a;
        ?>
        <br/>
        <?php
        if(is_int($a)){
            settype($a, "string");
        }
        echo gettype($a);
        ?>

</body>        
</html>