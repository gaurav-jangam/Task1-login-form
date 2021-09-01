<html>
    <head>
        <title>
        Loops: Continue
        </title>
    <head>
    <body>
        
        <?php 
        for($count=0; $count<=10;$count++){
            if($count == 5){
                continue;
            }            
            echo $count . ",";
            echo "<br/>";
        }
        ?>
</body>        
</html>