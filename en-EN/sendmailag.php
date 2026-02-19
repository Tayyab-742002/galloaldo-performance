<?php

require_once "phpmailer/class.phpmailer.php";

/*$receiverMail	= "davidegorati@gmail.com";*/


$ragionesociale	    = ltrim(rtrim(strip_tags(stripslashes($_POST['ragionesociale']))));
$vat				= ltrim(rtrim(strip_tags(stripslashes($_POST['vat']))));
$cf					= ltrim(rtrim(strip_tags(stripslashes($_POST['cf']))));
$sdi				= ltrim(rtrim(strip_tags(stripslashes($_POST['sdi']))));
$indirizzo			= ltrim(rtrim(strip_tags(stripslashes($_POST['indirizzo']))));
$localita			= ltrim(rtrim(strip_tags(stripslashes($_POST['localita']))));
$provincia			= ltrim(rtrim(strip_tags(stripslashes($_POST['provincia']))));
$cap				= ltrim(rtrim(strip_tags(stripslashes($_POST['cap']))));
$phone				= ltrim(rtrim(strip_tags(stripslashes($_POST['phone']))));
$email				= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$message			= ltrim(rtrim(strip_tags(stripslashes($_POST['message']))));
$gdprlift	    	= ltrim(rtrim(strip_tags(stripslashes($_POST['gdprlift']))));




//Messaggio
$oggetto = "Richiesta di informazioni da sito GalloAldo.com";
$messaggio = "
<strong>Dati Cliente / Azienda richiedente</strong><br />
Ragione Sociale: $ragionesociale<br />
P.IVA: $vat<br />
Cod.Fiscale: $cf<br />
SDI: $sdi<br />
<br />
<strong>Dati logistici cliente</strong><br />
Indirizzo: $indirizzo<br />
Località: $localita<br />
Provincia: $provincia<br />
CAP: $cap<br />
Telefono: $phone<br />
Email: $email<br /><br />
<strong>Altre richieste / note:</strong><br />
Message: $message<br />
<br />

";


//Inclusione della Libreria
$mail = new PHPMailer();
$mail->From = $email;
$mail->FromName = $email;
$mail->AddAddress ("info@galloaldo.com");
$mail->IsHTML(true);
$mail->Subject = $oggetto;
$mail->Body = $messaggio;

//Invio mail
if ($ragionesociale == '' or $vat == '' or $cf == '' or $localita == '' or $provincia == '' or $phone == '' or $email == '' or $gdprlift != 'si') {
    header("location: ./error.php");} 

else{
$mail->Send();
    header("location: ./thanks-to-contact-galloaldo.php");}  
?>




