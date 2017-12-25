<?php

namespace Controller;

use \W\Controller\Controller;

use \Model\EventsModel as events;
use \Model\galleryModel as gallery;

class EventsController extends Controller
{
	private $EventsModel;
	private $galleryModel;

	public function __construct(){
		$this->EventsModel = new events;
		$this->galleryModel = new gallery;
	}

	/**
	 * Page des événements
	 */
	public function events(){
		$data = $this->EventsModel->findAll();

		$this->show('events/events', ['events' => $data]);
	}

	/**
	 * Page des événements sur interface admin
	 */
	public function events_admin(){
		$this->allowTo('admin');
		$data = $this->EventsModel->findAll();
		//$data2 = $this->galleryModel->findAll();

		$this->show('events/events_admin', ['events' => $data]);  // , 'gallery' => $data2
	}

	/**
	 * Fonctions admin
	 */
	public function edit_event($id){
		$this->allowTo('admin');
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$events = $this->EventsModel->find($id);
			$this->show('events/edit_event', ['events' => $events]);
		}else{
			 if (isset($_POST['online'])) {
                // Checkbox is selected
                $_POST['online']=1;
                } else {
                // Alternate code
                $_POST['online']=0;
               }
			$this->EventsModel->update($_POST, $id);
			$this->redirectToRoute('events_events_admin');
		}
	}

	public function add_event(){
		$this->allowTo('admin');
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
		//Si method GET afficher le formulaire
			$this->show('events/add_event');
	}else{
		//Si method POST envoyer les données à la bdd
		//$galleryname = $_POST['galleryname'];
		//unset($_POST['galleryname']);
		 if (isset($_POST['online'])) {
                // Checkbox is selected
                $_POST['online']=1;
                } else {
                // Alternate code
                $_POST['online']=0;
               }
		$event = $this->EventsModel->insert($_POST);
		
		/*
		$gallery = [
			'id_event' => $event['id'],
			'galleryname' => $galleryname
		];
		$this->galleryModel->insert($gallery);
		*/
		$this->redirectToRoute('events_add_event');

		}
	}

	public function delete_event($id){
		$this->allowTo('admin');
		$events = $this->EventsModel->find($id);
		$this->EventsModel->delete($id);
		$this->redirectToRoute('events_events_admin');
	}


}

?>
