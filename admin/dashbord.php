<?php include("../config.php")?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../Css/inde.css">
	<link rel="stylesheet" type="text/css" href="../Css/service.css">
	<link rel="stylesheet" type="text/css" href="../Css/admin-dasbord.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/342e854313.js"></script>

	<script type="text/javascript">
		function sessionFunction(){
			<?php 
			if (!isset($_SESSION["User_Email"])) {
				header("Location:index.php");
			}
			?>
		}

	</script>
	
</head>
<body onload="sessionFunction()">
	<div class="container-fluid uxdesign-above-div" >
 		<div class="mobiledev-above-div">
 			<h6 class="header-h6"> Admin Panel</h6>
		<h2 class="header-h2">WelCome To The Admin Panel 
			<br>M5 Solution</h2>
			<br>
 		</div>
	</div>
	<table class="table container">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone No</th>
			<th>Massege</th>
		</tr>
	<?php 
	$takeSql = "SELECT * FROM get_In_Touch";
	$result = mysqli_query($conn,$takeSql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $row['Name'];?></td>
			<td><?php echo $row['Email'];?></td>
			<td><?php echo $row['PhoneNo'];?></td>
			<td><button class="btn btn-primary msg-btn" id="" onclick="MassageFunction('<?php echo $row['Massage'];?>')">Massage</button> </td>
			<!-- <a href="dashbord.php?id=<?php echo $row['Id'];?>"> -->
		</tr>

		<?php	

		}
	}
	?>	
	</table>
	<div id="model_parent" class="Model_Massage">
		<div class="Massage_Content">
			<span class="close">&times;</span>
			<p id="Massage_p" style="color: black; font-weight: bold; font-family: normal;"></p>
		</div>
	</div>
	<!-- <?php echo $UpdateMassage; ?> -->

	<script type="text/javascript">

		// Get the modal
		var modal = document.getElementById("model_parent");

		function MassageFunction(masg){
			modal.style.display = "block";
			document.getElementById('Massage_p').innerHTML = masg;
			
		}
		// Get the button that opens the modal
		/*var btn = document.getElementById("msg-btn");*/
		//var btn = document.getElementsByClassName("msg-btn");;

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		/*btn.onclick = function() {
		  var changeMsg = "";
		  modal.style.display = "block";
		  var changeMsg = <?php echo $row['Massage'];?>
		  document.getElementById("Massage_p").innerHTML = changeMsg;
		}*/

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		  modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		  }
		}
	</script>

	<?php //session_destroy(); ?>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
