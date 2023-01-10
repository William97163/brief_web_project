<?php

// Récupération des données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Préparation du message
$message = "Nouveau formulaire soumis\n\n";
$message .= "Nom : " . $name . "\n";
$message .= "Email : " . $email . "\n";
$message .= "Téléphone : " . $phone . "\n";

// Envoi de l'email
mail('youremail@example.com', 'Nouveau formulaire soumis', $message);

?>
