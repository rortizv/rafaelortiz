<?php

$destination = "rortizv@unicartagena.edu.co";
$name = $_POST["name"];
$email = $_POST["email"];
$phoneNum = $_POST["phoneNum"];
$message = $_POST["message"];
$content = "Name: " . $name . "\nEmail: " . $email . "\nPhone number: " . $phoneNum . "\nMessage: " . $message;
mail($destination,"*** Message from your web site ***", $content);
header("Location: thanks.html");

?>

