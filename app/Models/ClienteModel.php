<?php

namespace App\Models;

class ClienteModel
{
    public function listar()
    {
        $clientes = [
            [
                'id' => '1',
                'nome' => 'Denis Cordeiro',
                'idade' => '40',

            ],

            [
                'id' => '2',
                'nome' => 'Adamo',
                'idade' => '40',

            ]
        ];

        return $clientes;
    }
}
