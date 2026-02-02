<?php
//01. Hello Strings
//Create variables for $name and $city. Use concatenation to print a sentence.

$name = "Alice";
$city = "Paris";

echo $name . " lives in " . $city . "." . "<br>";


//02. Basic Math Operations
//Declare $x=10, $y=5. Print result of addition, subtraction, multiplication, division.

$x = 10;
$y = 5;

echo "Addition: " . ($x + $y) . "<br>";
echo "Subtraction: " . ($x - $y) . "<br>";
echo "Multiplication: " . ($x * $y) . "<br>";
echo "Division: " . ($x / $y) . "<br>";

//03. Casting
//Start with string '25.50'. Cast to float, then to int. Print types using gettype().

$string = '25.50';
$float = (float)$string;
$int = (int)$float;

echo gettype($float) . "(" . $float . "), " . gettype($int) . "(" . $int . ")" . "<br>";



//04. Truthiness
//Create $isOnline = true. Use a ternary operator to print status.

$isOnline = true;

echo $isOnline ? "User is Online" . "<br>": "User is Offline" . "<br>";


//05. Array Init
//Create an indexed array of 3 fruits. Print the second item.

$fruits = ["Apple", "Banana", "Pear"];
echo $fruits[1] . "<br>";


//06. Sentence Builder
//Use the assignment operator .= to append 3 words to a variable $sentence.

$sentence = "";
$sentence .= "PHP ";
$sentence .= "is ";
$sentence .= "fun";

echo $sentence . "<br>";


//07. Strict Check
//Compare integer 5 and string '5' using both == and ===. Print results.

$intValue = 5;
$stringValue = '5';

$looseComparison = $intValue == $stringValue ? "Equal (True)" : "Not Equal (False)";
$strictComparison = $intValue === $stringValue ? "Identical (True)" : "Not Identical (False)";

echo $looseComparison . ", " . $strictComparison . "<br>";


//08. Logic Gate
//Check if $age > 18 AND $hasTicket are both true. Print 'Enter' or 'Deny'.

$age = 20; // Example age
$hasTicket = true; // Example ticket status

echo ($age > 18 && $hasTicket) ? "Enter" : "Deny";
?>
