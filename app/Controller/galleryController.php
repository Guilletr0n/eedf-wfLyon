<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\galleryModel as gallery;

class galleryController extends Controller
{
	private $galleryModel;

	public function __construct(){
		$this->galleryModel = new gallery;
	}


	}
