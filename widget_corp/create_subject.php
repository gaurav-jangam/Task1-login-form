<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php
    $menu_name = $_POST["menu_name"];
    $position = $_POST["position"];
    $visible = $_POST["visible"];
?>
<?php
    $query= "INSERT INTO subjects(
        menu_name, position, visible
    ) VALUES(
        '{$menu_name}', '{$position}', '{$visible}'
    )";
    if ($db->query($query) === TRUE) {
        echo "New record created successfully";
        header("Location: content.php");
        exit;
      } else {
        echo "Error: " . $query . "<br>" . $db->error;
      }
?>

