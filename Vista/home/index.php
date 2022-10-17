<?php
include_once("../estructura/Cabecera.php")
?>
<style>
    .texto-titulo {
        text-shadow: 3px 4px 6px #111;
    }
</style>

<div class="container-fluid pe-5 ps-5 text-center text-light">
    <div id="que-es">
        <div class="display-4 text-warning texto-titulo">¿Qué es un Captcha?</div>
        <div class="lead text-start fs-6 mt-4">
            <p>Un <strong>CAPTCHA</strong> (Completely Automated Public <i> Turing test </i> to tell Computers and Humans Apart: test de Turing público y automático para distinguir a los ordenadores de los humanos) es un tipo de medida de seguridad que requiere de una autenticación normalmente pregunta-respuesta. Un CAPTCHA te protege del SPAM y del descifrado de contraseñas pidiéndote que completes una prueba que demuestra si eres humano y no un ordenador que intenta acceder a una cuenta protegida con contraseña.</p>
            <p>Un test de Turing evalúa la capacidad que tiene un ordenador para imitar el comportamiento humano. Alan Turing, uno de los primeros pioneros de la informática, desarrolló el concepto del test de Turing en 1950. Un programa informático "pasa el test de Turing" si su funcionamiento durante test no se puede distinguir del de un humano, si actúa como lo haría un ser humano. Un test de Turing no depende de que las respuestas sean correctas, sino de lo "humanas" que suenen dichas respuestas, independientemente de que sean correctas o no.</p>
            <p>Aunque se llame "Test público de Turing", un CAPTCHA realmente es lo opuesto a un test de Turing: determina si un usuario supuestamente humano es en realidad un programa informático (un bot) o no, en lugar de tratar de determinar si un ordenador es humano.</p>
        </div>
    </div>
    <hr>
    <div id="como-funciona">
        <div class="display-4 text-warning texto-titulo">¿Cómo funciona?</div>
        <div class="lead text-start fs-6 mt-4">
            <p>Los CAPTCHA clásicos, que todavía se se siguen usando en algunas propiedades web, piden a los usuarios que identifiquen letras. Las letras están distorsionadas para que los bots no puedan identificarlas. Para pasar la prueba, los usuarios tienen que interpretar el texto distorsionado, introducir las letras correctas en un campo de formulario y enviar el formulario. Si las letras no coinciden, se les pide a los usuarios que lo vuelvan a intentar. Estas pruebas son habituales en formularios de inicio de sesión, formularios de registro de cuenta, encuestas en línea y páginas de pago en comercios electrónicos.</p>
            <p>Muchos bots solo conseguirán introducir algunas letras al azar, así que es estadísticamente improbable que pasen la prueba. De esta forma, los bots no pasan la prueba y se les bloquea la interacción con el sitio web o la aplicación, mientras que los humanos pueden seguir usándola como de costumbre.</p>
        </div>
    </div>
    <hr>
    <div id="tipos">
        <div class="display-4 text-warning texto-titulo">Tipos de Captchas</div>
        <div class="text-start fs-6 mt-4">
            <ul class="list-group shadow">
                <li class="list-group-item">
                    <div class="row">
                        <h2 class="display-6 text-center bg-warning">TEXTO</h2>
                        <div class="col-md-7">
                            <div class="card-body">
                                <p>Los Captcha textuales son los más usuales y usan palabras o combinaciones aleatorias entre dígitos y letras. También pueden incluir variaciones entre minúsculas y mayúsculas. </p>
                                <p>Si bien este tipo de Captcha puede ser inquebrantable para los bots, también suele ser confuso de interpretar para los humanos cuando hay demasiada distorsión en las imágenes. </p>
                                <p>
                                    <strong>Ejemplo de Captcha de texto:</strong>
                                    Aquí indica que, para poder procesar la solicitud, el usuario deberá llenar el espacio con las letras que se leen en azul. Cuando se han tecleado correctamente, el usuario puede continuar con su proceso, que en este caso es crear una cuenta.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="../img/Captcha-texto.png" alt="Ejemplo CAPTCHA tipo texto">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <h2 class="display-6 text-center bg-warning">VISUALES</h2>
                        <div class="col-md-9">
                            <div class="card-body">
                                <p>Los Captcha basados en imágenes fueron desarrollados para reemplazar a los Captcha de texto. Este tipo de sistema hace uso de imágenes con elementos reconocibles y requieren que el usuario distinga elementos presentes en fotografías o seleccione las imágenes similares entre sí (o aquellos que son disímiles, por ejemplo: 5 fotos de perros y 1 de un gato o viceversa).</p>
                                <p>Este Captcha es mucho más eficaz que el Captcha de texto, ya que su nivel de dificultad es mayor (para los bots), pues supone reconocimiento de imágenes y clasificación semántica.</p>
                                <p>
                                    <strong>Ejemplo de Captcha visual:</strong>
                                    Este tipo de Captcha consiste en seleccionar imágenes de una misma categoría. En este caso pide «seleccione todas las imágenes donde hayan botes». Cuando se hayan elegido todas las imágenes indicadas, puede hacer clic en el botón para verificar que no es un bot.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-8">
                            <img class="img-thumbnail" src="../img/Captcha-visual.jpg" alt="Ejemplo CAPTCHA tipo visual">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <h2 class="display-6 text-center bg-warning">PREGUNTAS</h2>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p>El Captcha también puede recurrir a preguntas lógicas o de cultura general; aunque este tipo de Captcha no es tan común, suele ser realmente sencillo de responder para los humanos, por lo que no se requiere ningún tipo de conocimiento extraordinario. </p>
                                <p>
                                    <strong>Ejemplo de Captcha de preguntas:</strong>
                                    Comúnmente este Captcha pregunta algo que prácticamente es de conocimiento universal o formula una pregunta en la que la respuesta no importa, sino la acción de seleccionar de entre las opciones; como en este ejemplo, que indica «haga clic en su color favorito». Con esa breve acción el sistema confirma que el usuario no es un robot.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-thumbnail" src="../img/Captcha-preguntas.jpg" alt="Ejemplo CAPTCHA tipo preguntas">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <h2 class="display-6 text-center bg-warning">PROBLEMAS MATEMÁTICOS</h2>
                        <div class="col-md-9">
                            <div class="card-body">
                                <p>Este tipo de Captcha les solicita a los usuarios que resuelvan operaciones matemáticas muy simples. También tiene una variación al pedir que completen una secuencia de varios números relacionados (por ejemplo: 2, 2, 4, 4, 6, __, __, __). </p>
                                <p>
                                    <strong>Ejemplo de Captcha con problema matemático:</strong>
                                    En este tipo de Captcha el usuario tiene que hacer una operación simple y poner el resultado.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img class="img-thumbnail" src="../img/Captcha-problemasMatemáticos.png" alt="Ejemplo CAPTCHA tipo problemas matematicos">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <h2 class="display-6 text-center bg-warning">REDES SOCIALES</h2>
                        <div class="col-md-9">
                            <div class="card-body">
                                <p>Al intentar crear una cuenta en alguna plataforma, en vez de solicitar un nombre de usuario y contraseña, existe la posibilidad de registrarte y acceder con tu cuenta de Gmail o Facebook. Este sistema resulta muy eficaz, ya que evita que los bots accedan, pues no tienen dichas cuentas personales. </p>
                                <p>
                                    <strong>Ejemplo de Captcha de redes sociales:</strong>
                                    Este Captcha se ha popularizado mucho en registros a capacitaciones, eventos, webinars, etc.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img class="img-thumbnail" src="../img/Captcha-redes.png" alt="Ejemplo CAPTCHA tipo redes sociales">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <h2 class="display-6 text-center bg-warning">JUEGO DE PALABRAS</h2>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p>Este tipo de Captcha muestra una serie de instrucciones que a los bots les resulta difícil comprender. Por ejemplo, muestra un color (el usuario debe escribir el nombre) o proporciona una palabra (y la persona debe volver a escribirla), entre otros juegos similares</p>
                                <p>
                                    <strong>Ejemplo de Captcha de juego de palabras:</strong>
                                    Existen muchas formas para hacer juegos de palabras en Captchas; en este caso hay dos palabras tachadas y borrosas. Solamente un humano podría detectarlas y escribirlas.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="../img/Captcha-juegoPalabras.jpg" alt="Ejemplo CAPTCHA tipo juego de palabras">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <h2 class="display-6 text-center bg-warning">AUDIO</h2>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p>Como una forma de brindar acceso a los usuarios con discapacidad visual, estos Captchas suelen ofrecer una alternativa de audio de una serie de letras o números que el usuario debe ingresar.</p>
                                <p>
                                    <strong>Ejemplo de Captcha de audio:</strong>
                                    Este ejemplo ofrece opciones visuales y de audio; aunque algunos Captchas son simplemente de audio.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="../img/Captcha-audio.png" alt="Ejemplo CAPTCHA tipo audio">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <h2 class="display-6 text-center bg-warning">LÍMITE DE TIEMPO</h2>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p>Los Captcha también pueden requerir un poco de destreza por parte de los humanos, pero este tipo de sistema registra la cantidad de tiempo que un usuario tarda en completar un formulario. Si lo hace muy rápido, lo detectara como máquina.</p>
                                <p>
                                    <strong>Ejemplo de Captcha de límite de tiempo:</strong>
                                    El conteo del tiempo regularmente no se ve en el Captcha, se trata de una configuración oculta; pero si el sistema detecta que la respuesta fue muy rápida, lo considerará como un robot; por el contrario, si el usuario tarda mucho, el Captcha hace que expire la sesión, como en este ejemplo.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="../img/Captcha-tiempo.png" alt="Ejemplo CAPTCHA tipo límite de tiempo">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <h2 class="display-6 text-center bg-warning">LÚDICOS</h2>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p>También hay desarrolladores que apuestan a lo diferente y han creado Captchas para que las personas puedan clasificar objetos o armar rompecabezas.</p>
                                <p>
                                    <strong>Ejemplo de Captcha lúdico:</strong>
                                    Hay Captchas llamativos y dinámicos como en este ejemplo donde el sistema pide «verificar que el usuario existe», para lo cual tiene que «arrastrar las baquetas hacia el tambor».
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-thumbnail" src="../img/Captcha-ludicos.png" alt="Ejemplo CAPTCHA tipo lúdico">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <h2 class="display-6 text-center bg-warning">CAMPOS OCULTOS</h2>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p>Este Captcha funciona más como una trampa de bots, ya que, al crear tantos campos ocultos, los bots se programan para completar todos los campos que encuentran, incluso los que no existen. Esta es una manera fácil de detectar un comportamiento no humano. </p>
                                <p>La gran ventaja de este tipo de Captchas es que no interrumpen la navegación; incluso, en la mayoría de las ocasiones, los usuarios ni siquiera se percatan de que están allí.</p>
                                <p>
                                    <strong>Ejemplo de Captcha con campos ocultos:</strong>
                                    Cuando se trata de campos ocultos el sistema identifica de antemano un comportamiento humano y permite cierta acción, por ejemplo, descargar un archivo. Sin embargo, si el sistema detecta un comportamiento robótico (por ejemplo, una descarga de un volumen de archivo), entonces podría arrojar un Captcha como el que vemos en la imagen.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-thumbnail" src="../img/Captcha-oculto.jpg" alt="Ejemplo CAPTCHA tipo campo oculto">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <hr>
    <div id="comparacion">
        <div class="display-4 text-warning texto-titulo">Comparación</div>
        <div class="row text-center">
            <div class="lead text-start fs-6 col-md-4 mt-4">
            <h2 align="center">reCAPTCHA v2</h2>
            <p>Muchos sitios web siguen utilizando reCaptcha v2, que fue lanzada en 2014. Si el comportamiento de un usuario es sospechoso, reCaptcha v2 enviará un desafío que el visitante debe resolver para probar que es humano.</p>
            <p>Todos nos encontramos familiarizados con las varias versiones de reCaptcha v2. A veces, todo lo que se necesita hacer es tildar una cajita que diga “No soy un robot”. En otras ocasiones, reCaptcha desafiará al usuario con alguno de los distintos tipos de Captcha mencionados previamente en esta página.</p>
            <p>ReCaptcha v2 está basado en un “Sistema de análisis de riesgo avanzado” que depende bastante de las cookies. Si el usuario está navegando en la web usando Chrome, o se ha logeado en una cuenta de Google por un rato, seguramente solo tendrán que tildar una cajita. Por el otro lado, un usuario que utilice Firefox y haya deshabilitado las cookies de terceros (debido a la gran preocupación creciente de los usuarios por su privacidad online) es más seguro que tenga que realizar algún desafío difícil de reCaptcha v2, que degradará su experiencia de usuario y reducirá las tasas de conversión.</p>
            <p>Adicionalmente, debido a la ubicuidad de reCaptcha v2, los ciberdelincuentes han encontrado soluciones automatizadas cada vez más eficientes para eludir incluso los desafíos más difíciles de reCaptcha v2.</p>
            </div>
            <div class="lead text-start fs-6 col-md-4 mt-4">
                <h2 align="center">reCAPTCHA v3</h2>
                <p>
                    A finales de octubre del 2018 Google ha presentado la tercera generación de reCaptcha v3. Su objetivo es que <strong>los usuarios humanos no necesiten realizar ninguna acción </strong> para verificar que no son bots, ni realizando pruebas interactivas ni siquiera marcando una casilla para verificar sus cookies y movimientos por la red.
                </p>
                <p>
                    Este nuevo sistema <strong>le asignará a cada usuario una puntuación diferente </strong>, clasificándolos del 0.0 al 1.0 en orden de más posible a menos posible de que sea un bot. La puntuación se basará en diferentes tipos de interacciones que realicen los usuarios, que van <strong> desde el movimiento del ratón al tiempo que pasan en cada sección de la web o los clicks que se realizan </strong>.
                </p>
                <p>
                    reCaptcha v3 permite que el umbral de detección de bots sea administrado por el desarrollador de la página, así como poder bloquear a usuarios con un puntaje menor a 0.2 o enviarles una prueba reCaptcha a los usuarios con menos de 0.5 para que confirmen su autenticidad.
                </p>
            </div>
            <div class="lead text-start fs-6 col-md-4 mt-4">
                <h2 align="center">MTCaptcha</h2>
                <p>
                    MTCaptcha se presenta como una alternativa a google porporcionando un servicio muy parecido
                    pero con pequeñas diferencias y mejoras.
                </p>
                <p>
                    MTCaptcha además de ofrecer los clásicos Captcha de imagen, también permite que el Captcha sea invisible para la mayoría de usuarios y solo se muestra cuando el motor de riesgo adaptativo de MTCaptcha detecta algun nivel de riesgo. <br>
                    Este motor Adaptive Complexity, además de estar respaldado por este algoritmo de riesgo avanzado que reduce la frustración de los usuarios también reduce sustancialmente la tasa de rebote. <br>
                    Investigaciones han demostrado que el Captcha común aumenta la fricción que tiene el usuario en las transacciones en línea y los rechazos en 10 segundos. Gracias al motor del MTCaptcha se reduce significativamente la fricción para los usuarios reales, lo que da como resultado transacciones más existosas y dificulta las cosas para los bot.
                </p>
                <p>
                    El motor de riesgo adaptativo monitoria continuamente el entorno de la red y los patrones de uso para ajustar la sensibilidad y las puntuaciones de riesgo.
                </p>
            </div>
        </div>
        
    </div>
    </div>
</div>
<?php
include_once("../estructura/Pie.php")
?>