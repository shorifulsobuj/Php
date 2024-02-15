<?php 

$conn = mysqli_connect("localhost", "root", "", "mt shop");

if(!$conn) {
    die('connection failed: '. mysqli_connect_error());
}

?>