<!DOCTYPE html>
<html dir="rtl"">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>admin</title>

    <!-- Bootstrap -->
    <link href="static/css/cc.css" rel="stylesheet" id="bootstrap-css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">نظام التقديم الالكتروني</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/Student/Create">ملء الاستمارة</a></li>
                    <li><a href="/Admin">احصائيات</a></li>

                </ul>

                
<form action="/Account/LogOff" class="navbar-left" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="Wh7uqpvI8WsPyU7QO88Fio4KY9tXEffyJI-qOJkBd-Zd4GeHBnM1ZQoqzfvmebtjspg47-VWcuKCrRUicCs0HxjDEGnK0MsUiuVidYdXkcGLwxnR6ahteWF13pt4kr936v333UFx5OC_Wq8qWAOztQ2" />        <ul class="nav navbar-nav navbar-left">

            <li class="dropdown   ">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">مرحباً  <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="/Manage" title="Manage">تعديل الاعدادات</a>
                    </li>
                    <li><a href="javascript:document.getElementById('logoutForm').submit()">تسجيل الخروج</a></li>
                </ul>
            </li>

        </ul>
</form>
            </div>
        </div>
    </div> <div class="container body-content">
        
        


<h2>تعديل الاعدادات.</h2>

<p class="text-success"></p>
<div>
    <h4>تعديل اعدادت الحساب</h4>
    <hr />
    <dl class="dl-horizontal">
        <dt>تم تغيير الرقم السري بنجاح</dt>
        <dd>
            [
<a href="test.php">تغير كلمة السر</a>            ]
        </dd>
      
            
    </dl>
</div>

        <hr />
    </div>
    <footer class="footer">
        <div class="container">
            <p></p>
            <p class="text-center">&copy; 2017 - Wasit University </p>
        </div>
    </footer>

    <script src="/bundles/jquery?v=LFkaLCUPYJ-8xau8kqgZfUrww1m0o_MA5O_TwRmNPCI1"></script>

    <script src="/bundles/bootstrap?v=gdZqTgCMizNuyT34mhf5jexoNtNuce4uNLjBNhoW4DY1"></script>

    



    <script src="static/js/bootstrap.min.js"></script>
  </body>
</html>