<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>صفحة تسجيل الدخول</title>

    <!-- Bootstrap -->
    <link href="static/css/cc.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 <body>
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

                
    <ul class="nav navbar-nav navbar-left">

        <li><a href="/Account/Login" id="loginLink">تسجيل الدخول</a></li>
    </ul>

            </div>
        </div>
    </div>
    <div class="container body-content">
        
        

<div class="row">
    <div class="col-md-6 col-sm-6" ng-show="model.loginUrl">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">تسجيل الدخول</h3>
            </div>
<form action="/Account/Login?ReturnUrl=%2FStudent%2FCreate" class="form-horizontal" method="post" role="form">            <div class="panel-body">

                <input name="__RequestVerificationToken" type="hidden" value="jDcGFVu_0R4qVg5zWMkCb4wMn_FjpEjxrvSpRSJBdRHFC5UvpflEgadeJ1VzT34GppqDSoBgnfQEU-TxZx91ZCw6lCSjkWvRe-2ESToEHo01" />
                <hr />
                
                <div class="form-group">
                    <label class="col-md-2 control-label" for="UserName">اسم المستخدم</label>
                    <div class="col-md-10">
                        <input class="form-control" data-val="true" data-val-required="اسم المستخدم مطلوب" id="UserName" name="UserName" type="text" value="" />
                        <span class="field-validation-valid text-danger" data-valmsg-for="UserName" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="Password">كلمة السر</label>
                    <div class="col-md-10">
                        <input class="form-control" data-val="true" data-val-required="The كلمة السر field is required." id="Password" name="Password" type="password" />
                        <span class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <div>
                            <input data-val="true" data-val-required="The حفظ تسجيل الدخول field is required." id="RememberMe" name="RememberMe" type="checkbox" value="true" /><input name="RememberMe" type="hidden" value="false" />
                            <label for="RememberMe">حفظ تسجيل الدخول</label>
                        </div>
                    </div>
                </div>

            </div>
            <ul class="list-unstyled">
                <!-- ngRepeat: link in model.additionalLinks -->
            </ul>
            <div class="panel-footer ">
                <input type="submit" href="mo.php"value="تسجيل الدخول" class="btn btn-ha3 "/>
            </div>
</form>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 external-providers" ng-show="model.externalProviders.length">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">انشاء حساب جديد</h3>
            </div>
            <div class="panel-body">
                <a class="btn btn-success" href="cre.php">انشاء حساب جديد</a>


            </div>
        </div>
    </div>
</div>



        <hr />
    </div>
    <footer class="footer">
        <div class="container">
            <p></p>
            <p class="text-center">&copy; 2018 -جامعة ذي قار </p>
        </div>
    </footer>

    <script src="/bundles/jquery?v=LFkaLCUPYJ-8xau8kqgZfUrww1m0o_MA5O_TwRmNPCI1"></script>

    <script src="/bundles/bootstrap?v=gdZqTgCMizNuyT34mhf5jexoNtNuce4uNLjBNhoW4DY1"></script>

    
    <script src="/bundles/jqueryval?v=ZdDapOyGOtf6YkBmkt7uKxogx0dH-J3fODuiqUW3roc1"></script>



</body>

</html>