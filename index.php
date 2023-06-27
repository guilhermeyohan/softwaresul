<!DOCTYPE html>
<html>
<head>
  <title>Sistema Teste</title>
<link rel="stylesheet" href="./css/registro.css">
</head>
<body>
  <center><br><br>
    <form class="form" action="./motores/cadastrar.php" method="post">
      <p class="form-title">REGISTRE-SE</p>
      
      <div class="input-container">
        <input type="text" id="nomeCompleto" name="nomeCompleto" class="input" placeholder="Nome Completo">
        <span id="nomeCompletoError" class="error-message"></span>
      </div>
      
      <div class="input-container">
        <input type="text" id="email" name="email" class="input" placeholder="E-mail">
        <span id="emailError" class="error-message"></span>
      </div>
      
      <div class="input-container">
        <input type="password" id="senha" name="senha" class="input" placeholder="Senha">
        <span id="senhaError" class="error-message"></span>
      </div>
      
      <div class="input-container">
        <input type="password" id="confirmaSenha" class="input" name="confirmaSenha" placeholder="Confirme a Senha">
        <span id="confirmaSenhaError" class="error-message"></span>
      </div>
  
      <button type="submit" class="submit" disabled>
        <span class="button-text">Cadastrar</span>
      </button>
      
      <span id="formError" class="error-message"></span>
  
      <p class="signup-link">
        Já possui cadastro? <a href="./login.php">Logar</a>
      </p>
    </form>
  </center>
  <script src="./js/validaRegistro.js"></script> 

</body>
</html>
