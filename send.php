<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>Contact</title>
    <meta name="description" content="Une phrase d'environ 170 caractères">
    <meta charset="UTF-8">
    <meta name="viewport" content="height=device-height width=device-width, initial-scale=1.0, minimum-scale=1.0 maximum-scale=1.0, user-scalable=no target-densitydpi=device-dpi">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="portfolio, projet, web, webdesign, site internet, design" />
    <meta name="description" content="Bienvenue sur mon portfolio. Je m'apelle Corentin Mas et je suis webdesigner. Viens découvrir mes projets et mon univers." />
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap" rel="stylesheet">
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD']=='POST') {
     
      $nom     = htmlentities($_POST['user_name']);
      $email   = htmlentities($_POST['user_email']);
      $message = htmlentities($_POST['user_msg']);
         
      $destinataire = 'versusartists@gmail.com';
      $sujet = 'Message reçu de Milka';
      $contenu = '<html><head><title>Message reçu de Milka</title></head><body>';
      $contenu .= '<p>Bonjour, vous avez re&ccedil;u un message &agrave; partir du formulaire de milka.</p>';
      $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
      $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
      $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
      $contenu .= '</body></html>';
     
      $headers = 'MIME-Version: 1.0'."\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
     
      mail($destinataire, $sujet, $contenu, $headers);
      echo '<h1>Message envoyé !<h1><p>Nous vous remercions pour votre message qui sera traité dans le plus bref delais</p><a href="./index.html">Retour à l’accueil</a>';
    }
    ?>
</body>