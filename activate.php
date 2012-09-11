<?php

include('core/init.inc.php');

if(isset($_GET['aid'])){
	activate_account($_GET['aid']);
}

header('Location: login.php');

?>
