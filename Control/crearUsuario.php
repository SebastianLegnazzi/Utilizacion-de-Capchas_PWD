<?php
class crearUsuario {
    function cargar($datos){
        ?>
        <script>
            localStorage.setItem("nombre", $datos["nombre"])
            localStorage.setItem("apellido", $datos["nombre"])
            localStorage.setItem("documento", $datos["nombre"])
            localStorage.setItem("telefono", $datos["nombre"])
            localStorage.setItem("direccion", $datos["nombre"])
        </script>
        <?
    }
}

?>