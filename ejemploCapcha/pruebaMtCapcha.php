<!DOCTYPE HTML>
<html>	
<head>

<!-- MTCap Code Start-->    
  <!-- Configuration to construct the captcha widget.
      Sitekey is a Mandatory Parameter-->
   
  <script>
    var mtcaptchaConfig = {
      "sitekey": "MTPublic-eU0Pdq5Q0"
     };
   (function(){var mt_service = document.createElement('script');mt_service.async = true;mt_service.src = 'https://service.mtcaptcha.com/mtcv1/client/mtcaptcha.min.js';(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(mt_service);
   var mt_service2 = document.createElement('script');mt_service2.async = true;mt_service2.src = 'https://service2.mtcaptcha.com/mtcv1/client/mtcaptcha2.min.js';(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(mt_service2);}) ();
 </script>
</head>
<body>
  <form id="demo-form" action="pruebaMtCapchaGET.php" method="GET">
    <fieldset id="demo-fieldset">
      <div class="demo-label">Email</div>
      <input class="demo-form-input" name="email" type="text" value="user@email.com" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
      <div class="demo-label">Password</div>
      <input class="demo-form-input" name="password" type="password" value="userpassword" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
      <div style="margin-top:20px"></div>
       <!-- Div to place the Captcha -->
      <div class="mtcaptcha"></div>
      <input class="demo-form-btn" type="submit" value="Sign in">
    </fieldset>
  </form>
</body>
</html>