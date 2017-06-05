<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\SectionsModel as sections;

class SectionsController extends Controller {

	private $SectionsModel;

	public function __construct(){
		$this->SectionsModel = new sections;
	}

}