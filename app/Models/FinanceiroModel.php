<?php

namespace App\Models;

class FinanceiroModel
{
    public function listar()
    {
        $Financeiros = [
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

        return $Financeiros;
    }
}