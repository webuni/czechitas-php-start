<?php
// Vestavěné funkce
// ----------------
$date = date('d. m. Y');
//echo $date;

$type = gettype($date);
//echo $type;

$length = strlen('James');
// echo $length


// Vlastní funkce
// --------------

function add($a, $b)
{
    return $a + $b;
}
//echo add(1, 2);

function introduceYourself($firstName, $lastName)
{
    return $lastName . ', ' . $firstName . ' ' . $lastName;
}
//echo introduceYourself('James', 'Bond');

function greet($name)
{
    $currentHour = date('H');
    if ($currentHour > 4 && $currentHour <= 12) {
        $greet = 'Good morning';
    } else if ($currentHour > 12 && $currentHour < 22) {
        $greet = 'Good afternoon';
    } else {
        $greet = 'Good night';
    }
    return $greet . ' ' . $name;
}
//echo greet('James');