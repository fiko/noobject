<?php

require_once('autoload.php');

use Borizqy\NoObject\NoObject;

$array_example = [
    "first" => "The first array value."
    "last" => "The last array value."
];

$data = new NoObject($array_example);

print_r($data);