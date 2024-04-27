<?php
include './db.php';
$query = mysqli_query($db, "SELECT * FROM `employee` WHERE 1");
if (!empty($_POST)) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $sql = "INSERT INTO `employee` ( `name`, `surname`, `position`, `salary`) VALUES  ('{$name}', '{$surname}', '{$position}', {$salary})";
    $query = mysqli_query($db, $sql);
    header("Location: ?");
    die();
}


?>
<?php include './menu.php' ?>
<h1>Список сотрудников</h1>

<form action="add.php" method="post" enctype="multipart/form-data">
    <label for="name">Имя</label>
    <input type="text" id="name" name="name">
    <label for="surname">Фамилия</label>
    <input type="text" id="surname" name="surname">
    <label for="position">Должность</label>
    <input type="text" id="position" name="position">
    <label for="salary">Зарплата</label>
    <input type="text" id="salary" name="salary">
    <input type="submit" value="Нанять">
</form>

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

