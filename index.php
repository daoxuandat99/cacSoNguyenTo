<?php
function isPrimeNumber($num)
{
    if ($num < 2) {
        return false;
    }
    for ($index = 2; $index <= sqrt($num); $index++) {
        if ($num % $index == 0) {
            return false;
        }
    }
    return true;
}

echo 'số nguyên tố: <br>';
for ($index = 0; $index < 100; $index++) {
    if (isPrimeNumber($index)) {
        echo($index . '<br>');
    }
}