<?php
// 1. Electric bill calculation (For first 50 units – 3.50 tk/unit For next 100 units – 4.00 tk/unit For next 100 units – 5.20 tk/unit For units above 250 – 6.50 tk/unit)

$eBill = 20;
 if($eBill <= 50){
    echo 3.50 * $eBill;
 } elseif($eBill <= 100){
    echo (3.50 * 50) + (4 * ($eBill -50));
 } elseif($eBill <=200){
    echo (3.50 * 50) + (4 * 50) + (5.20 * ($eBill - 100));
 } elseif($eBill <=250){
    echo (3.50 * 50) + (4 * 50) + (5.20 * 100) + (6.50 * ($eBill - 200));
 }else {
    echo "private";
 }

 echo '<br>';

 //ii. A PHP calculator using switch case...

$num1 = 30;
$num2 = 10;
$operator = '+';

switch ($operator) {
    case '+':
        echo $num1 + $num2;
        break;
    case '-' :
        echo $num1 - $num2;
        break;
    case '*':
        echo $num1 * $num2;
    case '/':
        echo $num1 /$num2;
        break;
    default :
        echo "Invalid operator"; 
}

echo '<br>';

//iii. Check if a person is eligible to vote by age....

$voterAge = 18;

if($voterAge >= 18){
    echo "You are eligible voter!";
} else {
    echo "Sorry, You are not eligible voter";
}

echo '<br>';

//iv. Check if a person is eligible to marriage in BD by gender... 

$gender = "Female";  
$age = 18;

if ($gender == "Female") {
    if ($age >= 18) {  
        echo "You are eligible for marriage";
    } else {
        echo "You are not eligible for marriage";
    }
} else {
    if ($age >= 21) {
        echo "You are eligible for marriage";
    } else {
        echo "You are not eligible for marriage";
    }
}

echo '<br>';

//v. Check if number is positive or negetive... 

$num = 0;
if ($num > 0) {
    echo "Positive";
} elseif ($num < 0) {
    echo "Negative";
} else {
    echo "Zero";
}

echo '<br>';

// vi. Check if number is odd or even...

$myNumber = 56;

if($myNumber % 2 == 0){
    echo "Even";
} else {
    echo "Odd";
}

echo '<br>';

// vii. Check if data is interger or sting...

$data = 5;

if (is_int($data)) {
    echo "Interger";
} elseif (is_string($data)) {
    echo "String";
} else {
    echo "Invalid data";
}

echo '<br>';

?>