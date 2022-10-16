<?php
include_once("../estructura/Cabecera.php");
?>
<script>
    var mtcaptchaConfig = {
        "sitekey": "MTPublic-eU0Pdq5Q0",
        "autoFormValidate": true,
        "theme": "neowhite"
    };
    (function() {
        var mt_service = document.createElement('script');
        mt_service.async = true;
        mt_service.src = 'https://service.mtcaptcha.com/mtcv1/client/mtcaptcha.min.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(mt_service);
        var mt_service2 = document.createElement('script');
        mt_service2.async = true;
        mt_service2.src = 'https://service2.mtcaptcha.com/mtcv1/client/mtcaptcha2.min.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(mt_service2);
    })();
</script>
<script>
    function cargarDatos() {
        localStorage.setItem("usuarioIngresado", document.getElementById("nombre").value)
        localStorage.setItem("contraseniaIngresada", document.getElementById("contraseña").value)
    }
</script>
<div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0">Iniciar Sesion</h2>
            </div>
            <div class="modal-body p-5 pt-0">
                <form class="col needs-validation" method="post" action="accionIniciarSesion.php" novalidate>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Usuario">
                        <label for="floatingInput"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill text-dark" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>Username</label>
                        <div class="invalid-feedback">
                            Ingrese un usuario!
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="contraseña" id="contraseña" required placeholder="Password">
                        <label for="floatingPassword"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock text-dark" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                            </svg>Password</label>
                        <div class="invalid-feedback">
                            Ingrese una contraseña!
                        </div>
                    </div>
                    <div class="mtcaptcha"></div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-success" onclick="cargarDatos()" type="submit">Iniciar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../js/validarCamposVacios.js"></script>
<?php
include_once("../estructura/Pie.php")
?>