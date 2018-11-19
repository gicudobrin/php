<?php
$name = 'Claudiu';
$string_one = "Learning to display \"Hello $name!\" to the screen.\n";
echo $string_one;

//Place your code below this comment
$firstName = "Rasmus";
$lastName = "Lerdorf";
$fullName = $firstName . " " . $lastName;
/*

1) Use the $fullName variable

2) Display the following string to the screen.

Rasmus Lerdorf was the original creator of PHP.

3) Use an escape character to add a newline to the end of the string.

*/
$fullName .= " was the original creator of PHP.\n";
$isReady = true;
var_dump($isReady);
$isReady = false;
var_dump($isReady);

if ($isReady) {
	echo "It is a perfect day!";
} elseif($isReady == false){
	echo "ana";
}
else {
	echo"It is a ugly day!";
}

echo "\n\n\n\n\n";
$studentOneName = 'Dave';
$studentOneGPA = 3.8;

$studentTwoName = 'Treasure';
$studentTwoGPA = 4.0;

//Place your code below this comment
if ($studentOneGPA === 4.0){
	echo "$studentOneName made the Honor Roll";
}elseif($studentOneGPA !== 4.0){
	echo "$studentOneName has a GPA of $studentOneGPA";
}
echo "\n\n\n\n\n";
if ($studentTwoGPA === 4.0){
	echo "$studentTwoName made the Honor Roll";
}elseif($studentTwoGPA !== 4.0){
	echo "$studentTwoName has a GPA of $studentTwoGPA";
}

?>

