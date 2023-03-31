<?php

use App\Controllers\ClienteController;
use App\Controllers\Home;
use App\Controllers\ProdutoController;
use App\Controllers\FinanceiroController;

$authi = function ($nome) {
    return function() use($nome) {
        if($nome != 'Adamo') {
            $app = \Slim\Slim::getInstance();
            $app->redirect('/');
        }
    };
};

$app->get('/', $authi,  function() {
    $home = new Home();
    $home->index();
});

$app->get('/produto', function() {
    $produto = new ProdutoController;
    $produto->listarProdutos();
});

$app->get('/criar', function() {
    $produto = new ProdutoController;
    $produto->criar();
});

$app->get('/financeiro', function() {
    $financeiro = new FinanceiroController;
    $financeiro->listarConta();
});

$app->get('/cliente', function(){
    $cliente = new ClienteController;
    $cliente->listarClientes();
});


