<?php
include './db.php';
$query = mysqli_query($db, "SELECT * FROM `employee` WHERE 1");

?>
<?php include './menu.php' ?>
<h1>Список сотрудников</h1>
<ul>
    <?php foreach ($query as $item): ?>
       <li style="list-style-type: none">
           <p>Имя: <?= $item['name'] ?></p>
           <p>Фамилия: <?= $item['surname'] ?></p>
           <p>Должность: <?= $item['position'] ?></p>
           <p>Зарплата: <?= $item['salary'] ?></p>
       </li>
        <br>
    <?php endforeach; ?>
</ul>
