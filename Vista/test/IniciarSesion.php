<?php
include_once("../estructura/Cabecera.php");
?>
<link rel="stylesheet" href="../css/IniciarSesion.css">
<div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0">Iniciar Sesion</h2>
            </div>
            <div class="modal-body p-5 pt-0">
                <form class="col needs-validation" method="post" action="ejercicio_3a,b,c_respuesta.php" novalidate>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="input_usuario" name="input_usuario" required placeholder="Usuario">
                        <label for="floatingInput"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill text-dark" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>Username</label>
                        <div class="contraseña_usuario_iguales">Son iguales! porfavor ponga un usuario y/o contraseña que no coincidan</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" pattern="([A-Za-z]+[0-9]+)|([0-9]+[A-Za-z]+)|([0-9]+[A-Za-z]+[0-9]+)|([A-Za-z]+[0-9]+[A-Za-z]+)" class="form-control" name="input_contraseña" id="input_contraseña" minlength="8" required placeholder="Password">
                        <label for="floatingPassword"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock text-dark" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                            </svg>Password</label>
                        <div class="invalid-feedback">
                            La contraseña tiene que contener minimo 8 digitos, no tiene que ser igual al usuario, numeros y letras
                        </div>
                        <div class="contraseña_usuario_iguales">Son iguales! porfavor ponga un usuario y/o contraseña que no coincidan</div>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-success" type="submit">Iniciar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../js/validarCamposVacios.js"></script>
<?php
include_once("../estructura/Pie.php")
?>