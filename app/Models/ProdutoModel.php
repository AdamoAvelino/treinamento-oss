<?php

namespace App\Models;


class ProdutoModel
{
    public function listar()
    {
        $produtos = [
            [
                'id' => '1',
                'descricao' => 'Celular',
                'marca' => 'Mootorola',
                'preco' => '1200,00',
                'quantidade' => '1',
                'categoria' => 'Eletrônico',
            ],
            [
                'id' => '2',
                'descricao' => 'Tennis',
                'marca' => 'Nike',
                'preco' => '520,00',
                'quantidade' => '3',
                'categoria' => 'Calçado',
            ]
        ];

        return $produtos;
    }
}