<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('comment_index', new Route(
    '/',
    array('_controller' => 'AppBundle:Comment:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('comment_show', new Route(
    '/{id}/show',
    array('_controller' => 'AppBundle:Comment:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('comment_new', new Route(
    '/new',
    array('_controller' => 'AppBundle:Comment:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('comment_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'AppBundle:Comment:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('comment_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'AppBundle:Comment:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
