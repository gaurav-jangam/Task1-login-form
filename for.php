<html>
    <head>
        <title>
        Loops: For
        </title>
    <head>
    <body>
        
        <?php 
       for($count=0; $count<=10;$count++){
           if($count == 7){
               echo "SEVEN";
           }else{
           echo $count . ",";
           }
           echo "<br/>";
       }
        ?>
        <br/>
</body>        
</html>