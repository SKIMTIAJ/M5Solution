
<?php include("../config.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../Css/admin-dasbord.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/342e854313.js"></script>
</head>
<body class="login-body">
	<?php 
	// define variables and set to empty values
	$emailErr = $passwordErr = $dosntMatch = "" ;
	$email = $password = "";
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		  if (empty($_POST["email"])) {
		    $emailErr = "Email is required";
		  } else {
		    $email = test_input($_POST["email"]);
		    // check if e-mail address is well-formed
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      $emailErr = "Invalid email format";
		    }
		  }
		  if(empty($_POST["password"])){
		  	$passwordErr = "Password is Required";
		  }else{
		  	$password = test_input($_POST["password"]);
		  }

		  $loginQuery = "SELECT * FROM Admin_Data";
			$res = mysqli_query($conn,$loginQuery);
			if (mysqli_num_rows($res)>0) {
				while ($row = mysqli_fetch_assoc($res)) {
					if ($email === $row['Email'] && $password === $row['Password']) {
						$_SESSION["User_Email"] = $row['Email'];
						header("Location:dashbord.php");
					}else{
						$dosntMatch = "Email & Password is not match";
					}
				}
			}
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	?>
	<h1 class="Admin-caption">Admin</h1>
	<h3 class="Admin-sub-caption" style="">Login</h3>

	<h6 class="Admin-sub-caption" style=" color: red;"><?php echo $dosntMatch;?> </h6>
	<div class=" admin-form-div" style="">
		<form class="form-group admin-login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<input class="form-control" type="email" name="email" placeholder="Email" required="true">
			<input class="form-control" type="password" name="password" placeholder="Password" required="true">
			<button class="btn btn-primary" type="submit"> Login</button>
		</form>
	</div>
</body>
</html>