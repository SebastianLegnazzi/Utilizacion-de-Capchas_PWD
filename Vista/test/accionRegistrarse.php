<?php
include_once("../estructura/Cabecera.php");
$metodo = data_submitted();
$objPersona = new c_usuarios();
$objCaptcha = new c_testCaptchas();
if ($objCaptcha->reCaptchav2($metodo["g-recaptcha-response"])) {
    if ($objPersona->cargar($metodo)) {
?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'La cuenta se creo correctamente!',
                showConfirmButton: false,
                timer: 1500
            })

            function redireccionarPagina() {
                location.href = "index.php"
            }
            setTimeout("redireccionarPagina()", 1450);
        </script>
<?php
    } else {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'La cuenta no se pudo crear en la base de datos!',
                showConfirmButton: false,
                timer: 1500
            })

            function redireccionarPagina() {
                location.href = "registrarse.php"
            }
            setTimeout("redireccionarPagina()", 1450);
        </script>
        <?php
    }
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
            location.href = "registrarse.php"
        }
        setTimeout("redireccionarPagina()", 1450);
    </script>
    <?php
}
?>