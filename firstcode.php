<?php
    // if statement
    $age = 22;
    if ($age <= 18) {
        echo "You are eligible to vote";
    } elseif($age <= 21){
        echo "You are a teenager";
    } elseif ($age > 30){
        echo "You are a Yong";
    } else{
        echo "Your are a Old";
    }
    


echo "<br>";

// switch statement

$age = 30;
switch ($age) {
    case 18:
        echo "You are eligible to vote";
        break;
    case 21:
        echo "You are a teenager";
        break;
    case 30:
        echo "You are a Yong";
        break;
    default:
        echo "Your are a Old";
        break;
}
?>