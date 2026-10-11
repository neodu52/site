<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nom = htmlspecialchars($_POST["nom"]);
  $email = htmlspecialchars($_POST["email"]);
  $pays = htmlspecialchars($_POST["pays"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "desservettaznoah@gmail.com";
  $subject = "Message depuis le formulaire du site";

  $body = "Nom : $nom\nEmail : $email\nPays : $pays\n\nMessage :\n$message";

  $headers = "From: $email";

  mail($to, $subject, $body, $headers);
   
  echo "Message envoyé.";

}