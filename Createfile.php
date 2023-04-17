<?php 


require __DIR__ . '/vendor/autoload.php';

use \App\Files\Csv;

    $date = [
        [
            'coluna',
            'coluna2',
            'descrição'
        ],
        [
            1,
            'Produto Teste',
            'Produto Teste de integração',
        ],
        [
            2,
            'Produto ola',
            'Produto Teste de integração',
        ],
        [
            3,
            null,
            'Produto Teste',
        ],
    ];


$sucess = Csv::createFile(__DIR__ .'/files/write.csv',$date,',');

var_dump($sucess);