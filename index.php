<h2>ND nr.1</h2>

<?php

$name = 'Johnny';
$surname = 'Depp';
if (strlen($name) > strlen($surname)){
echo $name;
} else {
echo $surname;
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
$initials = $name3[0].$surname3[0];
echo $initials;
echo '<br>';
?>

<h2>ND nr.4</h2>

<?php

$name4 = 'Emma';
$surname4 = 'Watson';
$name4Length = strlen($name4);
$surname4Length = strlen($surname4);
$initialsOfLastLetters = $name4[strlen($name4) - 1] . $surname4[strlen($surname4) - 1];
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

$string8 = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $string8;
echo '<br>';


















