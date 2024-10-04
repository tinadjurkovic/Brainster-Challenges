<?php


//REQUIREMENT 1 

$name = 'Konstantina';
$br = '<br>';

if($name == 'Kathrin') {
    echo "Hello $name.";
    echo $br;
} else {
    echo "Nice name.";
    echo $br;
}

$rating = 7;

if ($rating >= 1 && $rating <= 10) {
            echo "Thank you for rating.";
            echo $br;
        } else {
        echo "Invalid rating, only numbers between 1 and 10.";
        echo $br;
        }

    echo $br;
    echo $br;


//REQUIREMENT 2

$currentHour = date("H"); 

echo "Current hour is $currentHour.";
echo $br;


if($currentHour < 12 ) {
    echo "Good morning Kathrin.";
        echo $br;
} else if($currentHour > 12 AND $currentHour < 19) {
    echo "Good afternoon Kathrin.";
        echo $br;
}else {
    echo "Good evening Kathrin.";
        echo $br;
}

$rated = true;

if (is_int($rating)) {
    if ($rating >= 1 && $rating <= 10) {
        if ($rated === true) {
            echo "You already voted.";
            echo $br;
        } else {
            echo "Thank you for rating.";
            echo $br;
        }
    } else {
        echo "Invalid rating, only numbers between 1 and 10.";
        echo $br;
    }
} else {
    echo "Invalid input, rating must be an integer.";
    echo $br;
}

    echo $br;
    echo $br;


//REQUIREMENT 3

$voters = [
    'Marija' => [false, 5],
    'Nikola' => [true, 8],
    'Angela' => [false, 90],
    'Tina' => [true, 5],
    'Carrie' => [false, 40],
    'Samantha' => [false, 7],
    'Charlotte' => [true, 1],
    'Miranda' => [false, 9],
    'Marcus' => [true, 95],
    'Ivan' => [false, 3.3]
];

foreach ($voters as $name => $voted) {
    $rated = $voted[0];
    $rating = $voted[1];

    if ($currentHour < 12) {
        $message = "Good morning";
    } elseif ($currentHour >= 12 && $currentHour < 19) {
        $message = "Good afternoon";
    } else {
        $message = "Good evening";
    }

    echo "$message $name, ";

    if (is_int($rating) && $rating >= 1 && $rating <= 10) {
        if ($rated) {
            echo "You already voted with $rating.";
        } else {
            echo "Thanks for voting with $rating.";
        }
    } else {
        echo "Invalid rating, only numbers between 1 and 10.";
    }

    echo "<br>";
}

?>