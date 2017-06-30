<?php

namespace Controller;

use \W\Controller\Controller;
use DocumentController;
use \Model\DocumentsModel as document;
use \PHPMailer;
use \Model\MembersModel as members;
use \Model\SectionsModel as sections;
use \W\Security\AuthentificationModel as auth;

class DefaultController extends Controller{
	protected $docModel;
	private $MembersModel;
	private $SectionsModel;
	private $auth;

	public function __construct(){
		$this->docModel = new document;
		$this->MembersModel = new members;
		$this->SectionsModel = new sections;
		$this->AuthentificationModel = new auth;
	}
	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$loggedUser = $this->getUser();
		$this->show('default/home',['role'=>$loggedUser['role'],'user'=>$loggedUser]);
	}
	/**
	 * Page de contact
	 */
	public function contact()
	{
		$this->show('default/contact');
	}
	/**
	 * Page de cgv
	 */
	// public function cgv()
	// {
	// 	$this->show('default/cgv');
	// }
	/**
	 * Page de la Gallery
	 */
	// public function gallery()
	// {
	// 	$data = '2016-01_EEDF_Patinoire';
	// 	$this->show('default/gallery', ['data'=>$data,'path'=>'assets/images/']);
	// }

	public function documents()
	{
		$data = $this->docModel->findAll();
		$this->show('default/accueil', ['documents' => $data]);

	}
	public function voir_documents(){
		if(is_numeric($id)){
			$document = $this->docModel->find($id);
		}else{
			$document = $this->docModel->search($id);
			$document = $document[0];
		}
		$this->show('default/accueil', ['documents' => $document]);
	}
	
	/**
	 * Page des événements
	 */
	public function events()
	{
		$this->show('events/events');

	}

	public function accueil()
	{
		//récupération des informations utilisateur
		$id_user = $this->AuthentificationModel->getLoggedUser();
		$listsections = $this->SectionsModel->findAll('id');
		//print_r($id_user['id']);
		//récupération des information documents 
		$data = $this->docModel->findAll();
		if(is_numeric($id_user['id'])){
		//récupération des membres en fonction d'un utilisateur
		$usermembers = $this->MembersModel->userMembers($id_user['id']);
		//print_r($usermembers);
		//$member = $this->MembersModel->findAll('id_section');
 		//$listsections = $this->SectionsModel->findAll('id');
 		$this->show('default/accueil',['usermembers' => $usermembers,'listsections' => $listsections,'documents' => $data]);
		}else{
		$this->show('default/accueil',['documents' => $data]);
		}
	}

	public function quisommesnous()
	{
		$this->show('default/quisommesnous');

	}

	public function contact2()
	{
		$safe = array_map('strip_tags', $_POST);
		$mail = new PHPmailer;
		$mail->isSMTP(); // connexion directe au serveur SMTP
		$mail->isHTML(true); //utilisation du format HTML
		$mail->Host = "smtp.mail.yahoo.com"; // le serveur de messagerie
		$mail->Port = 465; //le port utilisé sur le serveur
		$mail->SMTPAuth = true; // on va fournir un login et un mdp au serveur
		$mail->SMTPSecure = 'ssl'; //Certificat SSL
		$mail->Username = 'c.digon@yahoo.com'; //mon login pour le SMTP
		$mail->Password = 'strikeapose06'; // le mot de passe SMTP
		$mail->SetFrom('eedfanno@gmail.com', 'EEDF Annonay'); // Expéditeur
		$mail->addAddress('c.digon@yahoo.com'); // le destinataire
		$mail->Subject = 'message de '.$safe['mail']; // le sujet
		$mail->Body = '<html>
						<head>
						<style>
							h1{ color:green; }
						</style>
						</head>
						<body>
							<h1>Message de '.$safe['mail'].'</h1>
							'.$safe['commentaire'].'
							</body>
							</html>'; // le contenu du mail en HTML
		if(!$mail->send()) //si l'envoi ne marche pas...
		{
			echo 'Erreur envoi:'.$mail->ErrorInfo;
		}
		// si mail envoyé dire merci et retour page accueil
		$this->redirectToRoute('default_contact',['message' => 'Message envoyé']);
	}
}
