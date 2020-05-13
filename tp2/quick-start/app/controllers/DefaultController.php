<?php
namespace controllers;
 /**
 * Controller DefaultController
 * @route("/hello", "automated"=>true)
 **/
class DefaultController extends ControllerBase{

	public function index(){
             echo 'Hello World';
		
	}


	/**
	 *@route("DefaultController/direHello/{name}")
	**/
	public function direHello($name){
		echo 'Hello' .$name.'!';
	}




	/**
	 *@route("info/{title}/{message}/")
	**/
	public function information($title,$message='nothing'){
		
		$this->loadView('DefaultController/information.html', compact('title','message'));

	}

}
