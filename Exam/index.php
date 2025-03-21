<?php

// $names = ["John Smith", "John Doe", "EJ", "Alex", "Yvonne",];
$names = ["AU", "SY", "Jonh Michael", "Hubert Blaine Wolfeschlegelsteinhausenbergerdorff Sr", 'IT'];

$letters = array(
    1 => array('A','J','S'),
    2 => array('B','K','T'),
    3 => array('C','L','U'),
    4 => array('D','M','V'),
    5 => array('E','N','W'),
    6 => array('F','O','X'),
    7 => array('G','P','Y'),
    8 => array('H','Q','Z'),
    9 => array('I','R')
);

$personalityChart = array(
    1 => 'Pioneering, Leading, Independent, Attaining, Individualistic',
    2 => 'Cooperation, Adaptability, Consideration, Partnering, Mediating',
    3 => 'Expression, Verbalization, Socialization, Arts, Joy of Living',
    4 => 'Values of Foundation, Service, Struggle Against Limits, Steady Growth',
    5 => 'Expansiveness, Visionary, Adventure, Constructive Use of Freedom',
    6 => 'Responsibility, Protection, Nurturing, Balance, Sympathy',
    7 => 'Analysis, Understanding, Awareness, Studious, Meditating',
    8 => 'Practical Endeavors, Status-Oriented, Power-Seeking, High-Material Goals',
    9 => 'Humanitarian, Giving, Selflessness, Obligation, Creative Expression',
    11 => 'Higher Spiritual Plane, Intuitive, Illumination, Idealist, A Dreamer',
    22 => 'Master Builder, Large Endeavors, Powerful Force, Leadership',
    33 => 'Master Teacher'
);

$destinyNumber = array(
    1 => 'Primal Force,',
    2 => 'All-Knowing',
    3 => 'Creative Child',
    4 => 'Salt of the Earth',
    5 => 'Dynamic Force',
    6 => 'The Gatekeeper',
    7 => 'The Seeker',
    8 => 'Balance and Power',
    9 => 'The Caretaker',
    11 => 'The Intuitive',
    22 => 'Master Builder',
    33 => 'Master Teacher'
);

function calculate($name, $letters) {
    $sum = 0;
    $name = strtoupper(str_replace(' ', '', $name));  
    foreach (str_split($name) as $letter) {
        foreach ($letters as $key => $value) {
            if (in_array($letter, $value)) {
                $sum += $key; 
            }
        }
    }
    return $sum;  
}

function reduceToSingleDigit($number) {
    if (in_array($number, [11, 22, 33])) {
        return $number;
    }
    
    while ($number >= 10) {
        $number = array_sum(str_split($number));  
    }
    return $number;
}

function soulAndPersonality($name, $letters) {
    $vowels = ['A', 'E', 'I', 'O', 'U'];  
    $sumVowels = 0;
    $sumConsonants = 0;

    $name = strtoupper(str_replace(' ', '', $name));  

    foreach (str_split($name) as $letter) {
        foreach ($letters as $key => $value) {
            if (in_array($letter, $value)) {
                if (in_array($letter, $vowels)) {
                    $sumVowels += $key;  
                } else {
                    $sumConsonants += $key;  
                }
            }
        }
    }

    $soulNumber = reduceToSingleDigit($sumVowels);
    $personalityNumber = reduceToSingleDigit($sumConsonants);

    

    return [$soulNumber, $personalityNumber];
}
function destinyNumber($sum) {
    return reduceToSingleDigit($sum);
}

foreach ($names as $name) {
    $numerology = calculate($name, $letters);
    $reducedNumerology = reduceToSingleDigit($numerology);
    list($soulNumber, $personalityNumber) = soulAndPersonality($name, $letters);

    $destiny = destinyNumber($numerology);
    
    echo "<h3>HI $name your name number in Numerology is</h3>";
    
    echo "<b>Soul Number is: </b>$soulNumber <br>";

    echo "<b>Personality Number is: </b>$personalityNumber <br>";
    if ($personalityNumber != 0) {
        echo $personalityChart[$personalityNumber] . "<br>";
    } 

    echo "<b>Destiny Number is: </b>$destiny - " . $destinyNumber[$destiny] . "<br><br>";
}

?>
