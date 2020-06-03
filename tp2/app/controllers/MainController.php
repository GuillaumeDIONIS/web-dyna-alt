<?php
namespace controllers;

use ws\controllers\AbstractWsController;
 /**
 * Controller MainController
 * @get("_default","name"=>"Home")
 */
class MainController extends AbstractWsController {

	public function index(){
		$menu=$this->getMenu('Home');
		$messages=$this->dataProvider->getMessages();
		$content=$this->dataProvider->getPageContent('Home');
		var_dump($menu);
		var_dump($messages);
		var_dump($content);
	}

	/**
	 *@route("contact","methods"=>["get"])
	**/
	public function contactForm(){
		
		$this->loadView('MainController/contactForm.html');

	}
	/**
	*@route("partners",'methods"=>["get"])
	**/
	public function partnersList(){
		
		$this->loadView('MainController/partnersList.html');
	}
	/**
	*@route("partners/{name}",'methods"=>["get"])
	**/
	
	public function partnersDetails($name){

		$this->loadView('MainController/partnersDetails.html');
		
	}
	
	/**
	*@route("sendMessage",'methods"=>["post"])
	**/
	public function sendMessage(){

		$this->loadView('MainController/sendMesasge.html');
		
		
}
}