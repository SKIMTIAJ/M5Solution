
<?php include("header.php")?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Css/service.css">
</head>
<body>
  <?php

  /* $con = mysqli_connect("localhost","root","","m5solution") or
  die("database Couldn't connect");
*/
 
$nameErr = $emailErr = $phoneErr = $commentErr = "";
$name = $email = $phoneNo = $comment= "";
$checkvar = "";
$wewillget = "";

if ($_SRVER["REQUEST_METHOD"] = "POST") {
  if (empty($_POST["Name"])) {
    $nameErr = "Name is Required";
  }else{
    $name = test_input($_POST["Name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
      }
  }

  if (empty($_POST["Email"])) {
    $emailErr = "Email is Required";
  }else{
    $email = test_input($_POST["Email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Only letters and white space allowed";
      }
  }

  if (empty($_POST["Phoneno"])) {
    $phoneErr = "Name is Required";
  }else{
    $phoneNo = test_input($_POST["Phoneno"]);
    /*if (!preg_match("/^[a-zA-Z ]*$/",$phoneNo)) {
          $phoneErr = "Only letters and white space allowed";
      }*/
  }

    if (empty($_POST["message"])) {
      $commentErr = "Please Ensure Your Comment!";
    } else {
      $comment = test_input($_POST["message"]);
    }

 } 

  if (isset($name) && isset($email) && isset($phoneNo) && isset($comment)) {

      $Squery = "INSERT INTO get_In_Touch (Name, Email, PhoneNo, Massage) VALUES ('$name','$email','$phoneNo',
      '$comment')";
      $checkvar = "AllisSet";
    if (mysqli_query($conn,$Squery)) {
      $checkvar = "Thanks For Connecting Us";
      $wewillget = "Our Experts will get back to you soon";
      }else {
      echo "Error: " . $Squery . "<br>" . mysqli_error($conn);
      }
    }


mysqli_close($conn);

 /*if (empty($nameErr) || empty($emailErr) || empty( $phoneErr) || empty($commentErr))) {
  echo "<script>alert('$nameErr','$emailErr','$phoneErr','$commentErr');</script>"; 
  }*/

  /*$stmt = $con->prepare("INSERT INTO get_In_Touch (Id,Name,Email,PhoneNo,massage) VALUES (?,?,?,?)");
  $stmt->bind_param("ssss","",$name,$email,$phoneNo,$comment);
  $stmt->execute();

  $stmt->close();
  $con->close();*/
  

 function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

 /* $_SESSION["User_Name"] = $name;
  $_SESSION["User_email"] = $email;
  $_SESSION["User_phoneNo"] = $phoneNo;
  $_SESSION["User_coment"] = $comment;*/
}

 

/*echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phoneNo;
echo "<br>";
echo $comment;
echo "<br>";
echo "here :";
echo $checkvar;*/
?>
<div class="container-fluid uxdesign-above-div" style="margin-bottom: -10%;">

	<div class="mobiledev-above-div" style="top: 50%;">
		
		<h2 class="header-h2" style="text-align: center;"><?php echo $checkvar; echo "<br>";?></h2>
      <h6 class="header-h6" style="text-align: center;"><?php echo $wewillget;?></h6>
			<br>

			<h3 id="congrads-txt" style="color: white;"></h3>
	</div>	
	</div>
	
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

			<!-- <?php echo $_SESSION["User_Name"]?>
			<?php echo $_SESSION["User_email"]?>
			<?php echo $_SESSION["User_phoneNo"]?>
			<?php echo $_SESSION["User_coment"]?> -->