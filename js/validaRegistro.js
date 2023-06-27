 document.addEventListener('DOMContentLoaded', function() {
      var nomeCompleto = document.getElementById('nomeCompleto');
      var email = document.getElementById('email');
      var senha = document.getElementById('senha');
      var confirmaSenha = document.getElementById('confirmaSenha');
      var button = document.querySelector('button');
      var formError = document.getElementById('formError');
      var nomeCompletoError = document.getElementById('nomeCompletoError');
      var emailError = document.getElementById('emailError');
      var senhaError = document.getElementById('senhaError');
      var confirmaSenhaError = document.getElementById('confirmaSenhaError');
      
      nomeCompleto.addEventListener('input', validateForm);
      email.addEventListener('input', validateForm);
      senha.addEventListener('input', validateForm);
      confirmaSenha.addEventListener('input', validateForm);
      
      function validateForm() {

  
          // Verificar se o nome completo tem pelo menos duas palavras
        if (nomeCompleto.value.split(' ').length < 2) {
          nomeCompletoError.textContent = 'O nome deve ser completo';
          button.disabled = true;
          button.classList.remove('enabled');
          return;
        }
  
        nomeCompletoError.textContent = '';
  
    
        // Verificar se o email é válido
        if (!isValidEmail(email.value)) {
          emailError.textContent = 'Digite um email válido';
          button.disabled = true;
          button.classList.remove('enabled');
          return;
        }
  
        emailError.textContent = '';
  
  
        // Verificar se a senha tem no mínimo 6 caracteres
        if (senha.value.length < 6) {
          senhaError.textContent = 'A senha deve ter pelo menos 6 caracteres';
          button.disabled = true;
          button.classList.remove('enabled');
          return;
        }
  
        senhaError.textContent = '';
  
        // Verificar se a confirmação de senha está correta
        if (senha.value !== confirmaSenha.value) {
          confirmaSenhaError.textContent = 'As senhas não coincidem';
          button.disabled = true;
          button.classList.remove('enabled');
          return;
        }
  
        confirmaSenhaError.textContent = '';
  


        
        
        if (nomeCompleto.value.trim() === '' || email.value.trim() === '' || senha.value.trim() === '' || confirmaSenha.value.trim() === '') {
          button.disabled = true;
          button.classList.remove('enabled');
          formError.textContent = 'Por favor, preencha todos os campos';
          return;
        }
  
        formError.textContent = '';        
  
        // Habilitar o botão cadastrar
        button.disabled = false;
        button.classList.add('enabled');
      }
  
      function isValidEmail(email) {
        // Regex para validar o email
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
      }
    });