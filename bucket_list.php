<?php
echo "Hoe veel activiteiten wil je toevoegen?" . PHP_EOL;
$number = readline(">");

if (is_numeric($number)){
}else {
    exit ($number . " " . "is geen getal");
}

$array = array();
unset($array[0]);


for($i=1; $i<=$number; $i++) { 
    echo "Wat wil je toevoegen aan jouw bucket list?" . PHP_EOL;
    $bucket = readline(">");
    array_push ($array, $bucket);
} 

print_r ($array);