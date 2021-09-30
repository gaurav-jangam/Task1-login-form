<html>
    <head>
        <!--===============================================================================================-->
        <title>Login</title>
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="index.css">
        <!--===============================================================================================-->
    </head>
    <?php      
    include('connect.php'); 
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email'])) {
        $name = $_POST['name'];  
    	$email = $_POST['email'];  
    	$password = $_POST['password'];
          
            //to prevent from mysqli injection  
            $name = stripcslashes($name);  
            $email = stripcslashes($email);  
            $password = stripcslashes($password);  
            $name = mysqli_real_escape_string($con, $name);  
            $email = mysqli_real_escape_string($con, $email);  
            $password = mysqli_real_escape_string($con, $password);  
        // Check user is exist in the database
		$sml = $con->query("SELECT email FROM users WHERE email='$email'");
        if($sml->num_rows > 0){
			echo "
			<div class='login'>
			<div class='login_box p-l-55 p-r-55 p-t-80 p-b-30'>
			<div class='middle'>
			<p>Soory.</p><br/>
			<p>This Email is Already in Use</p><br/>
			<img style='width:10rem' src='images/f.gif' alt='image'/><br/>
			<p class='link'>Click here to<a  class='m-1 pl-1 pr-1 p-1 text-white' href='register.php'><button type='button' class='lg btn-primary'>Register</button>
			</a> again.</p>
				  </div>
				  </div>";
        }else{
    
    $sql = "INSERT INTO users (name, email, password)
    VALUES ('$name', '$email', '$password')";
    
    if ($con->query($sql) === TRUE) {
		header( "refresh:5; url=index.php" ); 
		echo "
		<div class='login'>
		<div class='login_box p-l-55 p-r-55 p-t-80 p-b-30'>
		<div class='middle'>
		<p>New record created successfully</p><br/>
		<img style='width:10rem' src='images/s3.gif' alt='image'/><br/><br/>
		<p class='link'>You will be redirect to<a  class='m-1 pl-1 pr-1 p-1 text-white' href='index.php'><button type='button' class='btn btn-primary'>Login</button>
		</a> page in <span style='font-weight:bold'; id='countdowntimer'><b>5</b> </span> seconds.</p>
		<script type='text/javascript'>
    const timeleft = 5;
    const downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById('countdowntimer').textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>
			  </div>
			  </div>";


			} else {
				echo "Error: " . $sql . "<br>" . $con->error;
			  } 
    }
}else {
?>  
<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
                <div class="top_link"><button class="btn"><a href="index.php">Back to Login</a></button></div>
                <br>
				<div class="contact">
                <form name="validation" method="post"  onsubmit="return checkinforegister()">
                        <img class="logo" src="images/img-2.png" alt="IMG">
                        <h2>Brainstorm Force</h2>
						<h3>SIGN UP</h3>
						<input type="text" name="name" id="name" placeholder="NAME">
						<input type="text" name="email" id="email" placeholder="EMAIL">
						<input type="password" name="password" id="password" placeholder="PASSWORD">
						<button class="submit">LET'S GO</button>
					</form>
				</div>
			</div>
			<div class="right">
                <div class="right-text">
                    <img class="logo2" src="images/cp.gif" alt="IMG">
					<h2>
                        Helping Businesses Grow Online with Simplified Solutions
                    </h2>
					<h5>At Brainstorm Force, we believe creating a website shouldn’t be difficult or complicated. We build quality products and tools that are simple to use, affordable, and reliable to help entrepreneurs, professionals, and bloggers grow online</h5>
				</div>
				
			</div>
		</div>
            <?php } ?>
	</section>
</body>
<script src="new.js"></script>
</html>