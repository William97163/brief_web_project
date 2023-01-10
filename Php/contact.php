<?php

require 'path/to/PHPMailerAutoload.php';

// Récupération des données du formulaire
$pseudo = $_POST['contact_nom'];
$email = $_POST['contact_mail'];
$tel = $_POST['contact_num'];
$msg = $_POST['contact_msg'];

// Création d'un nouvel objet PHPMailer
$mail = new PHPMailer;

// Configuration du serveur SMTP
$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Configuration des adresses de l'expéditeur et du destinataire
$mail->setFrom($email, 'Formulaire de contact');
$mail->addAddress('dydz.reichart@gmail.com', 'Your Name');

// Ajout des informations du formulaire en tant que contenu de l'e-mail
$mail->isHTML(false);
$mail->Subject = 'Nouveau formulaire soumis';
$mail->Body    = "Nom : $pseudo\nEmail : $email\nTéléphone : $tel";

// Envoi de l'email
if (!$mail->send()) {
    echo 'Le message n\'a pas été envoyé.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Le message a bien été envoyé.';
}

?>

/*
//Code qui marche si nous ne somme pas en local car mail ne marche pas en local
// Récupération des données du formulaire
$pseudo = $_POST['contact_nom'];
$email = $_POST['contact_mail'];
$tel = $_POST['contact_num'];
$msg = $_POST['contact_msg'];

// Préparation du message
$message = "Nouveau formulaire soumis\n\n";
$message .= "Nom : " . $pseudo . "\n";
$message .= "Email : " . $email . "\n";
$message .= "telephone : " . $tel . "\n";
$message .= "Message : " . $msg . "\n";


// Envoi de l'email
mail('twintower1109@gmail.com', 'Nouveau formulaire soumis', $message);

?>*/
