<?php
$db = mysqli_connect('localhost', 'forjob', 'forjob', 'forjob');

$query = mysqli_query($db, "SELECT * FROM `employee` WHERE 1");

var_dump($query);