<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>فرم ثبت نام دانشگاه</title>
</head>
<body>

<?php
include_once 'success2.php';
include_once 'common/common.php';

$sql3 = "SELECT * FROM `example`.`test`;";

$result=$mysqli->query($sql3);
printResultsTable($result);
