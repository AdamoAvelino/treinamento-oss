<?php

namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\FinanceiroModel;

class FinanceiroController extends Controller
{

    public function listarConta()
    {
        $financeiro_model = new FinanceiroModel;
        $financeiros = $financeiro_model->listar();
        $response = [
            'financeiros' => $financeiros,
            'pagina' => 'Lista  Pagamentos',
            'descricao' => 'Pagina para usuarios visualizarem informações dos Pagamentos'
        ];

        $this->app->render('financeiro.financeiro', $response);
    }
}
