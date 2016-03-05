<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>فرو رزرو بمیط</title>
</head>
<body>
	
<?php

include_once 'proccess.php';
include_once 'common/common.php';


if(isset($_GET['submit'])){
//echo "با موفقیت به دیتابیس وصل شد";


$mysqli->set_charset("utf8");



foreach ($_GET['faveColors'] as $_subcat)
    {
        $checksub[] = $_subcat;
    }   $finalsub = implode(',', $checksub);
 

$name = $city = $sex = $date = $email = $isMarried = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
  $name = test_input($_GET['name']);
  global $name;
  $city = test_input($_GET['city']);
  $sex = test_input($_GET['sex']);
  $date = test_input($_GET['date']);
  $email = test_input($_GET['email']);
  $color = test_input($finalsub);
  $isMarried = test_input($_GET['isMarried']);
  $message = test_input($_GET['message']);


}
$sql3 = "SELECT id FROM `example`.`test`;";

$result=$mysqli->query($sql3);


while($row=mysqli_fetch_assoc($result)){
  

$z=$row["id"];



}


$b = '<a href="show.php">ویرایش</a><br>';
$c = '<a href="success.php">حذف'.$z.'</a><br>';



$sql = "INSERT INTO `example`.`test` (`id`, `name`, `city`, `sex`, `date`, `email`, `faveColors`, `isMarried`, `message`,`operation1`,`operation2`) values (NULL, '".sanitize($name)."', '".sanitize($city)."', '".sanitize($sex)."', '".sanitize($date)."', '".sanitize($email)."', '".sanitize($color)."', '".sanitize($isMarried)."', '".sanitize($message)."', '".$b."', '".$c."');";



$sql=str_replace("&gt;","",$sql);
$sql=str_replace("/","",$sql);
$sql=str_replace("&lt;","",$sql);
$result=$mysqli->query($sql);


header("Location: table.php"); 

exit;
$mysqli->close();

}