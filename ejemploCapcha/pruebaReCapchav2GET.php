<?php

$respuestaServidor = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf95XwiAAAAAI4_sQDrVsPEH2U6pSEtww5V9UZ1&response=".$_GET['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
$arrayResultado = json_decode($respuestaServidor, TRUE);
print_r($arrayResultado);


?>