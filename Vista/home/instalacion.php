<?php
include_once("../estructura/Cabecera.php")
?>

<div class="container-fluid pe-5 ps-5 text-center text-light">
    <div id="mtCaptcha">
        <div class="display-4 text-warning texto-titulo">Instalación MtCaptcha</div>
        <div class="text-start fs-6 mt-4">
            <p>
                Primero se debera tener una cuenta <a class="link-warning" href="https://admin.mtcaptcha.com/signup?plantype=A&promoter=wwwnav">registrada</a> y una &lt;SiteKey&gt; para usar MTCaptcha en su propio sitio web.
            </p>
            <p>
                Aqui debemos crear una cuenta con nuestro email, contraseña, y nombre de dominio.
                una vez creada no data la &lt;SiteKey&gt;, y la &lt;TestKey&gt; ademas devemos agregar a "Development & Test Env Domains" el dominio localhost para poder asi ver el captcha sin tener un dominio comprado.
                en link <a class="link-warning" href="https://service.mtcaptcha.com/mtcv1/demo/">"get embed code"</a>
            </p>
            <img class="img-thumbnail col-md-6" src="../img/mtCaptcha_instalacion/login_mtcapthca.png" alt="">
            <p>
                Una vez tengamos la cuenta y la &lt;SiteKey&gt; podremos acceder al <a class="link-warning" href="https://service.mtcaptcha.com/mtcv1/demo/">GENERADOR DE CODIGO</a> de MTCaptcha donde completaremos con el &lt;TestKey&gt;
                y nombre del dominio.
            </p>
            
                
            <img class="img-thumbnail col-md-6" src="../img/mtCaptcha_instalacion/generador_codigo_mtcaptcha.png" alt="">
                
            <p>
                Aca podremos, ademas de agregar nuestra &lt;SiteKey&gt; , personalizar lenguaje, estilos, temas, y tambien activar el "Auto Form Validate" que permite que solo se podra hacer Submit del formulario si completo correctamente el MtCaptcha.
            </p>
            <p>
                una vez seleccionado personalizado como queremos nuestro captcha le damos a "aplicar" para asi poder ver una previa de como se vera el captcha en nuestra pagina.
            </p>
            <img class="img-thumbnail col-md-4" src="../img/mtCaptcha_instalacion/vista_previa.png" alt="">
            <p>
                Esto nos devolvera el codigo javascript para agregarlo a nuestra pagina.
            </p>
            <img class="img-thumbnail col-md-6" src="../img/mtCaptcha_instalacion/imagen_codigoEmbed.png" alt="">
            <p>
                Ahora solo tenemos que agregarlo a nuestro codigo y el div del captcha dentro del formulario que queramos proteger.
                y ya estaria listo nuestro captcha listo para usarse.
            </p>

        </div>
    </div>
    <hr>
    <div id="reCaptchav2v3">
        <div class="display-4 text-warning texto-titulo">Instalación reCaptcha v2 y v3</div>
        <div class="lead text-start fs-6 mt-4">
        <p>Primeramente para poder crear nuestras claves de cliente y servidor (que es lo que accionará los Captchas) necesitamos entrar a <a href="https://www.google.com/recaptcha/admin/create" target="_blank">este sitio </a>para registrar nuestra página en Google ReCaptcha. Para ello, necesitará inicar sesión en su cuenta de Google y crear la aplicación completando el formulario mostrado en la página.</p>
            <img src="../img/Registro-pagina-ReCaptcha.png" alt="Formulario registro página" height="450px" width="500px">
            <p>Como paso siguiente tendremos que en el apartado "Etiqueta" escribir un nombre de ejemplo con el que queramos identificar a nuestra página, por ejemplo "PruebaCaptcha.com o ReCaptchaPrueba.com" (Google requiere de esto aunque a nosotros no nos servirá por el momento).
            </p>
            <p>Luego de haber completado la etiqueta, procedemos a elegir que tipo de ReCaptcha queremos incluir en nuestra página. Recordemos como hemos explicado en la sección <a href="tipos.php">tipos</a>, si elegimos ReCaptcha v3 no se nos presentará ningún desafío debido al nuevo metodo de analisis en base a un puntaje de comportamiento sobre el usuario.
            En este caso elegiremos primero hacer una página con un <strong> ReCaptcha v2</strong>. 
            <br>
            Una vez tildado el círculo, nos aparecerán distintos modos de verificación que posee esta versión de ReCaptcha. Elegiremos la primera: 
            </p>
            <img src="../img/EleccionTipo-ReCaptcha.png" alt="Elección tipo ReCaptcha v2" height="270px" width="500px">
            <br>
            <p>En el apartado "Dominios" es donde tendremos que poner poner el dominio en donde estamos queriendo utilizar nuestro ReCaptcha, como nosotros aún no tenemos uno, llenaremos el espacio indicando que lo haremos desde un "localhost".
            <br>
            A su vez, ingresaremos la cuenta de Google del propietario y aceptamos las "Condiciones de servicio" así como el "Envío de alertas a los propietarios". Esto último nos enviará correos si hay errores en nuestro sitio o problemas de tráfico (no es realmente necesario marcarla, pero lo haremos igual).
            </p>
            <img src="../img/Dominio-condiciones-alertas.png" alt="Dominios, condiciones y alertas" height="400px" width="500px">
            <br>
            <p>Una vez pulsado el boton "Enviar", nuestra página habrá quedado registrada y nos brindarán las claves de sitio y la secreta.
            </p>
            <img src="../img/Claves.png" alt="Claves" height="270px" width="600px">
            <br>
            <p>A partir de ahora empezaremos a realizar la inclusión del ReCaptcha a nuestro código PHP.
            <br>
            Como primer paso, tocamos el link mostrado en la imágen anterior que dice "Ver integración del lado del cliente". Una vez dentro de la documentación, buscamos hasta encontrar el siguiente código.
            </p>
            <img src="../img/Inclusión-ReCaptcha-cliente.png" alt="Codigo ReCaptcha PHP" height="300px" width="600px">
        </div>
    </div>
</div>
<?php
include_once("../estructura/Pie.php")
?>