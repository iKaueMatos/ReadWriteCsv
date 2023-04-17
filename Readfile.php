<?php 

use \App\Files\Csv;
require __DIR__ . '/vendor/autoload.php';

$date = Csv::readFile(__DIR__ .'/files/table.csv',true,',');

print_r($date);