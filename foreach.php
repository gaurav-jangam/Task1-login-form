<html>
    <head>
        <title>
        Loops: Foreach
        </title>
    <head>
    <body>
        
        <?php 
        $ages = array(1,2,3,4,5,6,7,8);
        ?>
        <?php
        //Using value
        foreach($ages as $age){
            echo "<br/>";
            echo $age. ",";
        }
        ?>
        <br/>
        <br/>
        <?php
        // Using each key => value pair
        foreach($ages as $position => $age){
            echo $position. ":" .$age. "<br/>";
        }
        ?>
        <br/>
        <br/>
        <?php
        $prices = array("Brand new computer" => 2000, "New smart phone"=>50000, "Learning PHP"=> "Priceless");
        foreach($prices as $key => $value){
            echo $key. ":" .$value. "<br/>";
        }
        echo "<br/>";
        foreach($prices as $key => $value){
            if(is_int($value)){
            echo $key. ": $" .$value. "<br/>";
            }else{
            echo $key. ":" .$value. "<br/>";
            }
        }
        ?>
</body>        
</html>