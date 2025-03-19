<?php

function fizzBuzzPrime($n) {
    $resutlt = [];

    for ($i = 1; $i <= $n; $i++) {
        $message = '';

        if ($i % 3 == 0 ) {
            $message = 'Fizz';
        }
        if ($i % 5 == 0 ) {
            $message = 'Buzz';
        }
        if ($i % 3 == 0 && $i % 5 == 0 ) {
            $message = 'FizzBuzz';
        }
        if (empty($message) && esPrimo($i)) {
            $message = 'Prime';
        }
        
        $resutlt[] = empty($message) ? $i : $message; 
    }

    return $resutlt;
}

function esPrimo($num) {
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$n = 60; 
$resutlt = fizzBuzzPrime($n);
echo "<pre>";
print_r($resutlt);
echo "</pre>";

?>