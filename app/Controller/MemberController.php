<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\MembersModel as members;
use \Model\SectionsModel as sections;

class MemberController extends Controller {
	private $MembersModel;
	private $SectionsModel;

	public function __construct(){
		$this->MembersModel = new members;
		$this->SectionsModel = new sections;
	}

 	public function members(){
 		//récupération de toute la table members
 		$data = $this->MembersModel->findAll('id_section');
 		//$idsection=$this->SectionsModel->find($id);

 		/* TEST
 		//print_r($data[0]['id_section']);
 		//$section['rank'] = $this->MembersModel->findSection($data[0]['id_section']);
 		//print_r($section['rank']);
 		//$this->allowTo('admin'); // seulement visible par l'admin
		*/
		//on redirige vers la route member_members & un tableau members contenant les informations des membres
		$this->show('member/members', ['members' => $data]);
	}

/*
	public function showMembers(){
		if(is_numeric($id)){
			$member = $this->MembersModel->find($id);
		}else{
			$member = $this->MembersModel->search($id);
			//$member = $member[0];
		}
		$this->show('member_showMembers', ['members' => $member]);
	}
*/
	public function editMember($id){
		//$this->allowTo('admin');
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			//récupération des informations du membre correspondant à l'id dans la table members
			$member = $this->MembersModel->find($id);
			//récupération de la liste des sections existantes
			$listsections = $this->SectionsModel->findAll('id');
			print_r($listsections);
			//print_r($listsections[0]['rank']);
			//print_r($listsections[0]['id']);
			//Envoie de 2 tableau members=table members & listsections = liste des sections existantes
			$this->show('member/editMember', ['members' => $member, 'listsections' => $listsections]);
		}else{
			//Si la method post est utilisé on modifie les informations du membre correspondant à l'id de la table members
			$this->MembersModel->update($_POST, $id);
			//on redirige vers la route member_members
			$this->redirectToRoute('member_members');
		}
	}

	public function addMember(){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$listsections = $this->SectionsModel->findAll('id');
		//Si method GET afficher le formulaire
	    $this->show('member/addMember', ['listsections' => $listsections]);
	}else{										 
		//Si method POST envoyer les données à la bdd
		$this->MembersModel->insert($_POST);
		//on redirige vers la route member_addMembers
		$this->redirectToRoute('member_addMember');
	  }
	}

	public function deleteMembers($id){
		// on efface le membre correspondant à l'id de la table members
		$this->MembersModel->delete($id);
		//on redirige vers la route member_addMembers
		$this->redirectToRoute('member_members');
	}
}
