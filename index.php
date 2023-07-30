<!-- bubble sort algo in php -->
<?php
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for($j = 0; $j < $n - $i - 1; $j++) {
            if (arr[$j] > $arr[$j + 1]) {
                //Swap the elements
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = temp;
            }
        }
    }
    return $arr;
}

//Usage:

$arr = [64, 34, 25, 12, 22, 11, 90];
$sortedArr = bubleSort($arr);
print_r($sortedArr);