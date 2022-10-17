<?php
include_once("../estructura/Cabecera.php")
?>

<div class="container-fluid pe-5 ps-5 text-center text-light">
    <div id="mtCaptcha">
    <div class="display-4 text-warning texto-titulo">Instalacion MtCaptcha</div>
        <div class="lead text-start fs-6 mt-4">
            <p>
                Primero se debera tener una cuenta <a href="https://admin.mtcaptcha.com/signup?plantype=A&promoter=wwwnav">registrada</a> y una &lt;SiteKey&gt; para usar MTCaptcha en su propio sitio web.
            </p>
            <p>
            Aaqui debemos crear una cuenta con nuestro email, contraseña, y nombre de dominio.
                una vez creada no data la &lt;SiteKey&gt;, y la &lt;TestKey&gt; ademas devemos agregar a "Development & Test Env Domains" el dominio localhost para poder asi ver el captcha sin tener un dominio comprado.
                en link <a href="https://service.mtcaptcha.com/mtcv1/demo/">"get embed code"</a>
                <br><br>
                (imagen del login de mt captcha)
            </p>
            <p>
                Una vez tengamos la cuenta y la &lt;SiteKey&gt; podremos acceder al <a href="https://service.mtcaptcha.com/mtcv1/demo/">GENERADOR DE CODIGO</a> de MTCaptcha donde completaremos con el &lt;TestKey&gt;
                y nombre del dominio.
                <br>
                <br>
                (imagen del generador)
                <br>
                <br>
                Aca podremos agregar nuestra &lt;SiteKey&gt; ademas personalizar lenguaje, estilos, temas, y tambien activar el "Auto Form Validate" que permite que solo se podra hacer Submit del formulario si completo correctamente el MtCaptcha.
            </p>
            <p>
                una vez seleccionado personalizado como queremos nuestro captcha le damos a "aplicar" para asi poder ver una previa de como se vera el captcha en nuestra pagina.
                <br><br>
                (imagen de la vista previa)
                
            </p>
            <p>
                Esto nos devolvera el codigo javascript para agregarlo a nuestra pagina.
                <br><br>
                (imagen del codigo embebido)
            </p>
            <p>
                Ahora solo tenemos que agregarlo a nuestro codigo y el div del captcha dentro del formulario que queramos proteger.
                y ya estaria listo nuestro captcha listo para usarse.
            </p>

        </div>
    </div>
    <hr>
    <div id="reCaptchav2">
        <div class="display-4 text-warning texto-titulo">Instalacion reCaptcha V2</div>
        <div class="lead text-start fs-6 mt-4">
            <p></p>
        </div>
    </div>
    <hr>
    <div id="reCaptchav3">
        <div class="display-4 text-warning texto-titulo">Instalacion reCaptcha V3</div>
        <div class="lead text-start fs-6 mt-4">
            <p></p>
        </div>
    </div>
    <hr>
</div>
<?php
include_once("../estructura/Pie.php")
?>