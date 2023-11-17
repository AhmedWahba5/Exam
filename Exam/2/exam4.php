<?php

function removeDuplicates($sortedList) {
    $uniqueList = array();

    foreach ($sortedList as $value) {
        // Check if the current value is different from the previous one
        if (empty($uniqueList) || $value != end($uniqueList)) {
            $uniqueList[] = $value;
        }
    }

    return $uniqueList;
}

// Example usage:
$sortedList = array(1, 2, 2, 3, 4, 4, 4, 5, 5, 6);
$uniqueList = removeDuplicates($sortedList);

echo "Original Sorted List: " . implode(", ", $sortedList) . "\n";
echo "List after removing duplicates: " . implode(", ", $uniqueList) . "\n";

?>
