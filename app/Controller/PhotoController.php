<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\PhotosModel as photo;

class PhotoController extends Controller {
	protected $photosModel;

	public function __construct(){
		$this->photosModel = new photo;
	}


	public function showPhotos(){
 		$data = $this->photosModel->findAll();
 		//$this->allowTo('admin'); // seulement visible par l'admin
		$this->show('photo/photos', ['photos' => $data]);
	}	
		
	public function userPhotos(){	
		//$this->allowTo('user'); // seulement visible par user
		$this->show('photo/users_photos', ['photos' => $data]);
	}

	// public function ajaxGetPhoto(){
	// 	$data = $this->photosModel->findAll();
	// 	foreach ($data as $key => $photo) {
	// 		$data[$key]['action'] = $this->generateUrl('photo_edit_photos', ['id' => $photo['id']]);
	// 	}
	// 	$this->showJson($data);
	// }

	/*public function showPhotos(){
		if(is_numeric($id)){
			$photo = $this->photosModel->find($id);
		}else{
			$photo = $this->photosModel->search($id);
			$photo = $photo[0];
		}
		$this->show('photo_photos', ['photos' => $photo]);
	}*/


	public function addPhotos(){
		//$this->allowTo('admin'); // seulement visible par l'admin
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$this->show('photo/add_photos');
		}else{
            // $this->photosModel->insert($_POST);
            // $this->redirectToRoute('photo_photos');                                        
            $this->photosModel->add_photos($_POST);
            $this->redirectToRoute('photo_photos');

		}
	}

	public function editPhotos($id){
		//$this->allowTo('admin');
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$photo = $this->photosModel->find($id);
			$this->show('photo/edit_photos', ['photos' => $photo]);
		}else{
			$this->photosModel->update_photos($_POST, $id);
			$this->redirectToRoute('photo_photos');
		}
	}

	public function deletePhotos(){
		$this->show('photo/delete_photos', ['photos' => $photo]);
		$this->photosModel->delete($_POST, $id);
		$this->redirectToRoute('photo_photos');
	}
}

 ?>
