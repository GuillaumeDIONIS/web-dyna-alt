<?php
namespace controllers;
 /**
 * Controller MainController
 * @get("_default","name"=>"Home")
 */
class MainController extends ControllerBase{

	public function index(){
		$this->loadView("MainController/index.html");
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