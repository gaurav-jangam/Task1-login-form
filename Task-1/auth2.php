<?php      
    include('connect.php');  
    $name = $_POST['name'];  
    $email = $_POST['email'];  
    $password = $_POST['password'];
    // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
        $sml = $con->query("SELECT email FROM users WHERE email='$email'");
        if($sml->num_rows > 0){
          echo 'Sorry, this Email is Already in Use';
        }else{
    
    $sql = "INSERT INTO users (name, email, password)
    VALUES ('$name', '$email', '$password')";
    
    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    } 
}
?>  