<html>
    <head>
        <title>
        Loops: Break
        </title>
    <head>
    <body>
        
        <?php 
        for($count=0; $count<=10;$count++){
            if($count == 5){
                break;
            }            
            echo "<br/>";
            echo $count . ",";
        }
        ?>
        <br/>
        <br/>
        <?php 
        for($count=0; $count<=10;$count++){
             
            echo "<br/>";
            echo $count ;
            if($count == 10){ break; }
            echo ",";
        }
        ?>

</body>        
</html>