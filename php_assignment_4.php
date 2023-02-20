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

// 2. concatenate two strings

function concat($str1, $str2)
{
    return $str1.$str2;
}

$strA = "foo";
$strB = "bar";

echo "\nconcatenate ".$strA." and ".$strB.": ";
echo concat($strA, $strB);
echo "\r\n\n";

// 3. function to remove the first and last element from an array

function stripTerminalElements($array)
{
    return array_slice(array_slice($array,1),0,-1);
}

$list = array("e0", "e1","e2", "e3", "e4", "e5", "e6");  

print_r(stripTerminalElements($list));
echo "\r\n\n";