<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>تغيير الرقم السري</title>

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
	 <div class="container body-content">
        
<h2>تغيير الرقم السري</h2>

<form action="/Manage/ChangePassword" class="form-horizontal" method="post" role="form"><input name="__RequestVerificationToken" type="hidden" value="UJPQWeMjPoKKhxAEIVOLqDRNbwWFicsD54t7D1gyyoTP4m1UOZpvWT6sz1nUUzYrTpSZy86i8eHWb5bvAhXwa-3X9LK6yhKIX7pm8KVD8O0D9oDgIKgPR6fxnKrpvViMmAayZvSHHyIFlyZi2pygtg2" />    <h4>
<div class="validation-summary-valid text-danger" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>    <div class="form-group">
        <label class="col-md-2 control-label" for="OldPassword">الرقم السري</label>
        <div class="col-md-10">
            <input class="form-control" data-val="true" data-val-required="The Current password field is required." id="OldPassword" name="OldPassword" type="password" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="NewPassword">الرقم السري الجديد</label>
        <div class="col-md-10">
            <input class="form-control" data-val="true" data-val-length="The New password must be at least 6 characters long." data-val-length-max="100" data-val-length-min="6" data-val-required="The New password field is required." id="NewPassword" name="NewPassword" type="password" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="ConfirmPassword">اعادة الرقم السري الجديد</label>
        <div class="col-md-10">
            <input class="form-control" data-val="true" data-val-equalto="The new password and confirmation password do not match." data-val-equalto-other="*.NewPassword" id="ConfirmPassword" name="ConfirmPassword" type="password" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <input type="submit"href="pass_scc.php" value="تغيير الرقم السري" class="btn btn-default" />
        </div>
    </div>
</form>
        <hr />
    </div>
    <footer class="footer">
        <div class="container">
            <p></p>
            <p class="text-center">&copy; 2018 - جامعة ذي قار </p>
        </div>
    </footer>

	</body>
</html>