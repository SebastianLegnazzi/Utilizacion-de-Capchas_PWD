<?php
include_once("../estructura/Cabecera.php");
?>

<div class="container-fluid pe-5 ps-5 text-center text-light">
    <div id="que-es">
        <div class="display-5 text-warning texto-titulo">¿Qué es SweetAlert2?</div>
        <div class="text-start fs-6 mt-4">
            <p class="text-center">SweetAlert es una libreria de alertas, tiene muchos diseños con diversas posibilidades para notificar dependiendo lo que corresponda al usuario. <a class="link-info" href="https://sweetalert2.github.io/" target="_blank" >Ir a la pagina</a></p>
        </div>
    </div>
    <hr>
    <div id="ejemplos">
        <div class="display-5 text-warning texto-titulo">Instalacion</div>
        <div class="text-start fs-6 mt-4">
            <p class="text-center">Para instalarlo tenemos 2 formas:</p>
            <div class="d-flex justify-content-around mb-3">
                <div>
                    <ul class="list-group shadow">
                        <li class="list-group-item">
                            <p> A travez de CDN incluyendo el siguiente comando en la cabecera de la pagina</p>
                            <div class="bg-dark text-light">
                                &lt;script src="//cdn.jsdelivr.net/npm/sweetalert2@11"&gt;&lt;/script&gt;
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="list-group shadow">
                        <li class="list-group-item">
                            <a class="link-primary" href="https://www.jsdelivr.com/package/npm/sweetalert2" target="_blank">
                                <p>Descargando la libreria desde la pagina </p>
                            </a>
                            <p>Luego debemos extraer el paquete en la pagina para incluirlo con el siguiente comando</p>
                            <div class="bg-dark text-light">
                                &lt;script src="sweetalert2.min.js"&gt;&lt;/script&gt;
                            </div>
                            <div class="bg-dark text-light">
                                &lt;link rel="stylesheet" href="sweetalert2.min.css"&gt;
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div id="uso">
            <div class="display-5 text-warning texto-titulo">¿Como se usa?</div>
            <div class="text-start fs-6 mt-4">
                <p class="text-center">Para utilizar se puede observar la siguiente documentacion que muestra diversos ejemplos con el codigo para utilizar en la pagina <a target="_blank" class="link-info" href="https://sweetalert2.github.io/#examples">Examples</a></p>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../estructura/Pie.php")
?>