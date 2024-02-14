document.getElementById('login-button').addEventListener('click', function() {
  document.querySelector('.popup').classList.toggle('popup-open');
});

document.querySelector('.close-button').addEventListener('click', function() {
  document.querySelector('.popup').classList.remove('popup-open');
});

$(document).ready(function() {
  // Verifica si las casillas de verificación están marcadas
  function verificarCasillas() {
      return $('#check1').is(':checked') && $('#check2').is(':checked');
  }

  // Habilita o deshabilita el botón de envío
  function habilitarBotonEnviar(habilitado) {
      if (habilitado) {
          $('input[type="submit"]').prop('disabled', false);
      } else {
          $('input[type="submit"]').prop('disabled', true);
      }
  }

  // Verifica las casillas de verificación y habilita o deshabilita el botón de envío
  habilitarBotonEnviar(verificarCasillas());

  // Escucha los cambios en las casillas de verificación
  $('#check1, #check2').change(function() {
      habilitarBotonEnviar(verificarCasillas());
  });
});