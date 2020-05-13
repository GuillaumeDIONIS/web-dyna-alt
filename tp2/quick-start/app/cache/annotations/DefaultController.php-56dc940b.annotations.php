<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\DefaultController' => 
  array (
  ),
),
  'controllers\\DefaultController' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "/hello", "automated"=>true)
  ),
  'controllers\\DefaultController::direHello' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "DefaultController/direHello/{name}")
  ),
  'controllers\\DefaultController::information' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "info/{title}/{message}/")
  ),
);

