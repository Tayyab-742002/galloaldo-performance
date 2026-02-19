<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
	$telefono = htmlspecialchars($_POST['telefono']);
    $uso = htmlspecialchars($_POST['uso']);
	$supporto = htmlspecialchars($_POST['supporto']);
    $size = htmlspecialchars($_POST['size']);
	$preferenzeSupporto = htmlspecialchars($_POST['preferenzeSupporto']);
	$esternoSupporto = htmlspecialchars($_POST['esternoSupporto']);
	
	if (strlen($preferenzeSupporto) > 5) {
    $preferenzeSupporto=$preferenzeSupporto;
} else {
    $preferenzeSupporto=$esternoSupporto;
}
	
	
	function validaNumeroTelefono($numero) {
    // Rimuovi spazi, trattini, parentesi e il prefisso internazionale (+39)
    $numeroPulito = preg_replace('/[\s\-\(\)\+]/', '', $numero);
    
    // Verifica che sia composto solo da cifre e che sia lungo 9 o 10 caratteri
    if (preg_match('/^[0-9]{9,10}$/', $numeroPulito)) {
        return true;
    } else {
        return false;
    }
}

$numeroDaValidare = $telefono;

if (validaNumeroTelefono($numeroDaValidare)) {
    $to = 'info@galloaldo.com';
    $subject = 'Nuova Richiesta dal Form Gallo Aldo';
    $message = "Nome e Cognome: $name\nEmail: $email\nTelefono: $telefono\nTipo di accessorio: $uso\nSupporto: $supporto\nMisure delle bandiere: $size\nExtra info: $preferenzeSupporto";
    $headers = 'From: info@galloaldo.com' . "\r\n" .
			   'Bcc: afolghera@gmail.com' . "\r\n" .  
               'Reply-To: info@galloaldo.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

} else {
   header("Location: https://www.galloaldo.com/grazie.php", true, 301); exit; 
}

   
    if (mail($to, $subject, $message, $headers)) {
       		header("Location: https://www.galloaldo.com/grazie.php", true, 301); exit; 
    } else {
        echo 'Errore nell\'invio dell\'email.';
    }
}

?>