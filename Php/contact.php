<?php

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

?>
