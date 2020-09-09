<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('series', 'SeriesController@store');
    $router->get('series', 'SeriesController@index');
    $router->get('series/{id}', 'SeriesController@show');
    $router->put('series/{id}', 'SeriesController@update');
    $router->delete('series/{id}', 'SeriesController@destroy');
});
