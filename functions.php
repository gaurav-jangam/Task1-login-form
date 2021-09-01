<html>
    <head>
        <title>
        Functions
        </title>
    <head>
    <body>
    <?php
        function say_hello() {
            echo "hello world <br/>";
        }
        say_hello();
        function say_hello2($word) {
            echo "hello {$word}! <br/>";
        }
        say_hello2("world");
        say_hello2("Everyone");

        $name = "Gaurav Jangam";
        say_hello2($name);

        function say_hello3($greeting, $target, $punct) {
            echo $greeting . ", " . $target . $punct . "<br/>" ;
        }

        say_hello3("hello", $name, "!");
    ?>
    <br/>
        <br/>
        <?php
        function addition(){
            echo 2 + 3 . "<br/>";
        }
        addition();

        

        function addition1($var1, $var2){
            return $var1 + $var2;
        }
        $sum = addition1(3,7);
        echo $sum;
        if(addition1(5,6) == 11 ){
           echo "yes";
        }
        function add_sub($val1, $val2){
            $add = $val1 + $val2;
            $sub = $val1 - $val2;
            $result = array($add, $sub);
            return $result;
        }
        $result_array = add_sub(10,5);
        echo "Add:" . $result_array[0];
        echo "Sub:" . $result_array[1];

        ?>

</body>        
</html>