<?php

namespace App\Controllers;

class FinanceiroController extends Controller
{
    public function listarConta()
    {
        $this->app->render('financeiro.financeiro');
    }
}