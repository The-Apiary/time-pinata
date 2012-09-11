<?php

$email = 'ngvitovitch@gmail.com';
$charset = array_flip(array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9)));
$aid = implode('', array_rand($charset, 10));
$body = "Hi,<br>Thanks for joining Pinata.  Click the link to activate your account!<br>http://localhost/www2/time-pinata/activate.php?aid={$aid}";
$subject = 'Your new Pinata account';
$from = 'From: admin@pinata.com';

echo "<h1>{$aid}</h1>";
echo "<h1>{$email}</h1>";
echo "<h1>{$subject}</h1>";
echo "<h1>{$from}</h1>";
echo "<h1>{$body}</h1>";

mail($email, $subject, $body, $from);

?>
