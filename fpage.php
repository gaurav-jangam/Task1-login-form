<html>
    <head>
        <title>
        First Page
        </title>
    <head>
    <body>
        <?php
        $lintext = "<Click> & Second page";
        ?>
        <a href = "spage.php?name=<?php echo urlencode("Gaurav Jangam"); ?>&id=1">
        <?php echo htmlspecialchars($lintext); ?>

        </a>
    
</body>        
</html>