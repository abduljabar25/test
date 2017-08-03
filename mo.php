
<!DOCTYPE html>
<html dir="rtl">
    <head>
    <meta charset="utf-8">
    <title>استمارة التسجيل الالكتروني :: مديرية الاقسام الداخلية</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="static/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="static/css/cc.css">
    <style type="text/css">
body {
	
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#fefefd+0,dce3c4+42,aebf76+100;Olive+3D+%231 */
background: rgb(254,254,253); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(254,254,253,1) 0%, rgba(220,227,196,1) 42%, rgba(174,191,118,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(254,254,253,1)), color-stop(42%,rgba(220,227,196,1)), color-stop(100%,rgba(174,191,118,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(254,254,253,1) 0%,rgba(220,227,196,1) 42%,rgba(174,191,118,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(254,254,253,1) 0%,rgba(220,227,196,1) 42%,rgba(174,191,118,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(254,254,253,1) 0%,rgba(220,227,196,1) 42%,rgba(174,191,118,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(254,254,253,1) 0%,rgba(220,227,196,1) 42%,rgba(174,191,118,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefefd', endColorstr='#aebf76',GradientType=0 ); /* IE6-9 */
background-attachment: fixed;

}
header{height:150px;}
.stepwizard-step p {
	margin-top: 10px;
}
.stepwizard-row {
	display: table-row;
}
.stepwizard {
	display: table;
	width: 50%;
	position: relative;
}
.stepwizard-step button[disabled] {
	opacity: 1 !important;
	filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
	top: 14px;
	bottom: 0;
	position: absolute;
	content: " ";
	width: 100%;
	height: 1px;
	background-color: #ccc;
	z-order: 0;
}
.stepwizard-step {
	display: table-cell;
	text-align: center;
	position: relative;
}
.btn-circle {
	width: 30px;
	height: 30px;
	text-align: center;
	padding: 6px 0;
	font-size: 12px;
	line-height: 1.428571429;
	border-radius: 15px;
}
.alertt{background-color:red ;display: none;  border-radius:10px; color:#fff; text-align:center;}
.row{font-size:16px;}
.form-control{font-size:16px; font-weight:bold;}
.btn-md{font-size:16px; font-weight:bold; width:30%; }
#steptitle{font-size:22px; font-weight:bold; text-decoration: underline;}


</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="static/js/bootstrap.min.js"></script>
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
<form action="/Account/LogOff" class="navbar-left" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="56LpqaYMgqg5KH2gmsfhNJmEoDs25pMS3By9G3A3lsPGbm7tQ-4KircLM6L64G7VJY_vQhqFAYoqw7b5tJ-SAvL7OFkIsXs9UpTVUJkattCobeGKkwnu8HP6KXR9-r_GftmxYwMQK1dp-wVIXb4aXA2" />        <ul class="nav navbar-nav navbar-left">

            <li class="dropdown   ">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">مرحباً  <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="mang.php" title="Manage">تعديل الاعدادات</a>
                    </li>
                    <li><a href="javascript:document.getElementById('logoutForm').submit() " href="admin.php">تسجيل الخروج</a></li>
                </ul>
            </li>

        </ul>
</form>
            </div>
        </div>
    </div>
    <div class="container body-content">
        
        


<div class="jumbotron visible-print">
    <h2 class="text-center"> لايمكنك طباعة الاستمارة قبل اكمال المعلومات </h2>
</div>
<h2 class="hidden-print">معلومات الطالب</h2>
<form action="/Student/Create" id="basicBootstrapForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="TLxkYoz2LR2dEh6d_enaf9zIomhvIfLvpoZGXAQ48UT-9Zhz060J1_LLbgIBJHpfZ-_AJskibVp5jNDkMp_JIunFPE8G8JMku4RwCQ9ObbTCjsOibsTut9HBoTjuE1gWsHMAz7EuwItoVAJemtiAKA2" />    <div class="row hidden-print">
        <hr />
        
        <input id="AppUserId" name="AppUserId" type="hidden" value="9ea14eb5-8a0d-46cd-b254-3a4439d4424e" />
        <div class="row">
           
            <div class="panel panel-success">
                <div class="panel-heading"><span class="h3">المعلومات الشخصية</span></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-4 col-sm-4">
                                <label class="control-label" for="FullName">الاسم الرباعي واللقب</label>
                                <div>
                                    <input class="form-control text-box single-line" id="FullName" name="FullName" type="text" value="" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="FullName" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-4 col-sm-4">
                                <label class="control-label" for="MotherName">اسم الام الثلاثي</label>
                                <div>
                                    <input class="form-control text-box single-line" data-val="true" data-val-required="The اسم الام الثلاثي field is required." id="MotherName" name="MotherName" type="text" value="" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="MotherName" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <label class="control-label" for="Birthday">المواليد</label>
                                <div>
                                    <input class="form-control" data-date-format="dd/mm/yyyy" data-date-language="ar-IQ" data-provide="datepicker" id="Birthday" maxlength="10" name="Birthday" onkeypress="format(&#39;##/##/####&#39;, this); function format(mascara, documento) { var i = documento.value.length; var saida = mascara.substring(0, 1); var texto = mascara.substring(i); if (texto.substring(0, 1) != saida) { documento.value += texto.substring(0, 1); } }" type="text" value="20/07/1999"></input><script>$(document).ready(function() { onlyNumbers($('#Birthday') ) }); function onlyNumbers(e) { e.keydown(function (e) { if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || e.keyCode == 65 && e.ctrlKey === true || e.keyCode >= 35 && e.keyCode <= 39) { return } if ((e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105)) { e.preventDefault() } }) }</script>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Birthday" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">


                            <div class="form-group col-md-4 col-sm-4">
                                <label class="control-label" for="GenderId">الجنس</label>
                                <div class="ha-left-error">
                                    <select class="form-control ha-left-error" data-val="true" data-val-range="الرجاء اختيار احد الاختيارات" data-val-range-max="2147483647" data-val-range-min="1" data-val-required="The الجنس field is required." id="GenderId" name="GenderId"><option selected="selected" value="0">الرجاء اختيار الجنس</option>
<option value="1">انثى</option>
<option value="2">ذكر</option>
</select>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="GenderId" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <label class="control-label" for="MaritalStatusId">الحالة الزوجية</label>
                                <div class="ha-left-error">
                                    <select class="form-control" data-val="true" data-val-range="الرجاء اختيار احد الاختيارات" data-val-range-max="2147483647" data-val-range-min="1" data-val-required="The الحالة الزوجية field is required." id="MaritalStatusId" name="MaritalStatusId"><option selected="selected" value="0">الرجاء اختيار الحالة الزوجية</option>
<option value="1">اعزب/عزباء</option>
<option value="2">متزوج/متزوجة</option>
<option value="3">مطلق/مطلقة</option>
<option value="4">ارمل/ارملة</option>
</select>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="MaritalStatusId" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>



                


        <div class="row">
            <div class="panel panel-info">
                <div class="panel-heading"><span class="h3">المستمسكات الثبوتية</span></div>
                <div class="panel-body">
                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="JensiaId"> أرقم هوية الاحوال المدنية او البطاقة الموحدة</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="رقم هوية الاحوال المدني مطلوب" id="JensiaId" name="JensiaId" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="JensiaId" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="JensiaDate">تاريخ الاصدار</label>
                        <div>
                            <input class="form-control"  type ="date" name="datebirth" data-date-language="ar-IQ" data-provide="datepicker" id="JensiaDate" maxlength="10" name="JensiaDate" onkeypress="format(&#39;##/##/####&#39;, this); function format(mascara, documento) { var i = documento.value.length; var saida = mascara.substring(0, 1); var texto = mascara.substring(i); if (texto.substring(0, 1) != saida) { documento.value += texto.substring(0, 1); } }" type="text" value="13/07/1999"></input>
							<script>$(document).ready(function() { onlyNumbers($('#JensiaDate') ) }); function onlyNumbers(e) { e.keydown(function (e) { if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || e.keyCode == 65 && e.ctrlKey === true || e.keyCode >= 35 && e.keyCode <= 39) { return } if ((e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105)) { e.preventDefault() } }) }</script>
                            <span class="field-validation-valid text-danger" data-valmsg-for="JensiaDate" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="JensiaLocation">محل الاصدار</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="محل الاصدار هوية الاحوال المدنية مطلوب" id="JensiaLocation" name="JensiaLocation" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="JensiaLocation" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="CertJensiaId">رقم شهادة الجنسية</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="رقم شهادة الجنسية مطلوب" id="CertJensiaId" name="CertJensiaId" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="CertJensiaId" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="CertJensiaDate">تاريخها</label>
                        <div>
                            <input class="form-control"  type ="date" name="datebirth"  data-date-language="ar-IQ" data-provide="datepicker" id="CertJensiaDate" maxlength="10" name="CertJensiaDate" onkeypress="format(&#39;##/##/####&#39;, this); function format(mascara, documento) { var i = documento.value.length; var saida = mascara.substring(0, 1); var texto = mascara.substring(i); if (texto.substring(0, 1) != saida) { documento.value += texto.substring(0, 1); } }" type="text" value="13/07/2017"></input><script>$(document).ready(function() { onlyNumbers($('#CertJensiaDate') ) }); function onlyNumbers(e) { e.keydown(function (e) { if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || e.keyCode == 65 && e.ctrlKey === true || e.keyCode >= 35 && e.keyCode <= 39) { return } if ((e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105)) { e.preventDefault() } }) }</script>
                            <span class="field-validation-valid text-danger" data-valmsg-for="CertJensiaDate" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="CertJensiaLocation">جهة الاصدار</label>
                        <div>
                            <input class="form-control text-box single-line" id="CertJensiaLocation" name="CertJensiaLocation" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="CertJensiaLocation" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="HousingId">رقم بطاقة السكن</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="The رقم بطاقة السكن field is required." id="HousingId" name="HousingId" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="HousingId" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="HousingDate">تاريخها</label>
                        <div>
                            <input class="form-control"  type ="date" name="datebirth"  data-date-language="ar-IQ" data-provide="datepicker" id="HousingDate" maxlength="10" name="HousingDate" onkeypress="format(&#39;##/##/####&#39;, this); function format(mascara, documento) { var i = documento.value.length; var saida = mascara.substring(0, 1); var texto = mascara.substring(i); if (texto.substring(0, 1) != saida) { documento.value += texto.substring(0, 1); } }" type="text" value="13/07/2017"></input><script>$(document).ready(function() { onlyNumbers($('#HousingDate') ) }); function onlyNumbers(e) { e.keydown(function (e) { if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || e.keyCode == 65 && e.ctrlKey === true || e.keyCode >= 35 && e.keyCode <= 39) { return } if ((e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105)) { e.preventDefault() } }) }</script>
                            <span class="field-validation-valid text-danger" data-valmsg-for="HousingDate" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="HousingLocation">جهة الاصدار</label>
                        <div>
                            <input class="form-control text-box single-line" id="HousingLocation" name="HousingLocation" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="HousingLocation" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-danger">
                <div class="panel-heading"><span class="h3">معلومات السكن</span></div>
                <div class="panel-body">
                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="ProvinceId">المحافظة</label>
                        <div class="ha-left-error">
                            <select class="form-control" data-val="true" data-val-range="الرجاء اختيار احد الاختيارات" data-val-range-max="2147483647" data-val-range-min="1" data-val-required="The المحافظة field is required." id="ProvinceId" name="ProvinceId"><option selected="selected" value="0">الرجاء اختيار محافظة</option>
<option value="1">اربيل</option>
<option value="2">انبار</option>
<option value="3">بابل</option>
<option value="4">بصرة</option>
<option value="5">بغداد</option>
<option value="6">دهوك</option>
<option value="7">ديالى</option>
<option value="8">ذي قار</option>
<option value="9">سليمانية</option>
<option value="10">صلاح الدين</option>
<option value="11">قادسية</option>
<option value="12">كربلاء</option>
<option value="13">كركوك</option>
<option value="14">مثنى</option>
<option value="15">ميسان</option>
<option value="16">نجف</option>
<option value="17">نينوى</option>
<option value="18">واسط</option>
</select>
                            <span class="field-validation-valid text-danger" data-valmsg-for="ProvinceId" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="District">القضاء</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="القضاء مطلوب" id="District" name="District" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="District" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="Address"> العنوان الكامل </label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="العنوان الكامل مطلوب" id="Address" name="Address" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="Address" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="CellPhone">رقم الموبايل</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="The رقم الموبايل field is required." id="CellPhone" name="CellPhone" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="CellPhone" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="GuardianName">اسم ولي الامر</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="The اسم ولي الامر field is required." id="GuardianName" name="GuardianName" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="GuardianName" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="CellPhoneGuardian">رقم الهاتف لولي الامر</label>
                        <div>
                            <input class="form-control text-box single-line" data-val="true" data-val-required="The رقم الهاتف لولي الامر field is required." id="CellPhoneGuardian" name="CellPhoneGuardian" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="CellPhoneGuardian" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading"><span class="h3">معلومات الكلية </span></div>
                <div class="panel-body">
                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="CollegeId">الكلية</label>
                        <div>
                            <select class="form-control" data-val="true" data-val-required="The الكلية field is required." id="CollegeId" name="CollegeId"><option selected="selected" value="0">الرجاء اختيار الكلية</option>
<option value="1">الاداب</option>
<option value="2">الادارة والاقتصاد</option>
<option value="3">الاعلام</option>
<option value="4">التربية</option>
<option value="5">التربية الاساسية</option>
<option value="6">التربية الرياضية</option>
<option value="7">الحاسوب والرياضيات</option>
<option value="8">الزراعة</option>
<option value="9">الطب</option>
<option value="10">الطب البيطري</option>
<option value="11">العلوم</option>
<option value="12">الفنون الجميلة</option>
<option value="13">كلية القانون</option>
<option value="14">الهندسة</option>
<option value="15">طب الاسنان</option>
<option value="16">كلية اهلية</option>
</select>
                            <span class="field-validation-valid text-danger" data-valmsg-for="CollegeId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="DepName">القسم</label>
                        <div>
                            <div id="loading" class="text-center"></div>

                            <select class="form-control" id="DepName" name="DepName"></select>
                            <span class="field-validation-valid text-danger" data-valmsg-for="DepName" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="StageId">المرحلة</label>
                        <div>
                            <select class="form-control" data-val="true" data-val-required="The المرحلة field is required." id="StageId" name="StageId"><option selected="selected" value="0">الرجاء اختيار المرحلة</option>
<option value="1">الاولى</option>
<option value="2">الثانية</option>
<option value="3">الثالثة</option>
<option value="4">الرابعة</option>
<option value="5">الخامسة</option>
<option value="6">السادسة</option>
<option value="7">دراسات عليا</option>
</select>
                            <span class="field-validation-valid text-danger" data-valmsg-for="StageId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="StudyTypeId">نوع الدراسة</label>
                        <div>
                            <select class="form-control" data-val="true" data-val-required="The نوع الدراسة field is required." id="StudyTypeId" name="StudyTypeId"><option selected="selected" value="0">الرجاء اختيار نوع الدراسة</option>
<option value="1">صباحي</option>
<option value="2">مسائي</option>
<option value="3">دراسات عليا</option>
</select>
                            <span class="field-validation-valid text-danger" data-valmsg-for="StudyTypeId" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="partialPlaceHolder" style="display: none;"> </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="h3">معلومات الكفيل</span></div>
                <div class="panel-body">

                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="Gname">اسم الكفيل</label>
                        <div>
                            <input class="form-control text-box single-line" id="Gname" name="Gname" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="Gname" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="Gaddress">عنوان الكفيل</label>
                        <div>
                            <input class="form-control text-box single-line" id="Gaddress" name="Gaddress" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="Gaddress" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="Goffice">دائرة الكفيل</label>
                        <div>
                            <input class="form-control text-box single-line" id="Goffice" name="Goffice" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="Goffice" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="GphoneNumber">رقم هاتف الكفيل</label>
                        <div>
                            <input class="form-control text-box single-line" id="GphoneNumber" name="GphoneNumber" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="GphoneNumber" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-ha">
                <div class="panel-heading"><span class="h3">معلومات القبول</span></div>
                <div class="panel-body">
                    <div class="form-group col-md-4 col-sm-4">
                        <label class="control-label" for="Note">الملاحظات</label>
                        <div>
                            <input class="form-control text-box single-line" id="Note" name="Note" type="text" value="" />
                            <span class="field-validation-valid text-danger" data-valmsg-for="Note" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-offset-2 col-md-10">
            <button type="submit" class="btn btn-lg btn-ha2"><span class="glyphicon glyphicon-floppy-save">   اتعهد بصحة كافة المعلومات اعلاه وبخلافة يعتبر ترشيحي للقسم لاغياً  >> حفظ ومتابعة</span></button>
            
        </div>
    </div>
</form>
        <hr />
    </div>
    <footer class="footer">
        <div class="container">
            <p></p>
            <p class="text-center">&copy; 2017 - جامعة ذي قار </p>
        </div>
    </footer>

    <script src="/bundles/jquery?v=LFkaLCUPYJ-8xau8kqgZfUrww1m0o_MA5O_TwRmNPCI1"></script>

    <script src="/bundles/bootstrap?v=gdZqTgCMizNuyT34mhf5jexoNtNuce4uNLjBNhoW4DY1"></script>

    
    
    <script src="/bundles/bootstrapvalidate?v=ko02rI6a61UjdvlcYbMc-jy8X_d5qYVySiqtzbk_hsI1"></script>
<script src= "static/js/ccc.js"></script>
    <script src="/Scripts/formVal/formValidation.min.js"></script>
    <script src="/Scripts/formVal/bootstrap.min.js"></script>
    <script src="/Scripts/formVal/ar-IQ.js"></script>
    <script src="/Scripts/app/underscore.js"></script>
    <script src="/Scripts/app/smartcrop.js"></script>
    <script type="text/jscript">

        
    

   <script type="text/javascript">
    <!--
    var request = false;
	
	if (!request && typeof XMLHttpRequest != 'undefined') {
	request = new XMLHttpRequest();
	}

	function fillSelect(CollegeId) {
		var url = "csa_ajax.php?CollegeId=" + escape(CollegeId);
		request.open("GET", url, true);
		request.onreadystatechange = go;
		request.send(null);
	}

	function go() {
		if (request.readyState == 4) {
			if (request.status == 200) {
				var response = request.responseText;
				var list=document.getElementById("DepName");
				var DepNames=response.split('|');
				/* for (i=1; i<DepNames.length; i++) { */
				for (i in DepName) {
				   if(i > 0){
				   var x=document.createElement('option');
				   var y=document.createTextNode(DepName[i]);
				   x.value = i;
				   x.appendChild(y);
				   list.appendChild(x);
				   }
				}
			}
		}
	}

	function initCs() {
		var CollegeId=document.getElementById('CollegeId');
		CollegeId.onchange=function() {
			if(this.value!="") {
				var list=document.getElementById("DepName");
				while (list.childNodes[0]) {
					list.removeChild(list.childNodes[0])
				}
				fillSelect(this.value);
			}
		}
		fillSelect(CollegeId.value);
	}
    //-->
    </script>
    
    <script type="text/javascript">
      
</body>



</body>
</html>


