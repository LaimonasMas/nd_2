<h2>ND nr.1</h2>

<?php

$name = 'Johnny';
$surname = 'Depp';
if (strlen($name) > strlen($surname)) {
    echo $surname;
} else if (strlen($name) < strlen($surname)) {
    echo $name;
} else {
    echo 'vardas ir pavarde po lygiai simboliu';
}
?>

<h2>ND nr.2</h2>

<?php

$name2 = 'Matt';
$surname2 = 'Damon';
echo '<br>';
echo strtoupper($name2);
echo '<br>';
echo strtolower($surname2);
echo '<br>';
?>

<h2>ND nr.3</h2>

<?php

$name3 = 'Reese';
$surname3 = 'Witherspoon';
$initials = $name3[0] . $surname3[0];
echo $initials;
echo '<br>';
?>

<h2>ND nr.4</h2>

<?php

$name4 = 'Emma';
$surname4 = 'Watson';
$initialsOfLastLetters = substr($name4, -3) . substr($surname4, -3);
echo strtoupper($initialsOfLastLetters);
echo '<br>';
?>

<h2>ND nr.5</h2>

<?php

$string = 'An American in Paris';
echo str_ireplace("a", "*", $string);
echo '<br>';
?>

<h2>ND nr.6</h2>

<?php

$string = 'An American in Paris';
$lowercaseA = substr_count($string, 'a');
$uppercaseA = substr_count($string, 'A');
$totalNumberOfLetterA = $lowercaseA + $uppercaseA;
echo $totalNumberOfLetterA;
echo '<br>';
?>

<h2>ND nr.7</h2>

<?php

$string1 = 'An American in Paris';
$string2 = "Breakfast at Tiffany's";
$string3 = '2001: A Space Odyssey';
$string4 = "It's a Wonderful Life";
$vowels = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");
$noVowels1 = str_replace($vowels, "", $string1);
$noVowels2 = str_replace($vowels, "", $string2);
$noVowels3 = str_replace($vowels, "", $string3);
$noVowels4 = str_replace($vowels, "", $string4);
echo $noVowels1;
echo '<br>';
echo $noVowels2;
echo '<br>';
echo $noVowels3;
echo '<br>';
echo $noVowels4;
echo '<br>';
?>

<h2>ND nr.8</h2>

<?php

$string8 = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';
echo $string8;
echo '<br>';
$string8 = str_ireplace("Star Wars: Episode ", "", $string8);
$string8 = str_ireplace(" - A New Hope", "", $string8);
echo '<br>';
echo $string8;
echo '<br>';
?>

<h2>ND nr.9</h2>

<?php

$string9 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string91 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$newString = explode(' ', $string9);
$newString2 = explode(' ', $string91);
$count = 0;
for ($i = 0; $i < count($newString); $i++) {
    if (mb_strlen($newString[$i]) <= 5) {
        $count++;
    }
}
echo $count;
echo '<br>';
$count2 = 0;
for ($i = 0; $i < count($newString2); $i++) {
    if (mb_strlen($newString2[$i]) <= 5) {
        $count2++;
    }
}
echo $count2;
?>

<h2>ND nr.10</h2>

<?php

$lotyniskosRaides = 'qwertyuiopasdfghjklzxcvbnm';
$lotyniskosRaidesIlgis = strlen($lotyniskosRaides) - 1;
echo $lotyniskosRaides[rand(0, $lotyniskosRaidesIlgis)] . $lotyniskosRaides[rand(0, $lotyniskosRaidesIlgis)] . $lotyniskosRaides[rand(0, $lotyniskosRaidesIlgis)];;
?>

<h2>ND nr.11</h2>

<?php

$jointString = $string9 . ' ' . $string91;
$jointString11 = explode(' ', $jointString);
$jointString11LengthMinusOne = count($jointString11) - 1;
$array11 = array();
while (count($array11) < 10) {
    $word = $jointString11[rand(0, $jointString11LengthMinusOne)];
    if (!in_array($word, $array11)) {
        array_push($array11, $word);
    }    
}
foreach ($array11 as $value) {
    echo $value . ' ';
}
