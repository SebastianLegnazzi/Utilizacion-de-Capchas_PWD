<?php
include_once("../estructura/Cabecera.php")
?>
<script>
    /* Este script lo utiliza MtCaptcha para poderse visualizar */
    var mtcaptchaConfig = {
        /* Este serial se obtiene de la cuenta creada en la pagina de MtCaptcha, cada uno es diferente para cada usuario */
        "sitekey": "MTPublic-eU0Pdq5Q0"
    };
    (function() {
        var mt_service = document.createElement('script');
        mt_service.async = true;
        mt_service.src = 'https://service.mtcaptcha.com/mtcv1/client/mtcaptcha.min.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(mt_service);
        var mt_service2 = document.createElement('script');
        mt_service2.async = true;
        mt_service2.src = 'https://service2.mtcaptcha.com/mtcv1/client/mtcaptcha2.min.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(mt_service2);
    })();
</script>
<!-- Script que utiliza reCaptchaV2 para poder visualziarse -->
<script src="https://www.google.com/recaptcha/api.js" async defer> </script>
<div class="container text-light mb-5">
    <div class="display-4 text-warning text-center">Tipos de captchas</div>
    <div class="row">
        <div class="lead text-center fs-6 col-md-4 mt-4 d-flex flex-column align-items-center">
            <div class="display-6 ">MtCaptcha</div>
            <hr class="m-2" style="width: 30%;">
            <div class="mtcaptcha"></div>
            <div class="d-flex align-items-end" style="height: 100%;">
                <a class="btn btn-warning" href="">Como instalar</a>
            </div>
        </div>
        <div class="lead text-center fs-6 col-md-4 mt-4 d-flex flex-column align-items-center">
            <div class="display-6">reCapcha V2</div>
            <hr class="m-2" style="width: 30%;">
            <div class="g-recaptcha mt-4 ms-3" data-sitekey="6Lf95XwiAAAAANd2Ey0ue87QCWiiD6_A17eONhTX"></div>
            <div class="d-flex align-items-end" style="height: 100%;">
                <a class="btn btn-warning" href="">Como instalar</a>
            </div>
        </div>
        <div class="lead text-center fs-6 col-md-4 mt-4 d-flex flex-column align-items-center">
            <div class="display-6">reCapcha V3</div>
            <hr class="m-2" style="width: 30%;">
            <p class="text-start mt-3">No tiene un aspecto visual ya que google determina a traves de un algoritmo si es una persona</p>
            <div class="d-flex align-items-end" style="height: 100%;">
                <a class="btn btn-warning" href="">Como instalar</a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../estructura/Pie.php")
?>