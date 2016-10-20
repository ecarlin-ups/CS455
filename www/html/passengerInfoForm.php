<?php
$successMessage = "";

$fnameError ="";
$lnameError ="";
$ssnError ="";
$errors = 0;
if(isset($_POST['submit'])){ // Checking null values in message.

	if (empty($_POST["fname"])){
		$fnameError = "First name is required";
		$errors = 1;
	}
	
	if (empty($_POST["lname"])){
		$lnameError = "Last name is required";
		$errors = 1;
	}
	if (empty($_POST["ssn"])){
		$ssnError = "SSN is required";
		$errors = 1;
	}
	
	if ($_POST["submit"] && $errors == 0){
		$successMessage = "Success";
		echo "**********";
		include 'passengerFormHandler.php';
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
			<h1 class="success"><?php echo $successMessage ?><h1>
				<h2>Passenger Info Form</h2>
				<form method="post" action="passengerInfoForm.php">
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
