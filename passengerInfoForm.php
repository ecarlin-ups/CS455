<?php

$fname =""; // First name
$mname =""; // Middle name
$Lname =""; // Last name
$ssn =""; //ssn

$fnameError ="";
$lnameError ="";
$ssnError ="";


if(isset($_POST['submit'])) { // Checking null values in message.

	$fname = $_POST["fname"];
	$mname = $_POST["mname"];
	$lname = $_POST["lname"];
	$ssn = $_POST["ssn"];
	
	if (empty($_POST["fname"])){
		$fnameError = "First name is required";
	}
	
	if (empty($_POST["lname"])){
		$lnameError = "Last name is required";
	}

	if (empty($_POST["ssn"])){
		$ssnError = "SSN is required";
	}
	
}	
?>

<!DOCTYPE HTML>
<html>
  <head>
    	<meta charset="utf-8">
    	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title="Passenger Info Form">  
</head>
	<body>
				<h2>Passenger Info Form</h2>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <!-- client side scripting protection -->
					<label>First Name :</label>
					<input class="input" type="text" name="fname">
					<div class="error"><?php echo $fnameError;?></div>
					<label>Middle Name :</label>
					<input class="input" type="text" name="mname">
					<div></div>
					<label>Last Name :</label>
					<input class="input" type="text" name="lname">
					<div class="error"><?php echo $lnameError;?></div>
					<label>SSN :</label>
					<input class="input" type="text" name="ssn">
					<div class="error"><?php echo $ssnError;?></div>
					<input class="submit" type="submit" name="submit" value="Submit">
				</form>
	</body>
</html>
