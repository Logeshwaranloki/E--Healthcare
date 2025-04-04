<!DOCTYPE html>
<html lang="en">
  <head>
    <title>International telephone input</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  </head>
  <body>
    <div class="container">
      <form id="login" onsubmit="process(event)">
        <p>Enter your phone number:</p>
        <input id="phone" type="tel" name="phone" />
        <input type="submit" class="btn" value="Verify" />
      </form>
      <div class="alert alert-info" style="display: none"></div>
      <div class="alert alert-error" style="display: none"></div>
    </div>
  </body>
  <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    const info = document.querySelector(".alert-info");
    const error = document.querySelector(".alert-error");

    function process(event) {
      event.preventDefault();

      const phoneNumber = phoneInput.getNumber();

      info.style.display = "";
      //info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
    }
  </script>
</html>