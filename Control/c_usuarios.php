<?php
class c_usuarios
{
    function cargar($datos)
    {
        if (isset($datos)) {
            echo "
                <script>
                localStorage.setItem('nombre', '" . $datos["nombre"] . "')
                localStorage.setItem('contrasenia','" . $datos["contraseña"] . "')
                </script>";
            $resp = true;
        } else {
            $resp = false;
        }
        return $resp;
    }
}