<?php

//PART 1 

function decimalToBinary($n) {
    $binary = '';

    while ($n > 0) {
        $binary = ($n % 2) . $binary;
        $n = (int)($n / 2);
    }

    return $binary === '' ? '0' : $binary;
}

echo decimalToBinary(10);

echo '<br>';
echo '<br>';


function decimalToRoman($n) {
    if($n > 3999) {
        return 'The number is greater than 3999, it cannot be converted to Roman.';
    }

    $roman_numbers = [
                        1000 => 'M', 
                        900 => 'CM', 
                        500 => 'D', 
                        400 => 'CD',
                        100 => 'C', 
                        90 => 'XC', 
                        50 => 'L', 
                        40 => 'XL',
                        10 => 'X', 
                        9 => 'IX', 
                        5 => 'V', 
                        4 => 'IV', 
                        1 => 'I'
    ];

    $result = '';

    foreach ($roman_numbers as $value => $roman) {
        while ($n >= $value) {
            $result .= $roman;
            $n -= $value;
        }
    }

    return $result;
}

echo decimalToRoman(1987);

echo '<br>';
echo '<br>';

//PART 2

function binaryToDecimal($binary) {
    $decimal = 0;
    $length = strlen($binary);
    
    for ($i = 0; $i < $length; $i++) {
        $decimal += $binary[$i] * pow(2, $length - $i - 1);
    }

    return $decimal;
}

echo binaryToDecimal("1010");

echo '<br>';
echo '<br>';

function romanToDecimal($roman) {
        $roman_numbers = [
            'I' => 1, 
            'V' => 5, 
            'X' => 10, 
            'L' => 50,
            'C' => 100, 
            'D' => 500, 
            'M' => 1000
        ];

        $decimal = 0;

        for($i = 0; $i < strlen($roman); $i++) {
             $current = $roman_numbers[$roman[$i]];
             $next = ($i + 1 < strlen($roman)) ? $roman_numbers[$roman[$i + 1]] : 0;

         if ($current < $next) {
            $decimal -= $current;
        } else {
            $decimal += $current;
        }
        }
            return $decimal;

}

echo romanToDecimal("XIV");

echo '<br>';
echo '<br>';

//Challenge myself: Making one of the functions recursive. I choose the first one:

function decimalToBinaryRecursive($n) {
    if ($n == 0) {
        return '';
    }
    return decimalToBinaryRecursive((int)($n / 2)) . ($n % 2);
}

echo decimalToBinaryRecursive(10);

?>