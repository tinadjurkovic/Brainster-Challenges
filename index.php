<?php

function isRoman($number) : bool {
    $roman = ['I', 'V', 'X', 'L', 'C', 'D', 'M'];
    $number = strtoupper(trim($number));

    for($i = 0; $i < strlen($number); $i++) {
        if(!in_array($number[$i], $roman)) {
            return false;
        }
    }
    return true;
}

function isBinary($number) : bool {
    for($i = 0; $i < strlen($number); $i++) {
        if($number[$i] !== '0' && $number[$i] !== '1') {
            return false;
        }
    }
    return true;
}

function isDecimal($number) : bool {
    $first = $number[0];
    $isSigned = $first === '+' || $first === '-';

    $num = $isSigned ? substr($number, 1) : $number;

    if($isSigned && strlen($num) > 1 && $num[0] === '0') {
        return false;
    }

    for ($i = 0; $i < strlen($num); $i++) {
        if ($num[$i] < '0' || $num[$i] > '9') {
            return false;
        }
    }

    return true;
}

function numberType(string $number) : string {
    if (isRoman($number)) {
        return "a Roman number.";
    } elseif (isBinary($number)) {
        return "a binary number.";
    } elseif (isDecimal($number)) {
        return "a decimal number.";
    } else {
        return "an invalid element.";
    }
}

$numbers = ["+10", "0101", "IV", "+0123", "545", "-3135", "1010", "-0110", "MCMXC", "Tina"];

foreach ($numbers as $n) {
    echo "$n is " . numberType($n) . "<br><br>";
}


//I decided to have one function per number type to achieve cleaner code and solution.
