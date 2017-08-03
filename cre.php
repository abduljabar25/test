
 <!DOCTYPE html>
<html dir="rtl">
    <head>
  <meta charset='utf-8'>
  <title>login form</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
  <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      * {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  background: #333;
  font: 100%/1 'Helvetica Neue', Arial, sans-serif;
}

.login {
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -10rem 0 0 -10rem;
  width: 20rem;
  height: 20rem;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  overflow: hidden;
}
.login:hover > .login-header, .login.focused > .login-header {
  width: 2rem;
}
.login:hover > .login-header > .text, .login.focused > .login-header > .text {
  font-size: 1rem;
  transform: rotate(-90deg);
}
.login.loading > .login-header {
  width: 20rem;
}
.login.loading > .login-header > .text {
  display: none;
}
.login.loading > .login-header > .loader {
  display: block;
}

.login-header {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 1;
  width: 20rem;
  height: 20rem;
  background: orange;
  transition: width 0.5s ease-in-out;
}
.login-header > .text {
  display: block;
  width: 100%;
  height: 100%;
  font-size: 5rem;
  text-align: center;
  line-height: 20rem;
  color: #fff;
  transition: all 0.5s ease-in-out;
}
.login-header > .loader {
  display: none;
  position: absolute;
  left: 5rem;
  top: 5rem;
  width: 10rem;
  height: 10rem;
  border: 2px solid #fff;
  border-radius: 50%;
  animation: loading 2s linear infinite;
}
.login-header > .loader:after {
  content: '';
  position: absolute;
  left: 4.5rem;
  top: -0.5rem;
  width: 1rem;
  height: 1rem;
  background: #fff;
  border-radius: 50%;
  border-right: 2px solid orange;
}
.login-header > .loader:before {
  content: '';
  position: absolute;
  left: 4rem;
  top: -0.5rem;
  width: 0;
  height: 0;
  border-right: 1rem solid #fff;
  border-top: 0.5rem solid transparent;
  border-bottom: 0.5rem solid transparent;
}

@keyframes loading {
  50% {
    opacity: 0.5;
  }
  100% {
    transform: rotate(360deg);
  }
}
.login-form {
  margin: 0 0 0 2rem;
  padding: 0.5rem;
}

.login-input {
  display: block;
  width: 100%;
  font-size: 2rem;
  padding: 0.5rem 1rem;
  box-shadow: none;
  border-color: #ccc;
  border-width: 0 0 2px 0;
}
.login-input + .login-input {
  margin: 10px 0 0;
}
.login-input:focus {
  outline: none;
  border-bottom-color: orange;
}

.login-btn {
  position: absolute;
  right: 1rem;
  bottom: 1rem;
  width: 5rem;
  height: 5rem;
  border: none;
  background: orange;
  border-radius: 50%;
  font-size: 0;
  border: 0.6rem solid transparent;
  transition: all 0.3s ease-in-out;
}
.login-btn:after {
  content: '';
  position: absolute;
  left: 1rem;
  top: 0.8rem;
  width: 0;
  height: 0;
  border-left: 2.4rem solid #fff;
  border-top: 1.2rem solid transparent;
  border-bottom: 1.2rem solid transparent;
  transition: border 0.3s ease-in-out 0s;
}
.login-btn:hover, .login-btn:focus, .login-btn:active {
  background: #fff;
  border-color: orange;
  outline: none;
}
.login-btn:hover:after, .login-btn:focus:after, .login-btn:active:after {
  border-left-color: orange;
}

    </style>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>

</head>


  <body>
 <div class='container'>
  <div class='row'>
    <div class='col-sm-2'>
  
</div>
    <div class='col-sm-5'>
</div>
</div>
</div> 
<?php 



function checkEmpty($data) {
			global $errors;
		
			$data = trim($data);
		
			if(isset($data) === true && $data === '') {
		
				$errors['empty'] ="empty field ! .";
		
			}
			 
		}

?> 
 
  
<div class='login'>
  <header class='login-header'><span class='text'>انشاء حساب</span><span class='loader'></span></header>
  <form  name="form1"class='login-form' method='post' action='conc.php'>
    <input class='login-input' type='text'placeholder='كتابة اسم المستخدم' name='username'/><?= $errorusername; ?></td>
	  <input type ='email' class='login-input'placeholder='كتابة البريد الالكتروني'  name ='email'/><br/><?= $erroremail; ?></td>
    <input class='login-input' type='password' placeholder='كتابة كلمة السر'name='password'/><?= $errorpassword; ?></td>
    <button class='login-btn' type='submit' name='submit'>login</button>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src='static/js/np.js'></script>
	<script type="text/javascript">
$('form[name=form1]').submit(function(){
// اختصار قِيم الحقول في متغيرات
var username = $('input[name=username]').val();
var email = $('input[name=email]').val();
var password = $('input[name=password]').val();
// متغيرات التحقق من البريد الالكتروني والهاتف
var RegExp_email = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
// متغيرات حساب ورسائل الأخطاء
var error_counter = 0;
var error_message = '';
// التحقق من الكتابة في حقل الاسم
if(username.length == 0){
// في حالة أن طول قيمة محتوى الحقل هي صفر، ستتزايد قيمة متغير حساب الأخطاء
error_counter++;
// وأيضًا إضافة رسالة الخطأ لمتغير رسائل الخطأ وسطر جديد
error_message += 'يرجى كتابة الاسم! \n';
}
// التحقق من الكتابة في حقل كلمة المرور
if(email.length == 0){
// في حالة أن طول قيمة محتوى الحقل هي صفر، ستتزايد قيمة متغير حساب الأخطاء
error_counter++;
// وأيضًا إضافة رسالة الخطأ لمتغير رسائل الخطأ وسطر جديد
error_message += 'يرجى كتابة البريد الالكتروني! \n';
}
// التحقق من الكتابة في حقل كلمة البريد الالكتروني
if(email.length > 0 && !RegExp_email.test(email)){
// في حالة أن هناك خطأ في طريقة كتابة البريد الالكتروني، ستتزايد قيمة متغير حساب الأخطاء
error_counter++;
// وأيضًا إضافة رسالة الخطأ لمتغير رسائل الخطأ وسطر جديد
error_message += 'هناك خطأ في البريد الالكتروني! \n';
}
if(password.length == 0){
// في حالة أن طول قيمة محتوى الحقل هي صفر، ستتزايد قيمة متغير حساب الأخطاء
error_counter++;
// وأيضًا إضافة رسالة الخطأ لمتغير رسائل الخطأ وسطر جديد
error_message += 'يرجى كتابة كلمة السر! \n';
}
// التحقق من عدم صحة طريقة كتابة البريد الالكتروني بعد التأكد من أن الحقل غير فارغ
// إن كانت قيمة متغير حساب الأخطاء أكبر من صفر، فهذا يعني أن هناك اخطاء
if(error_counter > 0){
// عرض رسالة الأخطاء على الشاشة
window.alert(error_message);
}else{
// في حالة أن متغير حساب الأخطاء يساوي الصفر سيتم إرسال قيم الحقول
$.ajax({
url: "response.json", // وصلة الصفحة التي سيتم ارسال البيانات لها
type: "POST", // طريقة ارسال البيانات
dataType: "json", // نوع أو صيغة البيانات المستلمة
data: { // اسماء الحقول والقيم. في اليسار اسم الحقل الذي تستلمه صفحة تلقي البيانات، وفي اليمين قيمة الحقل حسب المتغيرات أعلاه
name: $username,
email: $email,
password: $password,
},
success: function(data){ // في حالة التمكن من ارسال البيانات دون مشاكل، التعامل مع الخطوة التالية
if(data.code == '1'){
window.alert ('تم التسجيل');
$('form[name=form1]').trigger('reset'); // مسح محتويات الحقول
}else{
window.alert('هناك خطأ');
}
}
});
}
// لتجنب التحويل للصفحة التالية بالطريقة التقليدية
return false;
});

</script>
	</body>
 
</html>