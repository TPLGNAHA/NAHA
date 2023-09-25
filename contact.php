<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["text"];

    // Adresse email de destination
    $to = "salemkhmss@gmail.com"; // Remplacez par votre adresse email

    // Sujet de l'email
    $subject = "Nouveau message de $name";

    // Corps de l'email
    $message_body = "Nom: $name\nEmail: $email\nMessage:\n$message";

    // Entêtes de l'email
    $headers = "From: $email";

    // Envoi de l'email
    if (mail($to, $subject, $message_body, $headers)) {
        header("Location: contact.html?message=success");
    } else {
        header("Location: contact.html?message=error");
    }
} else {
    header("Location: contact.html");
}
?>
