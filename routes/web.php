<?php

/**
 * Rutas de la aplicacion
 */

$router->get('/', ['as' => 'home', 'uses' => 'FrontController@index']);
$router->get('/acerca', ['as' => 'about', 'uses' => 'FrontController@about']);
$router->get('/contacto', ['as' => 'contact', 'uses' => 'FrontController@contact']);
$router->post('/contacto', ['as' => 'contact.post', 'uses' => 'FrontController@postContact']);
$router->get('/servicio/{slug}', ['as' => 'service', 'uses' => 'FrontController@service']);
