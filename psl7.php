<?php
function isPrime($number) {

    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Not a prime number
        }
    }

    return true; 
}

// Example usage
$testNumber = 17;

if (isPrime($testNumber)) {
    echo "$testNumber is a prime number."."\n";
} else {
    echo "$testNumber is not a prime number."."\n";
}
echo " $  Sahil Bithle "
?>
