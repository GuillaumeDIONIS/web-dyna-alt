<?php
namespace controllers;



use models\Rassemblement;
use Ubiquity\utils\http\UCookie;

use Ubiquity\utils\http\UResponse;
use Ubiquity\utils\http\URequest;
use Ubiquity\orm\DAO;


/**
 * Controller FlashmobsController
 */


class FlashmobsController extends ControllerBase{

	public function index(){

		if(!UCookie::exists("flash-mob")){
			$message="Il s'agit de votre première visite, bienvenue !";
			UCookie::set('flash-mob',true);
		} elseif(UCookie::exists("flash-mob")) {
			$message="Merci de votre retour !";
		}

		$this->loadView('FlashmobsController/index.html',["message"=>$message]);

	}



	/**
	 *@get("flashmobs/create","name"=>"flashmobs.create")
	 */


	public function flashmobsForm(){

		$this->loadView('FlashmobsController/flashmobsForm.html');

	}

	/**
     *@post("flashmobs/create/do","name"=>"flashmobs.create.do")
     **/
	public function flashmobsCreate(){

		$form=URequest::getDatas();

		$e = new Rassemblement();
		$e->setNom($form['nom']);
		$e->setLieu($form['lieu']);
		$e->setDateHeure($form['date']);
		$e->setActif(true);
		if (!DAO::insert($event)){
			$this->loadView('FlashmobsController/erreur.html',["nom"=>$form['nom']]);
		} else {
			UResponse::header("location","/flashmobs");
		}
	}

}
