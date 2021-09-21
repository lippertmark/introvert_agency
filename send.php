<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];


$apiToken = "2043748273:AAEJtZ-sgOeMsVjxRJu8uU_D8t-s7ukYWvI";
$data = [
   'chat_id' => 'PsbeBOd5Njw0YTZi',
   'text' => $name . " " . $phone . " " . $email . "\n" .  $msg];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
?>