<?php

$to = '';
$subject = $_POST [''];
$message = $_POST [''];

$header = 'from: ' . $_POST['from'];

//mail versturen
mail($to, $subject, $message, $header);


echo 'verstuurd';