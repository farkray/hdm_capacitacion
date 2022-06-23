<?php
//landings
$landing = 'https://hdm.company/capacitacion-empresarial';
$correo_envio = 'krayem.farid@gmail.com';
//Elementos capturados por POST
$nombre =   isset( $_POST['name'] ) ? $_POST['name'] : '';
$mensaje =  isset( $_POST['mensaje'] ) ? $_POST['mensaje'] : '';
$correo =  isset( $_POST['email'] ) ? $_POST['email'] : '';
$caso =  isset( $_POST['subjet'] ) ? $_POST['subjet'] : '';
$asunto =   'Mensaje de la landing page HDM';
  $contenido = '
  						<html>
  						<head>
  							<title></title>
  						</head>
  						<body>
  							 <h2>Haz recibido un mensaje através de la página que creaste con Mercabits y</h2>
  							 <p><b>'.$nombre.'</b> te ha enviado el siguiente mensaje:</p>
                 <br>
  							 <p><b>'.$mensaje.',</p><p><br>
                Su correo es: <b>'.$correo.'</b>,<br> y su caso es: <b>'.$caso.'</b> </p>

  						</body>
  						</html>';

// Configuración de los encabezados
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

// Enviar correo
$envio = mail($correo_envio, $asunto, $contenido, $headers);

  if (mail($asunto, utf8_decode($mensaje)))
  echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');
  </script>";
  echo "<script type='text/javascript'>window.location.href='" . $landing . "';</script>";
 ?>