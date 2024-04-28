<?php
include './db.php';
$query = mysqli_query($db, "SELECT * FROM `employee` WHERE 1");
if (!empty($_POST)) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $position = $_POST['position'];

    $salary = filter_input(INPUT_POST, 'salary', FILTER_VALIDATE_INT);
    if ($salary === false) $salary = 0;
    $sql = "UPDATE `employee` SET `name` = '{$name}', `surname` = '{$surname}', `position` = '{$position}', `salary` = '{$salary}' WHERE `employee`.`id` = {$id};";
    $query = mysqli_query($db, $sql);
    header("Location: {$_SERVER['PHP_SELF']}");
    die();
}


?>
<?php include './menu.php' ?>
<h1>Список сотрудников</h1>
<ul>
    <?php foreach ($query as $item): ?>
        <li style="list-style-type: none">
            <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="text" hidden name="id" value="<?= $item['id'] ?>">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" value="<?= $item['name'] ?>">
                <label for="surname">Фамилия</label>
                <input type="text" id="surname" name="surname" value="<?= $item['surname'] ?>">
                <label for=" position">Должность</label>
                <input type="text" id="position" name="position" value="<?= $item['position'] ?>">
                <label for="salary">Зарплата</label>
                <input type="text" id="salary" name="salary" value=" <?= $item['salary'] ?>">
                <input type="submit" value="Изменить">
            </form>
        </li>
    <?php endforeach; ?>
</ul>



