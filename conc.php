<?php
$host="localhost"; // اسم السيرفر
$username="root"; // مستخدم السيرفر
$password="12345678"; // كلمة مرور المستخدم
$db_name="web"; // اسم قاعدة البيانات//الاتصال بقاعدة البيانات
$conn=mysql_connect("$host", "$username", "$password")or die("لا يمكن الاتصال بقاعدة البيانات");
mysql_select_db("web")or die(mysql_error());
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
mysql_query("INSERT INTO `acc`(`id`, `username`, `email`, `password`) VALUES ('not nul','$username','$email','$password')")or die(mysql_error());
if(!$conn){
die("خطا في الاتصال بقاعدة البيانات". mysql_connect_error()."لايوجد خطا".mysq_connect_errno());
}
else{
echo  "تم الاتصال بنجاح";
}
header('location:login.php');
?>
