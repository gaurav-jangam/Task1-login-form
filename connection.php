<?php 
$user = 'root';
$pass = '';
$db = 'crud';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>
<html>
    <head>
        <title>
        Connection
        </title>
    <head>
    <body>
    <?php $sql = 'SELECT * FROM user';
$result = $db->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["user_id"]. " - Name: " . $row["user_name"]. " " . $row["user_email"]. "<br>";
  }
} else {
  echo "0 results";
}
$db->close();
?>

</body>        
</html>