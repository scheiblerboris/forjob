INSERT INTO `employee` (`id`, `name`, `surname`, `age`, `experience`, `position`, `salary`) VALUES (NULL, 'Георгий', 'Черданцев', NULL, NULL, 'тестировщик', '80000'), (NULL, 'Петр', 'Мамонов', NULL, NULL, 'дизайнер', '50000'), (NULL, 'Глеб', 'Панфилов', NULL, NULL, 'дизайнер', '100000'), (NULL, 'Василий', 'Коломейцев', NULL, NULL, 'программист', '180000'), (NULL, 'Григорий', 'Печкин', NULL, NULL, 'менеджер', '160000'), (NULL, 'Петр', 'Денисов', NULL, NULL, 'программист', '50000'), (NULL, 'Борис', 'Степочкин', NULL, NULL, 'менеджер', '100000'), (NULL, 'Мария', 'Курочкина', NULL, NULL, 'секретарь', '120000'), (NULL, 'Иван', 'Мамонов', NULL, NULL, 'охранник', '40000'), (NULL, 'Василиса', 'Замятина', NULL, NULL, 'рекрутер', '150000'), (NULL, 'Федор', 'Новиков', NULL, NULL, 'менеджер', '100000'), (NULL, 'Галина', 'Иванова', NULL, NULL, 'программист', '150000');
<?php
$sql = "INSERT INTO `employee` (`id`, `name`, `surname`, `age`, `experience`, `position`, `salary`) VALUES\n"

    . "(NULL, \'Георгий\', \'Черданцев\', NULL, NULL, \'тестировщик\', \'80000\'),\n"

    . "(NULL, \'Петр\', \'Мамонов\', NULL, NULL, \'дизайнер\', \'50000\'),\n"

    . "(NULL, \'Глеб\', \'Панфилов\', NULL, NULL, \'дизайнер\', \'100000\'),\n"

    . "(NULL, \'Василий\', \'Коломейцев\', NULL, NULL, \'программист\', \'180000\'),\n"

    . "(NULL, \'Григорий\', \'Печкин\', NULL, NULL, \'менеджер\', \'160000\'),\n"

    . "(NULL, \'Петр\', \'Денисов\', NULL, NULL, \'программист\', \'50000\'),\n"

    . "(NULL, \'Борис\', \'Степочкин\', NULL, NULL, \'менеджер\', \'100000\'),\n"

    . "(NULL, \'Мария\', \'Курочкина\', NULL, NULL, \'секретарь\', \'120000\'),\n"

    . "(NULL, \'Иван\', \'Мамонов\', NULL, NULL, \'охранник\', \'40000\'),\n"

    . "(NULL, \'Василиса\', \'Замятина\', NULL, NULL, \'рекрутер\', \'150000\'),\n"

    . "(NULL, \'Федор\', \'Новиков\', NULL, NULL, \'менеджер\', \'100000\'),\n"

    . "(NULL, \'Галина\', \'Иванова\', NULL, NULL, \'программист\', \'150000\');";
?>
