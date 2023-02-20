<?php
// 1. function to sort an array of strings by their length, in ascending order

function sortByStringLength(array $strings)
{
    $array = array();

    foreach($strings as $string)
    {
        $array += [$string => strlen($string)];
    }
    asort($array);
    return array_keys($array);
}

$a = array("Volvo","Mercedes", "BMW", "Toyota");

print_r($a);
echo "sorted-";
print_r(sortByStringLength($a));
