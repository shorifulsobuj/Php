<?php
require_once("./header.php");
if(isset($_POST['ast'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];

    $name = $conn->real_escape_string($name);
    $city = $conn->real_escape_string($city);

    $sql = "INSERT INTO students (name, city) VALUES ('$name', '$city')";
    $result = $conn->query($sql);

    if($result) {
        echo "Student added successfully";
        echo "<script>setTimeout(()=> location.href='./', 2000)</script>";
    } else {
        echo "Student not A
        dded";
    }

}
?>

<form action="" method="post">
    <input type="text" placeholder="Student Name" name="name" required minlength="3">
    <br><br>
    <input type="text" placeholder="Student City" name="city" required>
    <br><br>
    <input type="submit" value="Add Student" name="ast">
</form>

<?php
require_once("./footer.php");
?>
