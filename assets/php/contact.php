<?php
print_r($_REQUEST);
if(isset($_REQUEST['submit'])) {
$name = $_REQUEST['name']; //
//$subject = $_REQUEST['subject']; //
$email = $_REQUEST['email']; //
$message = $_REQUEST['message'];
$subject = 'Contato site - Lucas Barque';//. $subject;
$to = 'lucasbarquedasilva@hotmail.com'; // change email

     $headers="From: {$email}\r\nReply-To: {$email}";
    mail($to,$subject,$message,$headers);
    $success = "Obrigado pelo contato!";
 //echo $headers;
}
?>