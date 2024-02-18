<?php
require_once("./header.php");

$id = $_GET['id'] ?? header("location:./");

$id = $conn->real_escape_string($id);

$sql = "SELECT * FROM `students` WHERE `id`='$id'";

$result = $conn->query($sql);

$result->num_rows == 0 ? header("location:./") : null;

if (isset($_POST['dst'])) {
    $result = $conn->query("DELETE FROM `students` WHERE `id`='$id'");
    if ($result) {
        echo "Student Deleted Successfully";
        echo "<script>setTimeout(()=> location.href='./', 3000)</script>";
    } else {
        echo "Student Not Deleted";
    }
}

?>
<form action="" method="post">
    <h2>Are you sure you want to delete this student</h2>
    <input type="submit" value="Yes" name="dst">
    <a href="./"><button type="button">NO</button></a>
</form>
<?php
require_once("./footer.php");
?>