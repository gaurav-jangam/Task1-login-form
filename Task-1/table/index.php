<?php
    session_start();
    if(!isset($_SESSION["email"])) {
        header("Location: adminlogin.php");
        exit();
    }
?>

<?php 
$user = 'root';
$pass = '';
$db = 'assignment';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

$sql = "SELECT * FROM users";
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Table 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">ADMIN PANEL</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-4">All USERS</h4>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Name</th>
					        <th>Email</th>

					      </tr>
					    </thead>
					    <tbody>
						
						<?php
						if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){?>
					        

							<?php
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}?>
 
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
		<form class="login100-form validate-form" action="../index.php">				

				<div class="text-center container-login100-form-btn">
				<button class="login100-form-btn btn btn-primary">LOGOUT</button>

				</div>
				

				
			</form>
	</section>


	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>