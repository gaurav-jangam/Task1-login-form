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
        $email = $_POST['email'];  
        $password = $_POST['password'];  
          
            //to prevent from mysqli injection  
            $email = stripcslashes($email);  
            $password = stripcslashes($password);  
            $email = mysqli_real_escape_string($con, $email);  
            $password = mysqli_real_escape_string($con, $password);  
        // Check user is exist in the database
        $sql = "select *from users where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['email'] = $email;
            header("Location: dashboard.php"); 
        } else {
            echo "
			<div class='login'>
			<div class='login_box p-l-55 p-r-55 p-t-80 p-b-30'>
			<div class='middle'>
			<h3>Incorrect email/password.</h3><br/>
            <img style='width:10rem' src='images/f.gif' alt='image'/>
			<p class='link'>Click here to<a  class='m-1 pl-1 pr-1 p-1 text-white' href='index.php'><button type='button' class='lg btn-primary'>Login</button>
            </a> again.</p>
                  </div>
				  </div>";
        }
    } else {
?>  
<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
                <div class="top_link"><button class="btn"><a href="register.php">Create an Account</a></button></div>
				<div class="contact">
                <form name="validation" method="post"  onsubmit="return checkinfologin()">
                        <img class="logo" src="images/img-2.png" alt="IMG">
                        <h2>Brainstorm Force</h2>
						<h3>SIGN IN</h3>
						<input  type="text" name="email" id="email" placeholder="EMAIL">
						<input  type="text" name="password" id="password" placeholder="PASSWORD">
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