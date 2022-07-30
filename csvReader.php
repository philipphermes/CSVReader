<?php
declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php";

use App\ReadCSV;

$data = ReadCSV::read(__DIR__ . '/files/test.csv', ';', 0, true);

var_dump($data);