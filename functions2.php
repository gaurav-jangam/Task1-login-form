<html>
    <head>
        <title>
        Functions2
        </title>
    <head>
    <body>
    <?php
    $bar = "outside";
    function foo(){
        global $bar;
        $bar = "inside";
    }
    foo();
    echo $bar . "<br/>";
    ?>
    <br/>
    <?php
    $bar = "outside";
    function foo2($var){
        $var = "inside";
        return $var;
    }
    $bar = foo2($bar);
    echo $bar . "<br/>";
    ?>
    <?php
    function paint($room = "Hall",$color = "orange" ){
        echo "The color of the {$room} is {$color}";
    }
    paint();
    ?>
</body>        
</html>