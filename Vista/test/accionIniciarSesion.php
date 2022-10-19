<script src="../js/iniciarSesion.js"></script>
<?php
include_once("../estructura/Cabecera.php");
$metodo = data_submitted();
$objCaptcha = new c_testCaptchas();
if ($objCaptcha->mtCaptcha($metodo["mtcaptcha-verifiedtoken"])) {
?>
    <script>
        comprobarCuenta();
    </script>
<?php
} else {
?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'El captcha no se realizo correctamente!',
            showConfirmButton: false,
            timer: 1500
        })

        function redireccionarPagina() {
            location.href = "IniciarSesion.php"
        }
        setTimeout("redireccionarPagina()", 1450);
    </script>
<?php
}
?>