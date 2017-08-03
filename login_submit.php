<?php
mysql_connect('localhost', 'root', '12345678') or die("Couldn't select database.");
mysql_select_db("web") or die("Couldn't select database.");

$username = $_POST['username'];
$password = $_POST['password'];
If (!$username||!password) {
	echo "يرجى ملى حقل اسم المستخدم";
}
	escapeshellcmd($username);//تتخلص من أي أوامر للغة sql من الممكن من المستخدم إن يكتبها في حقل ما 
escapeshellcmd($password);
$sql = "SELECT 'username','Password' FROM acc WHERE Username = '$username' AND Password = '$password' ";
$result = mysql_query($sql) or die(mysql_error());
$numrows = mysql_num_rows($result);
if($numrows > 0)
   {
    echo 'Your in';
	header ("Location: mo.php");
   }
else
   {
    echo '<center><h2><font color="red">Invalid Username Or Password</font></h2></center><br>';
	header ("Location: login.php");
   }
   
   
   ?>
   