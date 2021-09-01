<html>
    <head>
        <title>
        Encoding
        </title>
    <head>
    <body>
        <?php
        $url_page = 'php-assignments/spage.php';
        $param1 = 'this is a string';
        $param2 = '"bad"/<>character$';
        $linktext = "<Click> & Second page";
        ?>
        <?php
        $url = "http://localhost/";
        $url .= rawurlencode($url_page);
        $url .= "?param1=" . urlencode($param1);
        $url .= "?param2=" . urlencode($param2);


        ?>
       
        <a href = "<?php echo htmlspecialchars($url); ?>">
        <?php echo htmlspecialchars($linktext); ?>

        </a>
    
</body>        
</html>