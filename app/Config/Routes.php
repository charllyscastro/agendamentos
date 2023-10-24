<?php

use App\Controllers\Super\HomeController;
use App\Controllers\Super\UnitsController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);


/**
 * @todo colocar filtros de permissão/ autenticação
 */
$routes->group('super', static function ($routes){

    //home
    $routes->get('/', [HomeController::class, 'index'], ['as' => 'super.home']);


    // rota de unidades
    $routes->group('units', static function ($routes){

        //home
        $routes->get('/', [UnitsController::class, 'index'], ['as' => 'units']);
    });
});


