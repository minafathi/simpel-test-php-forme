

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>فرم ثبت نام</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>

<div class="container" style="direction: rtl;font-family: tahoma;font-weight: normal;padding-top: 30px;">
<h1 style="text-align: center;padding-bottom: 20px;"> فرم ارسال اطلاعات دانشگاه</h1>




<form action="success2.php" method="get" charset="UTF-8" class="form-signin" />

 

    <label for="name" style="font-weight: normal;">نام :</label>
    <input type="text" name="name" id="name" placeholder="مریم اسدی" class="form-control"/><br><br>

    <label for="city" style="font-weight: normal;">نام شهر :</label>
    <input type="text" name="city" id="city" placeholder="آمل" class="form-control" /><br><br>

    <label style="font-weight: normal;">جنسیت :</label><br>
    <input type="radio" name="sex" checked="checked" value="0" checked="checked"/> زن 
    <input type="radio" name="sex" checked="checked" value="1"/> مرد<br><br>

    <label for="date" style="font-weight: normal;">تاریخ تولد :</label>
    <input type="date" name="date" id="date" placeholder="1394-02-01" class="form-control"/><br><br>

    <label for="email" style="font-weight: normal;">ایمیل :</label>
    <input type="email" name="email" id="email" placeholder="mina_fathi@yahoo.com" class="form-control"/>
<br><br>
    <label style="font-weight: normal;">رنگ مورد علاقه :</label><br>
    <input type="checkbox" name="faveColors[]" value="قرمز"/> قرمز<br>
    <input type="checkbox" name="faveColors[]" value="زرد"/> زرد<br>
    <input type="checkbox" name="faveColors[]" value="آبی"/> آبی<br>
    <input type="checkbox" name="faveColors[]" value="سبز"/> سبز<br><br>


    <label style="font-weight: normal;">وضعیت تاهل :</label><br>
    <input type="radio" name="isMarried" value="0"/> مجرد 
    <input type="radio" name="isMarried" value="1"/> متاهل<br><br>

    <label for="message" style="font-weight: normal;">نظرات :</label>
    <textarea name="message" id="msg" cols="30" rows="10" class="form-control"></textarea><br><br>
    

    <input type="submit" value="submit" name="submit" class="btn btn-lg btn-primary btn-block" style="margin-bottom: 20px;" />


</form>

</div> <!--container-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>