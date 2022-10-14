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
        <div class="display-4 text-warning texto-titulo">¿Qué es un captcha?</div>
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
                                <p>Los captcha textuales son los más usuales y usan palabras o combinaciones aleatorias entre dígitos y letras. También pueden incluir variaciones entre minúsculas y mayúsculas. </p>
                                <p>Si bien este tipo de captcha puede ser inquebrantable para los bots, también suele ser confuso de interpretar para los humanos cuando hay demasiada distorsión en las imágenes. </p>
                                <p>
                                    <strong>Ejemplo de captcha de texto:</strong>
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
                                <p>Los captcha basados en imágenes fueron desarrollados para reemplazar a los captcha de texto. Este tipo de sistema hace uso de imágenes con elementos reconocibles y requieren que el usuario distinga elementos presentes en fotografías o seleccione las imágenes similares entre sí (o aquellos que son disímiles, por ejemplo: 5 fotos de perros y 1 de un gato o viceversa).</p>
                                <p>Este captcha es mucho más eficaz que el captcha de texto, ya que su nivel de dificultad es mayor (para los bots), pues supone reconocimiento de imágenes y clasificación semántica.</p>
                                <p>
                                    <strong>Ejemplo de captcha visual:</strong>
                                    Este tipo de captcha consiste en seleccionar imágenes de una misma categoría. En este caso pide «seleccione todas las imágenes donde hayan botes». Cuando se hayan elegido todas las imágenes indicadas, puede hacer clic en el botón para verificar que no es un bot.
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
                                <p>El captcha también puede recurrir a preguntas lógicas o de cultura general; aunque este tipo de captcha no es tan común, suele ser realmente sencillo de responder para los humanos, por lo que no se requiere ningún tipo de conocimiento extraordinario. </p>
                                <p>
                                    <strong>Ejemplo de captcha de preguntas:</strong>
                                    Comúnmente este captcha pregunta algo que prácticamente es de conocimiento universal o formula una pregunta en la que la respuesta no importa, sino la acción de seleccionar de entre las opciones; como en este ejemplo, que indica «haga clic en su color favorito». Con esa breve acción el sistema confirma que el usuario no es un robot.
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
                                <p>Este tipo de captcha les solicita a los usuarios que resuelvan operaciones matemáticas muy simples. También tiene una variación al pedir que completen una secuencia de varios números relacionados (por ejemplo: 2, 2, 4, 4, 6, __, __, __). </p>
                                <p>
                                    <strong>Ejemplo de captcha con problema matemático:</strong>
                                    En este tipo de captcha el usuario tiene que hacer una operación simple y poner el resultado.
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
                                    <strong>Ejemplo de captcha de redes sociales:</strong>
                                    Este captcha se ha popularizado mucho en registros a capacitaciones, eventos, webinars, etc.
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
                                <p>Este tipo de captcha muestra una serie de instrucciones que a los bots les resulta difícil comprender. Por ejemplo, muestra un color (el usuario debe escribir el nombre) o proporciona una palabra (y la persona debe volver a escribirla), entre otros juegos similares</p>
                                <p>
                                    <strong>Ejemplo de captcha de juego de palabras:</strong>
                                    Existen muchas formas para hacer juegos de palabras en captchas; en este caso hay dos palabras tachadas y borrosas. Solamente un humano podría detectarlas y escribirlas.
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
                                <p>Como una forma de brindar acceso a los usuarios con discapacidad visual, estos captchas suelen ofrecer una alternativa de audio de una serie de letras o números que el usuario debe ingresar.</p>
                                <p>
                                    <strong>Ejemplo de captcha de audio:</strong>
                                    Este ejemplo ofrece opciones visuales y de audio; aunque algunos captchas son simplemente de audio.
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
                                <p>Los captcha también pueden requerir un poco de destreza por parte de los humanos, pero este tipo de sistema registra la cantidad de tiempo que un usuario tarda en completar un formulario. Si lo hace muy rápido, lo detectara como máquina.</p>
                                <p>
                                    <strong>Ejemplo de captcha de límite de tiempo:</strong>
                                    El conteo del tiempo regularmente no se ve en el captcha, se trata de una configuración oculta; pero si el sistema detecta que la respuesta fue muy rápida, lo considerará como un robot; por el contrario, si el usuario tarda mucho, el captcha hace que expire la sesión, como en este ejemplo.
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
                                <p>También hay desarrolladores que apuestan a lo diferente y han creado captchas para que las personas puedan clasificar objetos o armar rompecabezas.</p>
                                <p>
                                    <strong>Ejemplo de captcha lúdico:</strong>
                                    Hay captchas llamativos y dinámicos como en este ejemplo donde el sistema pide «verificar que el usuario existe», para lo cual tiene que «arrastrar las baquetas hacia el tambor».
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
                                <p>Este captcha funciona más como una trampa de bots, ya que, al crear tantos campos ocultos, los bots se programan para completar todos los campos que encuentran, incluso los que no existen. Esta es una manera fácil de detectar un comportamiento no humano. </p>
                                <p>La gran ventaja de este tipo de captchas es que no interrumpen la navegación; incluso, en la mayoría de las ocasiones, los usuarios ni siquiera se percatan de que están allí.</p>
                                <p>
                                    <strong>Ejemplo de captcha con campos ocultos:</strong>
                                    Cuando se trata de campos ocultos el sistema identifica de antemano un comportamiento humano y permite cierta acción, por ejemplo, descargar un archivo. Sin embargo, si el sistema detecta un comportamiento robótico (por ejemplo, una descarga de un volumen de archivo), entonces podría arrojar un captcha como el que vemos en la imagen.
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
            <div class="lead text-start fs-6 col-md-4 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem dolore cum dolorem totam eos excepturi consequuntur, repudiandae dolores beatae quod tempora illo voluptate iusto. Maxime ratione quibusdam temporibus dolores.
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
                    reCaptcha v3 usará un umbral de 0.5 puntos, y <strong> visitantes con una puntuación inferior necesitarán demostrar que es humano </strong> como pasa ahora cuando el automatismo falla. Sin embargo, los usuarios de cada web podrán modificar este umbral
                </p>
            </div>
            <div class="lead text-start fs-6 col-md-4 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem dolore cum dolorem totam eos excepturi consequuntur, repudiandae dolores beatae quod tempora illo voluptate iusto. Maxime ratione quibusdam temporibus dolores.
            </div>
        </div>
    </div>
</div>
<?php
include_once("../estructura/Pie.php")
?>