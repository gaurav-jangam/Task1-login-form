<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 col-9" >
				<div class="col-5 pt-5" style=" border-left: 4px dotted #0055fb;">
					<p>Hey,<?php echo $name; ?>!</p><br/>
					<p>You are now user dashboard page.</p><br/>
					<p><a href="logout.php"><button type='button' class='btn btn-primary'>Logout</button></a></p>
				</div>	
						<img  style="text-align:right; margin-top: -5rem; height:20rem" src = "images/h.gif"/>
					
			</div>
		</div>
	</div>
	
	

	
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