<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\ProdutoModel;

class ProdutoController extends Controller
{
    public function listarProdutos() 
    {
        $produto_model = new ProdutoModel;
        $produtos = $produto_model->listar();
        
        $response = [
            'produtos' => $produtos, 
            'pagina' => 'Lista de Produtos', 
            'descricao' => 'Pagina para usuarios visualizarem informações de produtos'
        ];
        
        $this->app->render('produto.produto', $response);
    }
}