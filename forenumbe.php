<?php
// Check if a person is eligible for marriage in BD by gender...

$gender = "Female";  // Fixed typo in gender
$age = 18;

if ($gender == "Female") {
    if ($age >= 18) {  // Fixed variable case (Age -> age)
        echo "You are eligible for marriage";
    } else {
        echo "You are not eligible for marriage";  // Fixed missing semicolon
    }
} else {
    if ($age >= 21) {
        echo "You are eligible for marriage";
    } else {
        echo "You are not eligible for marriage";
    }
}
?>
