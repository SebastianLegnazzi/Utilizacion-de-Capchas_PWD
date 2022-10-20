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
                Aaqui debemos crear una cuenta con nuestro email, contraseña, y nombre de dominio.
                una vez creada no data la &lt;SiteKey&gt;, y la &lt;TestKey&gt; ademas devemos agregar a "Development & Test Env Domains" el dominio localhost para poder asi ver el captcha sin tener un dominio comprado.
                en link <a class="link-warning" href="https://service.mtcaptcha.com/mtcv1/demo/">"get embed code"</a>
            </p>
            <img src="../img/mtCaptcha_instalacion/login_mtcapthca.png" alt="">
            <p>
                Una vez tengamos la cuenta y la &lt;SiteKey&gt; podremos acceder al <a class="link-warning" href="https://service.mtcaptcha.com/mtcv1/demo/">GENERADOR DE CODIGO</a> de MTCaptcha donde completaremos con el &lt;TestKey&gt;
                y nombre del dominio.
            </p>
            
                
            <img src="../img/mtCaptcha_instalacion/generador_codigo_mtcaptcha.png" alt="">
                
            <p>
                Aca podremos agregar nuestra &lt;SiteKey&gt; ademas personalizar lenguaje, estilos, temas, y tambien activar el "Auto Form Validate" que permite que solo se podra hacer Submit del formulario si completo correctamente el MtCaptcha.
            </p>
            <p>
                una vez seleccionado personalizado como queremos nuestro captcha le damos a "aplicar" para asi poder ver una previa de como se vera el captcha en nuestra pagina.
            </p>
            <img src="../img/mtCaptcha_instalacion/vista_previa.png" alt="">
            <p>
                Esto nos devolvera el codigo javascript para agregarlo a nuestra pagina.
            </p>
            <img src="../img/mtCaptcha_instalacion/imagen_codigoEmbed.png" alt="">
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
            <p></p>
        </div>
    </div>
</div>
<?php
include_once("../estructura/Pie.php")
?>