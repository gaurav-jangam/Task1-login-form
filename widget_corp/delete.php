<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php
    if(intval($_GET["subj"]) == 0){
        redirect_to("content.php");
    }
    $id= $_GET["subj"];

    $query = "DELETE FROM subjects WHERE id = {$id} LIMIT 1 ";
    if ($db->query($query) === TRUE) {
        $message = "New record created successfully";
        echo $message;
        // echo "><a href=\"edit_subject.php?subj=" . urlencode($subject["id"]) . "\">
        header("Location: content.php"); 
        
      } else {
        echo "Error: " . $query . "<br>" . $db->error;
      }
    
?>