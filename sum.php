<?php

$x1 = '278378473844448738473847384758347483743878';
$x2 = '237849234345628346436283472346234623746238423'

$maxLength = strlen($x1) > strlen($x2) ? strlen($x1) : strlen($x2);
$x1rev = strrev($x1);
$x2rev = strrev($x2);
$resultRev = '';

$decimalPlus = 0;
$i = 0;
for ($i; $i < $maxLength; $i++) {
    if ($x1rev[$i] + $x2rev[$i] + $decimalPlus > 9) {
        $resultRev .= $x1rev[$i] + $x2rev[$i] - 10 + $decimalPlus;
        $decimalPlus = 1;
    } else {
        $resultRev .= $x1rev[$i] + $x2rev[$i] + $decimalPlus;
        $decimalPlus = 0;
    }
}
