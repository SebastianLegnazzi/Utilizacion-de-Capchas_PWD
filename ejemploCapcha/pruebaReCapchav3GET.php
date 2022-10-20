<?php

$respuestaServidor = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfmtoIiAAAAAB1gwrwaEaRPr4isiIXvR-UlEr6B&response=".$_GET['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
$arrayResultado = json_decode($respuestaServidor, TRUE);
print_r($arrayResultado);

?>