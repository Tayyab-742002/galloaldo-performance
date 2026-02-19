<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Raccogliere i dati del form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);

    // Eseguire la validazione dei dati (esempio semplice)
    if (empty($name) || empty($email) || empty($address) || empty($city)) {
        echo "Tutti i campi sono obbligatori.";
    } else {
        // Se i dati sono validi, eseguire le operazioni necessarie (es. salvare nel database)
        echo "Form inviato con successo.<br>";
        echo "Nome: $name<br>";
        echo "Email: $email<br>";
        echo "Indirizzo: $address<br>";
        echo "Città: $city<br>";
    }
}
?>