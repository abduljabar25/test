<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>admin</title>

    <!-- Bootstrap -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<?php
include('config.php');// كود التفعيل الذي سيتم استقباله من البريد الالكتروني   
$passkey=$_GET['passkey'];
$tbl_name1="temp_members_db";// احضار المعلومات من قاعدة البيانات في حال وجود كود التفعيل
$sql1="SELECT * FROM $tbl_name1 WHERE confirm_code ='$passkey'";$result1=mysql_query($sql1);// في حال توفر المعلوماتif($result1){// ايجاد عدد الصفوف التي تحتوي على نفس كود التفعيل
$count=mysql_num_rows($result1);// في حالة ايجاد البيانات في القاعدة وعدد الصفوف صحيح مساويا للعدد 1، اي بمعنى لا يوجد بريد الكتروني اخر يستخدم نفس الكود
if($count==1){$rows=mysql_fetch_array($result1);
$name=$rows['name'];$email=$rows['email'];$password=$rows['password'];$repassword=$rows['repassword']; $tbl_name2="registered_members";// نقل البيانات الى جدول الحسابات المفعلة
$sql2="INSERT INTO $tbl_name2(name, email, password, repassword)VALUES('$name', '$email', '$password', '$repassword')";
$result2=mysql_query($sql2);// اذا لم يتم ايجاد كود التفعيل في قاعدة البيانات سنظهر رسالة للمستخدم بعدم وجودهelse {echo "كود تفعيل خاطئ";}// في حالة تم نقل البيانات من الجدول الافتراضي الى جدول الحسابات المفعلة سنظهر رسالة للمستخدم بنجاح العملية وانه بامكانه الدخول لحسابهif($result2){echo "لقد تم تفعيل حسابك يمكنك تسجيل الدخول الى حسابك الان";// حذف كود التفعيل من قاعدة البيانات المؤقته بعد تفعيل الحساب
$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
$result3=mysql_query($sql3);

 $;  ?>