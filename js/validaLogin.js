  document.addEventListener('DOMContentLoaded', function() {
    var email = document.getElementById('email');
    var senha = document.getElementById('senha');
    var button = document.querySelector('button');
    var formError = document.getElementById('formError');
    var emailError = document.getElementById('emailError');
    var senhaError = document.getElementById('senhaError');

    email.addEventListener('input', validateForm);
    senha.addEventListener('input', validateForm);

    function validateForm() {
      // Verificar se o email é válido
      if (!isValidEmail(email.value)) {
        emailError.textContent = 'Digite um email válido';
        button.disabled = true;
        return;
      }

      emailError.textContent = '';

      // Verificar se a senha tem no mínimo 6 caracteres
      if (senha.value.length < 6) {
        senhaError.textContent = 'A senha deve ter pelo menos 6 caracteres';
        button.disabled = true;
        return;
      }

      senhaError.textContent = '';

      // Habilitar o botão Logar
      button.disabled = false;
    }

    function isValidEmail(email) {
      // Regex para validar o email
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
  });