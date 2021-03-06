<!DOCTYPE html>
<html>
<body>
	<h2>List of all passengers</h2>
	<p>
<?php
	    try
	    {
	        //open the sqlite database file
	        $db = new PDO('sqlite:./myDB/airport.db');

	        // Set errormode to exceptions
	        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	        //select all passengers
		$query = "SELECT * FROM passengers";
	        $result = $db->query($query);

		//loop through each tuple in result set
	        foreach($result as $tuple)
	        {
	             echo "<font color='blue'>$tuple[ssn]</font> $tuple[f_name] $tuple[m_name] $tuple[l_name]<br/>\n";
	        }

	        $db = null;	//disconnect from db
	    }
	    catch(PDOException $e)
	    {
	        die('Exception : '.$e->getMessage());
	    }
?>
	</p>
</body>
</html>
