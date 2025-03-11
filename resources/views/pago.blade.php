<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pago con Niubiz/Visanet</title>
</head>
<body>
  <!-- Botones para distintos montos -->
  <button class="payButton" data-amount="10.50" style="padding: 10px 20px; font-size: 16px; background-color: red; color: white;">
    Pagar 10.50
  </button>
  <button class="payButton" data-amount="20.00" style="padding: 10px 20px; font-size: 16px; background-color: blue; color: white;">
    Pagar 20.00
  </button>
  <button class="payButton" data-amount="50.00" style="padding: 10px 20px; font-size: 16px; background-color: green; color: white;">
    Pagar 50.00
  </button>

  <!-- Carga la librerÃƒÂ­a en ambiente de Testing -->
  <script src="https://static-content-qas.vnforapps.com/vTokenSandbox/js/checkout.js"></script>

  <script>
    // Selecciona todos los botones con la clase 'payButton'
    var buttons = document.querySelectorAll('.payButton');

    buttons.forEach(function(button) {
      button.addEventListener('click', function(e) {
        e.preventDefault();

        // ObtÃƒÂ©n el monto del botÃƒÂ³n usando el atributo data-amount
        var monto = button.getAttribute('data-amount');

        // Configura el checkout con el monto especÃƒÂ­fico
        VisanetCheckout.configure({
          action: 'https://www.tudominio.com/respuesta',  // URL de respuesta
          channel: 'paycard',
          merchantid: '456879852',  // CÃƒÂ³digo de comercio de prueba
          sessiontoken: '{{ $sessionToken }}', // Token generado desde Laravel
          amount: monto,
          purchasenumber: 'ORD' + Math.floor(Math.random() * 1000000), // Ejemplo de nÃƒÂºmero de orden ÃƒÂºnico
          cardholdername: 'Juan',
          cardholderlastname: 'Perez',
          cardholderemail: 'juan@example.com',
          expirationminutes: '20',
          timeouturl: 'https://www.tudominio.com/timeout',
          merchantlogo: 'https://www.deepseek.com/_next/image?url=https%3A%2F%2Fcdn.deepseek.com%2Flogo.png&w=828&q=75',
          merchantname: 'Mi Comercio',
          formbuttoncolor: button.style.backgroundColor,
          formbuttontext: 'Pagar ' + monto,
          formbackgroundcolor: '#000',
          formbuttontextcolor: 'white'
        });

        // Abre el formulario de pago
        VisanetCheckout.open();
      });
    });
  </script>
</body>
</html>


