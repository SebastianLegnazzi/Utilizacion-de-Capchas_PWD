<html>

<head>
  <title>reCAPTCHA demo: Simple page</title>
  <script src="https://www.google.com/recaptcha/api.js?render=6LfmtoIiAAAAAJsQxjF5rc1OudaiLfHirConSfUF"></script>
  <script>
    function onSubmit(token) {
      document.getElementById("form_login").submit();
    }
  </script>
</head>

<body>
  <form id="form_login" action="pruebaReCapchav3GET.php" method="GET">
    usuario:
    <input type="text"><br>
    pass:
    <input type="password">
    <button class="g-recaptcha" data-sitekey="6LfmtoIiAAAAAJsQxjF5rc1OudaiLfHirConSfUF" data-callback='onSubmit' data-action='submit'>Submit</button>
  </form>
</body>

</html>