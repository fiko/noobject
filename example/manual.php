<?php

// The difference is only here
require_once(__DIR__ . "/../autoload.php");

// using No Object class
use Borizqy\NoObject\NoObject;

// example of an array that will be load as an no object
$array_example = [
    "first" => "The first array value.",
    "last"  => "The last array value."
];

// setting up new No Object
$data = new NoObject($array_example);

// print all object properties
print_r($data);

// Example of calling undefined property
echo $data->wrong;

// Example of calling defined property
echo $data->first;