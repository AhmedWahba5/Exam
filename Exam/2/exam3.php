<?php

echo "Multiplication Table up to 5x5:\n\n";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo $i * $j . "\t";
    }
    echo "\n";
}

?>
