<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['name']);
    $cognome = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $partitaIVA = htmlspecialchars($_POST['piva']);
    $supporto = htmlspecialchars($_POST['uso']);
    $messaggio = htmlspecialchars($_POST['preferenzeSupporto']);

    // Validazione telefono
    function validaNumeroTelefono($numero) {
        $numeroPulito = preg_replace('/[\s\-\(\)\+]/', '', $numero);
        return preg_match('/^[0-9]{9,10}$/', $numeroPulito);
    }

    // Se il telefono non è valido, si reindirizza
    if (!validaNumeroTelefono($telefono)) {
        header("Location: https://www.galloaldo.com/grazie.php", true, 301);
        exit;
    }

    // Se manca il cognome, consideriamo il contatto sospetto
    if (empty($cognome)) {
        $to = 'afolghera@gmail.com';
        $subject = 'Richiesta sospetta - Gallo Aldo';
    } else {
        $to = 'info@galloaldo.com';
        $subject = 'Nuova Richiesta dal Form Gallo Aldo';
    }

    $message = "Nome: $nome $cognome\n";
    $message .= "Email: $email\n";
    $message .= "Telefono: $telefono\n";
    $message .= "Partita IVA: $partitaIVA\n";
    $message .= "Materiale: $supporto\n";
    $message .= "Richiesta:\n$messaggio\n";

    $headers = "From: info@galloaldo.com\r\n";
    $headers .= "Reply-To: info@galloaldo.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Invia sempre una copia in BCC a te se non è spam
    if (!empty($cognome)) {
        $headers .= "Bcc: afolghera@gmail.com\r\n";
    }

    if (mail($to, $subject, $message, $headers)) {
		//echo $message;
		//exit;
        header("Location: https://www.galloaldo.com/grazie.php", true, 301);
        exit;
    } else {
        echo "Errore nell'invio dell'email.";
    }
}
?>
