<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>فرم ثبت نام دانشگاه</title>
</head>
<body>
<?php

include_once 'proccess.php';
include_once 'common/common.php';


$mysqli->set_charset("utf8"); 


$sql3 = "SELECT id FROM `example`.`test`;";

$result=$mysqli->query($sql3);


while($row=mysqli_fetch_assoc($result)){
  

$z=$row["id"];

global $z;

}

$sql4 = "DELETE FROM `example`.`test` WHERE `test`.`id` = ".$z;



$result=$mysqli->query($sql4);

echo "با موفقیت حذف شد ";



