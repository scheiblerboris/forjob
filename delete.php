<?php
include './db.php';
$query = mysqli_query($db, "DELETE FROM `employee` WHERE id = 1");
echo 'deleted';
?>
<?php include './menu.php' ?>
<!--<h1>Уволить сотрудника</h1>-->
