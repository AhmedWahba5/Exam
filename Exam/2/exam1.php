<?php

function fibonacci($n) {
    $fibonacciSeries = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }

    return $fibonacciSeries;
}

// Change the value of $numTerms to the desired number of Fibonacci terms
$numTerms = 10;
$fibonacciSeries = fibonacci($numTerms);

echo "Fibonacci Series for the first $numTerms terms: " . implode(", ", $fibonacciSeries);

?>
