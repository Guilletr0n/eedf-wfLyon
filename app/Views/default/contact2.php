<?php
session_start();
/* script d'envoi de mail de contact */

// enquete + connexion
require_once "includes/phpmailer/PHPMailerAutoload.php";
// Mr Propre
$safe = array_map('strip_tags', $_POST);
// création d'un objet mail
$mail = new PHPmailer;
$mail->isSMTP(); // connexion directe au serveur SMTP
$mail->isHTML(true); //utilisation du format HTML
$mail->Host = "smtp.yahoo.com"; // le serveur de messagerie
$mail->Port = 465; //le port utilisé sur le serveur
$mail->SMTPAuth = true; // on va fournir un login et un mdp au serveur
$mail->SMTPSecure = 'ssl'; //Certificat SSL
$mail->Username = 'eedfanno@gmail.com'; //mon login pour le SMTP
$mail->Password = 'Azerty1234'; // le mot de passe SMTP
$mail->SetFrom('eedfanno@gmail.com', 'EEDF Annonay'); // Expéditeur
$mail->addAddress('c.digon@yahoo.com'); // le destinataire
$mail->Subject = 'message de '.$safe['email']; // le sujet
$mail->Body = '<html>
				<head>
				<style>
					h1{ color:green; }
				</style>
				</head>
				<body>
					<h1>Message de '.$safe['email'].'</h1>
					'.$safe['message'].'
					</body>
					</html>'; // le contenu du mail en HTML
if(!$mail->send()) //si l'envoi ne marche pas...
{
	echo 'Erreur envoi:'.$mail->ErrorInfo;
}
// si mail envoyé dire merci et retour page accueil
else echo '<script>
			alert("Merci pour votre message");
		window.location.replace("index.php");
		</script>';

?>