<?php

// proměnné
$name = 'James';
$age = 30;
$height = 1.8; // výška v metrech
$handsome = false;

// Podmínky
// --------
if ($age < 35 && $height > 1.7) {
    $handsome = true;
}

if ($age > 18) {
    echo 'Plnolety';
} else {
    echo 'Nezletily';
}
echo PHP_EOL;

if ($age <= 12) {
    echo 'Dite';
} else if ($age > 12 && $age < 20) {
    echo 'Teenager';
} else {
    echo 'Dospely';
}
echo PHP_EOL;


// Cykly
// -----
$fingers = ['palec', 'ukazovacek', 'prostrednicek', 'prstenicek', 'malicek'];
foreach($fingers as $finger) {
    echo $finger . PHP_EOL;
}

$i = 1;
while ($i <= 12) {
    echo $i . ' ';
    $i = $i + 1;
}
echo PHP_EOL;

// 1 2 3 4 5 6 7 8 9 10 11 12
for ($i = 1; $i <= 12; $i++) {
    echo $i . ' ';
}
echo PHP_EOL;