<?php
return array("/DefaultController/afficher_html/"=>array("controller"=>"controllers\\DefaultController","action"=>"afficher_html","parameters"=>array(),"name"=>"DefaultController-afficher-html","cache"=>false,"duration"=>false),"/_default/contact/"=>array("get"=>array("controller"=>"controllers\\MainController","action"=>"contactForm","parameters"=>array(),"name"=>"MainController-contactForm","cache"=>false,"duration"=>false)),"/_default/partners/"=>array("get"=>array("controller"=>"controllers\\MainController","action"=>"partnersList","parameters"=>array(),"name"=>"MainController-partnersList","cache"=>false,"duration"=>false)),"/_default/partners/(.+?)/"=>array("get"=>array("controller"=>"controllers\\MainController","action"=>"partnersDetails","parameters"=>array(0),"name"=>"MainController-partnersDetails","cache"=>false,"duration"=>false)),"/_default/sendMessage/"=>array("post"=>array("controller"=>"controllers\\MainController","action"=>"sendMessage","parameters"=>array(),"name"=>"MainController-sendMessage","cache"=>false,"duration"=>false)));