<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('app_home', new Route(
  '/',
  array('_controller' => 'AppBundle:Default:index'),
  array(),
  array(),
  '',
  array(),
  array('GET')
));

  return $collection;

?>
