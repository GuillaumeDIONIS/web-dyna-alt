<?php
namespace controllers;
 /**
 * Controller FlashmobsController
 */
class FlashmobsController extends ControllerBase{

	public function index(){
        $this->loadView('FlashmobsController/index.html');
	}
}
