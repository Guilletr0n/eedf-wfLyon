<?php

namespace Controller;

use \W\Controller\Controller;

use \Model\eventsModel as events;
//use \Model\galleryModel as gallery;

class EventsController extends Controller
{
	private $eventsModel;
	//private $galleryModel;

	public function __construct(){
		$this->eventsModel = new events;
		//$this->galleryModel = new gallery;
	}

	/**
	 * Page des événements
	 */
	public function events(){
		$data = $this->eventsModel->findAll();

		$this->show('events/events', ['events' => $data]);
	}

	/**
	 * Page des événements sur interface admin
	 */
	public function events_admin(){
		$data = $this->eventsModel->findAll();
		//$data2 = $this->galleryModel->findAll();

		$this->show('events/events_admin', ['events' => $data]);  // , 'gallery' => $data2
	}

	/**
	 * Fonctions admin
	 */
	public function edit_event($id){
		//$this->allowTo('admin');
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$events = $this->eventsModel->find($id);
			$this->show('events/edit_event', ['events' => $events]);
		}else{
			$this->eventsModel->update($_POST, $id);
			$this->redirectToRoute('events_events_admin');
		}
	}

	public function add_event(){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
		//Si method GET afficher le formulaire
			$this->show('events/add_event');
	}else{
		//Si method POST envoyer les données à la bdd
		$this->eventsModel->insert($_POST);
		$this->galleryModel->insert($_POST);
		$this->redirectToRoute('events_add_event');

		}
	}

	public function delete_event($id){
		$events = $this->eventsModel->find($id);
		$this->eventsModel->delete($id);
		$this->redirectToRoute('events_events_admin');
	}

	}
