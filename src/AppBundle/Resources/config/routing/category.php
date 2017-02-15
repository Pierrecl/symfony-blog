<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('category_index', new Route(
    '/',
    array('_controller' => 'AppBundle:Category:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('category_show', new Route(
    '/{id}/show',
    array('_controller' => 'AppBundle:Category:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('category_new', new Route(
    '/new',
    array('_controller' => 'AppBundle:Category:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('category_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'AppBundle:Category:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('category_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'AppBundle:Category:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
