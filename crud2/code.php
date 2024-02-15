<?php
session_start();
require "dbcon.php";


if (isset($_POST['add_student'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    $query = "INSERT INTO students (name, email, phone, course)
    VALUES('$name', '$email', '$phone', '$course')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['message'] = "Student Added Successfully";
        header("location: studentCreate.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Added";
        header("location: studentCreate.php");
        exit(0);
    }
}

?>