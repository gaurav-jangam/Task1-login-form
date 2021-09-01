<html>
    <head>
        <title>
        Loops: While
        </title>
    <head>
    <body>
        
        <?php 
        $count = 0;
        while ($count<=10){
            echo $count.",". "hello";
            $count++;
            echo "<br/>";
            
        }
        echo $count;
        echo "<br/> count: {$count}";
        ?>
        <br/>
         <?php 
        $count = 0;
        while ($count<=10){
            if($count == 5){
                echo "Five";
            }else{
            echo $count.",";
        }
            $count++;
            echo "<br/>";
        }
        ?>
</body>        
</html>