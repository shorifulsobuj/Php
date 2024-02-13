<?php
require_once("./header.php");
$sql = "SELECT * FROM 'users'";
$result = $conn->query($sql);
if($result->num_rows == 0) {
    echo "No users found";
}else{
?>
 <table>
    <tr>
        <th>Sn</th>
        <th>Name</th>
        <th>City</th>
        <th>Actions</th>
    </tr>
 
 <?php
 $sn = 1;
 while ($row = $result->fetch_object()) {
 ?>
    <tr>
        <td><?= $sn++ ?></td>
        <td><?= $row->name ?></td>
        <td><?= $row->city ?></td>
        <td>
            <a href="./editStudent.php"?<?= $row->id ?> ><button>Edit</button></a>
            <a href="./deleteStudent.php"<?= $row->id ?> ><button>Delete</button></a>
        </td>
    </tr>
    <?php }?>
    </table>
 <?php 
}
 ?>


<?php
require_once("./footer.php");
?>