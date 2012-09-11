<?php

// checks if the given username exists in the table.
function user_exists($email){
	$email = mysql_real_escape_string($email);
	
	$total = mysql_query("SELECT COUNT(user_id) FROM users WHERE user_email = '{$email}'");
	
	return (mysql_result($total, 0) == '1') ? true : false;
}

// checks if the given username and password combination is valid.
function valid_credentials($email, $pass) {
	$email = mysql_real_escape_string($email);
	$pass = sha1($pass);
	
	$total = mysql_query("SELECT COUNT(user_id) FROM users WHERE user_email = '{$email}' AND user_password = '{$pass}'");
	
	return (mysql_result($total, 0) == '1') ? true : false;
}

// checks if the given user account is active.
function is_active($email){
	$email = mysql_real_escape_string($email);
	
	$sql = "SELECT
				COUNT(user_activations.user_id)
			FROM users
			INNER JOIN user_activations
			ON users.user_id = user_activations.user_id
			WHERE users.user_email = '{$email}'";
	
	$result = mysql_query($sql);
	
	return (mysql_result($result, 0) == '0') ? true : false;
}

// activates the account related to the given activation code.
function activate_account($aid){
	$aid = mysql_real_escape_string($aid);
	
	mysql_query("DELETE FROM user_activations WHERE activation_code = '{$aid}'");
}

// adds a user to the database.
function add_user($user, $email, $pass) {
	$user = mysql_real_escape_string(htmlentities($user));
	$email = mysql_real_escape_string(htmlentities($email));
	$pass = sha1($pass);
	
	$charset = array_flip(array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9)));
	$aid = implode('', array_rand($charset, 10));
	
	echo "<h1>{$aid}</h1>";
	
	$body = "Hi,<br>Thanks for joining Pinata.  Click the link to activate your account!<br>http://localhost/www2/time-pinata/activate.php?aid={$aid}";
//	$body = <<<EMAIL 
//
//	Hi,
//	
//	Thanks for joining Pinata.  Click the link to activate your account!
//	
//	http://localhost/www2/time-pinata/activate.php?aid={$aid}
//	
//EMAIL;

	mail($email, 'Your new Pinata account', $body, 'From: admin@pinata.com');

	mysql_query("INSERT INTO users (user_name, user_email, user_password, user_create_time, user_modify_time) VALUES ('{$user}', '{$email}', '{$pass}', NOW(), NOW())");

	$user_id = mysql_insert_id();
	
	mysql_query("INSERT INTO user_activations (user_id, activation_code) VALUES ('{$user_id}', '{$aid}')");
}

?>
