<html>
    <head>
        <title>
        Second Page
        </title>
    <head>
    <body>
        <?php
        $id = $_GET["id"];
        $name = urldecode($_GET["name"]);

        echo $id . "{$name}";
        ?>
        <br/>
        <?php
        $string = "Gaurav Jangam";
        echo urlencode($string);
        echo "<br/>";
        echo rawurlencode($string);
        ?>
    
</body>        
</html>