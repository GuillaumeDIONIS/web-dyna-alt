<?php
namespace controllers;
 /**
 * Controller DefaultController
 **/
class DefaultController extends ControllerBase{

	public function index(){
		
	}

	/**
	 *@route("DefaultController/afficher_html")
	**/
	public function afficher_html(){
		
		$this->loadView('DefaultController/afficher_html.html');

	}

}
