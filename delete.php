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
    <ul>
        <?php foreach ($query as $item): ?>
            <li style="list-style-type: none">
                <input type="text" hidden name="id" value="<?= $item['id'] ?>">
                <p>Имя: <?= $item['name'] ?></p>
                <p>Фамилия: <?= $item['surname'] ?></p>
                <p>Должность: <?= $item['position'] ?></p>
                <p>Зарплата: <?= $item['salary'] ?></p>
                <button>Уволить</button>
            </li>
            <br>
        <?php endforeach; ?>
    </ul>
</form>
