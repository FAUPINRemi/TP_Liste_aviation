
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$user_data = "| $name |$phone|$email \n";

file_put_contents('users.txt', $user_data, FILE_APPEND);

header('Location: confirmation.php');
exit;
?>