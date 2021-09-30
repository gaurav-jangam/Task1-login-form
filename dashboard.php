<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="index.css">
<!--===============================================================================================-->
</head>
<?php
    include('connect.php'); 
    session_start();
    if(!isset($_SESSION["email"])) {
        header("Location: index.php");
        exit();
    }
    $email =$_SESSION['email']; 
    $query = "SELECT * FROM users where email ='$email' ";

	$comments = mysqli_query($con,$query);


	
	while($row = $comments->fetch_assoc()) {

	
	  $name = $row['name'];
	  $email = $row['email'];

	 
	  
	 
	}

?>
<body>
<section class="login">
		<div class="login_box">
			<div class="middle">
				<p>Hey, <span class="name"><?php echo $name; ?></span> !</p><br/>
				<img  style="text-align:right; margin-top: rem; width:10rem" src = "images/h.gif"/>	
				<p>Welcome to dashboard page.</p><br/>
				<p><a href="logout.php"><button type='button' class='lg'>Logout</button></a></p>
			</div>		
		</div>
	</section>



		
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>