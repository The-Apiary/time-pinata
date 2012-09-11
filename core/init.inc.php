<?php
	
session_start();

$exceptions = array('index', 'login', 'register', 'activate');

$page = substr(end(explode('/', $_SERVER['SCRIPT_NAME'])),0,-4);

if (in_array($page,$exceptions) === false){
	if (isset($_SESSION['email']) === false) {
		header('Location: index.php');
		die();
	}
}

mysql_connect("pinata.tfhoneywell.com", "donkeys", "ProprietaryD@ta");
mysql_select_db("pinacolada");

$path = dirname(__FILE__);

include("{$path}/inc/user.inc.php");

?>
