<?php

$to = 'info@mobillers.com';

$subject = 'Datos de Contacto';

$message = '
<html>
<head>
  <title>Datos de Contacto</title>
</head>
<body>
  <p>
  Nombre: '.$_POST["nomape"].'
  </p>
  <p>
  Email: '.$_POST["emailf"].'
  </p>
  <p>
  Empresa: '.$_POST["emp"].'
  </p>
  <p>
  Sitio Web: '.$_POST["sitio"].'
  </p>
  <p>
  Mensaje: '.$_POST["mensaje"].'
  </p>
</body>
</html>
';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';

$headers[] = 'To: <info@mobillers.com>';

$headers[] = 'From: <info@mobillers.com>';

$mail = mail($to, $subject, $message, implode("\r\n", $headers));

header('Location: http://holobox.app/index.php?send=ok');

?>
