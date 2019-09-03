<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" 	href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
<body>
  <div class="logo">
    <!-- agregar la ruta del href "index.html" -->
  <a href="#"><img src="../imagenes-tugiftcard/logo-sitio.png" alt="logo de giftcard.net"></a>
  </div>

<div class="container">
  <div class="form-top">
    <h2>Crear Cuenta</h2>
  </div>
  <!-- falta completar en action el lugar a donde va a ir la pagina despues de enviar el formulario -->
  <form class="form-register" action="" method="post">
    <p><label  class="text-label" for="nombre">Tu nombre</label></p>
    <p><input  class="text-input"  id="nombre" type="text" name="nombre"   required></p>
    <p><label  class="text-label" for="apellido">Tu apellido</label></p>
    <p><input  class="text-input" id="apellido" type="text" name="apellidp"  required></p>
    <p><label  class="text-label" for="email">Email</label></p>
    <p><input  class="text-input" id="email" type="email" name="email" required ></p>
    <p><label  class="text-label" for="conf-email">Confirmación De Email</label></p>
    <p><input  class="text-input" id="conf-email" type="email" name="conf-email" required></p>
    <p><label  class="text-label" for=pass>Contraseña</label></p>
    <p><input  class="text-input" id="pass" type="password" name="pass"  placeholder="como minimo 6 caracteres"  required  ></p>
    <p>La contraseña debe tener como minimo 6 caracteres</p>
    <div class="button-div">
    <button  class="button-form" type="submit" name="button">crea tu cuenta en tugiftcard.net</button>
    </div>
  <!-- FALTA AGREGAR RUTA EN CONDICIONES DE USO Y AVISO DE PRIVACIDAD -->
  <div class="text-buttom">
    <p>Al crear una cuenta,aceptas las <a href="#">Las Condiciones De Uso</a> y el <a href="#"> Aviso De Privacidad</a> de tugiftcard.net</p>
   </div>
  </form>
</div>
<footer>
  <div class="logo-footer">
    <!-- falta poner direccion href -->
    <a href="#"><img src="../imagenes-tugiftcard/logo-footer.png" alt=""></a>
  </div>
<div class="small-logos">
  <!-- ponerlos por separados los logos uno para instagram otro para facebook -->
  <!-- y agregarle la direccion a cada uno -->
<a href="#"> <img src="../imagenes-tugiftcard/logos-redes-sociales.png" alt=""></a>
<ul>
  <div class="list-footer">
<!-- agregar direcciones de href -->
  <a href="#"><li>Condiciones De Uso</li></a>
  <a href="#"><li>Aviso De Privacidad</li></a>
  <a href="#"><li>Ayuda</li></a>
  </div>
</ul>

<p>Copyrigth © 2019 tugiftcard.net</p>
</div>

</footer>
        </body>
          </html>
