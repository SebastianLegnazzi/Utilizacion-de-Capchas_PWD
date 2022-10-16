<?php
class c_testCaptchas
{
    public function mtCaptcha($key)
    {
        $respuestaServidor = file_get_contents("https://service.mtcaptcha.com/mtcv1/api/checktoken?privatekey=MTPrivat-eU0Pdq5Q0-r9ce58O6tIZBdHsmUdbPlLQLOeqb5zdyN2BCUcpfmFFgpxY20B&token=" . $key);
        $arrayResultado = json_decode($respuestaServidor, TRUE);
        if ($arrayResultado["success"]) {
            $resp = true;
        } else {
            $resp = false;
        }
        return $resp;
    }
    public function reCaptchav2($key)
    {
        $respuestaServidor = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf95XwiAAAAAI4_sQDrVsPEH2U6pSEtww5V9UZ1&response=".$key."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $arrayResultado = json_decode($respuestaServidor, TRUE);
        if ($arrayResultado["success"]) {
            $resp = true;
        } else {
            $resp = false;
        }
        return $resp;
    }
    
    public function reCaptchav3($key)
    {
        $respuestaServidor = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfmtoIiAAAAAB1gwrwaEaRPr4isiIXvR&response=".$key."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $arrayResultado = json_decode($respuestaServidor, TRUE);
        if ($arrayResultado["score"] >= 0.5) {
            $resp = true;
        } else {
            $resp = false;
        }
        return $resp;
    }
}
