<?php
include './db.php';
$query = mysqli_query($db, "SELECT * FROM `employee` WHERE 1");
if (!empty($_POST)) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $position = $_POST['position'];
    $salary = filter_input(INPUT_POST, 'salary', FILTER_VALIDATE_INT);
    if ($salary === false) $salary = 0;
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
    <input type="text" id="name" name="name" required>
    <label for="surname">Фамилия</label>
    <input type="text" id="surname" name="surname" required>
    <label for="position">Должность</label>
    <input type="text" id="position" name="position" required>
    <label for="salary">Зарплата</label>
    <input type="text" id="salary" name="salary" required>
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

