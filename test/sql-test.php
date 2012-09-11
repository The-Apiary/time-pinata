<html>
<?php
	echo "<h3>Testing...</h3>";
	$con = mysql_connect("pinata.tfhoneywell.com", "donkeys", "ProprietaryD@ta");
	if (!$con){
		die('Could not connect: ' . mysql_error());
	}
	$db = mysql_select_db("pinacolada");
	if (!$db){
		die('Could not connect: ' . mysql_error());
	}
	
	echo "<h3>Success!</h3>";
	mysql_close();
?>
</html>
