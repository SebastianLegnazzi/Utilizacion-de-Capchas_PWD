<?php

$respuesta = file_get_contents("https://service.mtcaptcha.com/mtcv1/api/checktoken?privatekey=MTPrivat-eU0Pdq5Q0-r9ce58O6tIZBdHsmUdbPlLQLOeqb5zdyN2BCUcpfmFFgpxY20B&token=".$_GET['mtcaptcha-verifiedtoken']);

$atributos = json_decode($respuesta, TRUE);

print_r($atributos);


?>