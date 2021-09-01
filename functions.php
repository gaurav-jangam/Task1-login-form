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


    ?>
</body>        
</html>