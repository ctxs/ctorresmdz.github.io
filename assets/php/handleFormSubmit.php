<?php

if(isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) ){
  // declare our variables
  $name = $_POST['n'];
  $email = $_POST['e'];
  $message = nl2br($_POST['m']);

  // set a title for the message
  $subject = "Mensaje desde el CV - " . $name;
  $body = "De: $name <br>Email: $email <br>Msg: $message";
  $headers = 'From: '.$email.'' . "\r\n" .
      'Reply-To: '.$email.'' . "\r\n" .
  	'Content-type: text/html; charset=utf-8' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

  $resp = (mail("ctorresmdz@gmail.com", $subject, $body, $headers)) ? 'ok' : 'nok';
  $jsondata['res'] = 'ok';

} else {
  $jsondata['err'] = 'wrong param';
}
echo json_encode($jsondata);
?>
