<?php
declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php";

use App\ReadCSV;

$csvReader = new ReadCSV();
$data = $csvReader->read(__DIR__ . '/files/csv/test.csv', ';', 0, true);

var_dump($data);