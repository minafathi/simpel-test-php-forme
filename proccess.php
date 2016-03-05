<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>فرم ثبت نام دانشگاه</title>
</head>
<body>
<a href="test.php">افزودن</a><br><br>
<a href="table.php">نمایش جدول ها</a><br><br>
<?php

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



     


include_once 'common/common.php';
require_once 'config.php';

$mysqli = new mysqli($dbHost, $dbUser, $dbPass);
if(!$mysqli->select_db($dbName)){
    echo "<span style='color: red;font-weight: bold'>Problem Selecting Database '$dbName'</span>";
    exit(0);
}

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$mysqli->set_charset("utf8");




 ?>