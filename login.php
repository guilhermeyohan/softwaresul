<!DOCTYPE html>
<html>
<head>
  <title>Sistema Teste</title>
  <link rel="stylesheet" href="./css/registro.css">
</head>
<body><br><br>
  <form class="form" action="./motores/logar.php" method="post">
    <p class="form-title">LOGIN</p>

    <div class="input-container">
      <input type="email" id="email" name="email" class="input" placeholder="E-mail">
      <span id="emailError" class="error-message"></span>
    </div>

    <div class="input-container">
      <input type="password" id="senha" name="senha" class="input" placeholder="Senha">
      <span id="senhaError" class="error-message"></span>
    </div>

    <button type="submit" class="submit logar" id="logar">
      <span class="button-text">Logar</span>
    </button>

    <span id="formError" class="error-message"><?php echo isset($errorMessage) ? $errorMessage : ''; ?></span>

    <p class="signup-link">
      Não possui cadastro? <a href="./index.php">cadastrar</a>
    </p>
  </form>


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var email = document.getElementById('email');
      var senha = document.getElementById('senha');

      email.addEventListener('input', validateForm);
      senha.addEventListener('input', validateForm);

      function validateForm() {
        // Habilitar ou desabilitar o botão Logar
        var logarButton = document.getElementById('logar');
        logarButton.disabled = email.value === '' || senha.value === '';
      }
    });
  </script>
</body>
</html>
