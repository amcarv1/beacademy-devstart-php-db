<?php

declare(strict_types=1);


use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ClientController;



function createRoute(string $controlerName, string $methodName)
{
    return [
        'controller' => $controlerName,
        'method' => $methodName,
    ];
}

$routes = [
    '/' => createRoute(IndexController::class, 'indexAction'),

    '/produtos' => createRoute(ProductController::class, 'listAction'),
    '/produtos/novos' => createRoute(ProductController::class, 'addAction'),
    '/produtos/excluir' => createRoute(ProductController::class, 'removeAction'),
    '/produtos/editar' => createRoute(ProductController::class, 'editAction'),
    '/produtos/relatorio' => createRoute(ProductController::class, 'reportAction'),

    '/categorias' => createRoute(CategoryController::class, 'listAction'),
    '/categorias/nova' => createRoute(CategoryController::class, 'addAction'),  
    '/categorias/excluir' => createRoute(CategoryController::class, 'removeAction'),
    '/categorias/editar' => createRoute(CategoryController::class, 'editAction'),

    '/clientes' => createRoute(ClientController::class, 'listAction'),
    '/clientes/novos' => createRoute(ClientController::class, 'addAction'),  
    '/clientes/excluir' => createRoute(ClientController::class, 'removeAction'),
    '/clientes/editar' => createRoute(ClientController::class, 'editAction')
];

return $routes;