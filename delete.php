<?php
include './db.php';
$query = mysqli_query($db, "SELECT * FROM `employee` WHERE 1");
if (!empty($_POST)) {
    $sql = "DELETE FROM `employee` WHERE id = {$_POST['id']}";
    $query = mysqli_query($db, $sql);
    header("Location: ?");
    die();
}



?>
<?php include './menu.php' ?>

<form action="delete.php" method="post" enctype="multipart/form-data">
    <h1>Список сотрудников</h1>
    <?php foreach ($query as $item): ?>
        <input type="text" hidden name="id" value="<?= $item['id'] ?>">
        <p>Имя: <?= $item['name'] ?></p>
        <p>Фамилия: <?= $item['surname'] ?></p>
        <p>Должность: <?= $item['position'] ?></p>
        <p>Зарплата: <?= $item['salary'] ?></p>
        <br>
<!--        <input type="submit" value="уволить">-->
    <button>Уволить</button>
    <?php endforeach; ?>
</form>
