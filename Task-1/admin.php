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
<script>  


function checkemail() {
	var name=document.validation.name.value;  
	var password=document.validation.password.value;  
  var str = document.validation.email.value;
  
  var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
  if (filter.test(str))
    testresults = true
  else {
    alert("Please input a valid email address!")
    testresults = false
  } if(password==null || password==""){  
  alert("Password must not be empty.");  
  return false;  
  }
}  
  



function checkbae() {
  if (document.layers || document.getElementById || document.all)
    return checkemail()
  else
    return true
}

</script> 
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
        $sql = "select *from admin where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['email'] = $email;
            header("Location: table/"); 
        } else {
            echo "
			<div class='container-login100'>
			<div class='wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30'>
			<div class='form'>
			<h3>Incorrect email/password.</h3><br/>
            <img style='height:10rem' src='images/f.gif' alt='image'/>
			<p class='link'>Click here to<a  class='m-1 pl-1 pr-1 p-1 text-white' href='index.php'><button type='button' class='btn btn-primary'>Login</button>
            </a> again.</p>
                  </div>
				  </div>";
        }
    } else {
?>  
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 col-9" >
				<div class="col-7 p-t-35" style="border-right: 4px dotted #0055fb;">
					<div style=" display: flex;
					align-items: center;" class="w-50 h2 font-weight-bold f-z-20"><div class="w-50"> Helping Businesses Grow Online with Simplified Solutions</div>
					<div class="p-l-100"><img style="height: 15rem; " src="images/cp.gif" alt="IMG"></div>
					</div>
					
					<div class="w-75 pb-5">
						<p>At Brainstorm Force, we believe creating a website shouldn’t be difficult or complicated. We build quality products and tools that are simple to use, affordable, and reliable to help entrepreneurs, professionals, and bloggers grow online.</p>
					</div>
				</div>

				<form name="validation" method="post"  onsubmit="return checkbae()">
					<div  class=" text-center js-tilt pb-4" data-tilt>
						<a href="admin.php"><img style="height: 5rem;" src="images/img-2.png" alt="IMG"></a>
					</div>
					<span class="login100-form-title">
						Brainstorm Force
					</span>
					<h5 class="text-center mb-1">
						Admin Login
					</h5>

					<div class="wrap-input100">
						<input class="input100" type="text" name="email" placeholder="email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100  ">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					

					<div class="text-center p-t-35">
						<a class="txt2" href="register.php">
							Create an account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
                <?php } ?>
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