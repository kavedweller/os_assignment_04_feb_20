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

// 4. function to check if a string contains only letters and whitespace


// print_r (explode(" ",$text));

function checkString($text)
{
    $words = explode(" ",$text);
    $flag = TRUE;
    foreach($words as $word)
    {
        $flag = $flag && ctype_alpha($word) ;
    }
    return $flag;
}

$text1 = "foo bar";
$text2 = "foo, bar";

echo $text1." passed the test: ".(checkString($text1) ? "yes":"no")."\n";
echo $text2." passed the test: ".(checkString($text2) ? "yes":"no")."\n";

// 5. function to find the second largest number in an array of numbers

function secondLargest($numbers)
{
    rsort($numbers);
    return $numbers[1]; //second element of reverse-sorted array
}


$numbers = array(4, 6, 2, 22, 11);
echo secondLargest($numbers);
