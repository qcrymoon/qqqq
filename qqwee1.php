<?php
$numbers = [1, 23, 44, 88, 13, 11, 7, 8];

foreach ($numbers as $number) {
    if ($number % 2 === 0) {
        echo $number . ' ';
    }
}
?>
