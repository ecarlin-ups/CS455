<?php
try
 {
 //open the sqlite database file
 //assumes airport.db is in the myDB directory and has read/write permissions
 $db = new PDO('sqlite:./myDB/airport.db');
 // Set errormode to exceptions
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  //select all passengers
 $db->exec("insert into passengers values ('David', NULL, 'Chiu', '888-88-8888');");
 
 
 //disconnect from database
 $db = null;
 }
 catch(PDOException $e)
 {
 die('Exception : '.$e->getMessage()); //die will quit the script immediate
 }
?>	