<?php

use App\Controllers\Home;
use App\Controllers\ProdutoController;

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



