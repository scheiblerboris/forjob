<?php
include './db.php';
$query = mysqli_query($db, "SELECT * FROM `employee` WHERE 1");
?>
<?php include './menu.php' ?>
<h1>Список сотрудников</h1>
<?php foreach ($query as $item): ?>
        <p>Имя: <?= $item['name'] ?></p>
        <p>Фамилия: <?= $item['surname'] ?></p>
        <p>Должность: <?= $item['position'] ?></p>
        <p>Зарплата: <?= $item['salary'] ?></p>
    <br>
<?php endforeach; ?>
