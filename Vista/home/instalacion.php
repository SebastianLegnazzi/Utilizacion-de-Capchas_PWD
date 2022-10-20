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
            <br>
            <p>Este método de inclusión de ReCaptcha es el más simple, ya que solo requeriremos de la inclusión de un Javascript en el <span class="bg-dark"> &lt;head&gt;&lt;/head&gt;</span> de nuestro sitio y de un div con un tag <strong>g-recapthca </strong>. 
            <br>
            La línea que utilizaremos en el <span class="bg-dark"> &lt;head&gt;&lt;/head&gt;</span> es: <span class="bg-dark"> &lt;script src="https://www.google.com/recaptcha/api.js" async defer&gt;&lt;/script&gt; </span>
            <br>
            Luego, en el <span class="bg-dark"> &lt;form&gt;&lt;/form&gt;</span> con el action POST pegaremos un div que tendrá nuestro Captcha de casilla de verificación "No soy un robot". Lo pegaremos justo antes del botón de envío de la siguiente manera: 
            <br>
            <span class="bg-dark"> &lt;form action= "pagina-Que-Recibira-La-Info-Del-ReCaptcha.php" method= "POST"&gt; <br> </span>
            (Ejemplo input mail junto al ReCaptcha)
            <br>
            <span class="bg-dark">
            &lt;div class="form-group"&gt;
            &lt;label for="email"&gt;</span> Email <span class="bg-dark">&lt;/label&gt;
            &lt;input type="email" class="form-control" name="email" placeholder="Email"&gt;
            &lt;/div&gt;
            <br>
            &lt;div class= "g-recaptcha" data-sitekey="Nuestra_llave_de_sitio"&gt;&lt;/div&gt;
            <br>
            &lt;/form&gt; </span>
            <br>
            Solo cambiaremos la data-sitekey con la que se nos brindó al crear la página con ReCaptcha:
            </p>
            <img src="../img/Clave-sitio.png" alt="LLave de sitio">
            <br>
            <p>
            Una vez hecho esto del lado del cliente, procederemos a poner la siguiente información del lado del servidor (a donde el formulario enviará la comprobación del Captcha).
            </p>
            <img src="../img/LadoServidor-ReCaptcha.png" alt="Lado servidor ReCaptcha">
            <br>
            <p>
            En la imágen anterior, vemos un ejemplo donde estamos recibiendo el metodo POST del reCaptcha si recibe información de un input mail.
            <br>
            <span class="bg-dark">$recaptcha_url</span> = Es la variable que recibirá la URL de google en donde se verificará el ReCaptcha, esta la encontramos en el link "Integración lado del servidor" en la sección Google ReCaptcha donde nos dieron nuestra clave secreta. En la documentación encontramos el apartado de una solicitud API y la URL.
            <br>
            <span class="bg-dark">$recaptcha_secret</span> = Tendrá la clave secreta que se nos brindó.
            </p>
            <img src="../img/Clave-secreta.png" alt="Link inclusión servidor">
            <br><br>
            <img src="../img/Url-POST.png" alt="URL API">
            <br>
            <p>
            En esta imágen también observamos otros parametros que debe contener nuestro servidor como el ya mencionado secret (la clave secreta), la respuesta y la ip.
            </p>
            <br> <br>
            <p>
                en el caso de recaptcha v3 es muy similiar a la instacion de ReCaptcha v2 salvo que en ReCaptchaV3 durante la instalacion elegimos la opcion reCAPTCHA V2 
            </p>
            <img src="../img/recaptchav3/login_captcha_v3.png" alt="">
            <p>
                esto nos dara una &lt;Site-Key&gt; distinta, y el codigo que debemos ingresar a la pagina es el mismo.
                
            </p>
            <p>
            Lo que cambia en reCAPTCHA V3 es la validacion en el servidor ya no se hace en en base al &lt;success&gt;sino en base a un puntaje que el recaptcha asigna al usuario en base al comportamiento en la pagina, este puntaje va del 0 al 1 y nosotros
            elegimos el umbral que queremos permitir, por lo general es 0,5.
            </p> 
        </div>
    </div>
</div>
<?php
include_once("../estructura/Pie.php")
?>