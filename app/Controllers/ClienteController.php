<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\ClienteModel;

class ClienteController extends Controller
{
    public function listarClientes()
    {
        $cliente_model = new ClienteModel;
        $clientes = $cliente_model->listar();
        $response = [
            'clientes' => $clientes, 
            'pagina' => 'Lista de Clientes', 
            'descricao' => 'Pagina para usuarios visualizarem informações dos clientes'
        ];

        $this->app->render('cliente.index', $response);
    }
}