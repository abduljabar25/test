<?php
function doIt($CollegeId) {

switch ($CollegeId) {
case "الاداب":
return array(1 => 'جغرافية', 2 => 'تاريخ', 3 => 'اللغة العربية');
break;
case "الادارة والاقتصاد":
return array('1','2','3', '4');
break;
case "الاعلام":
return array('1','2','3', '4');
break;
case "التربية":
return array('1','2','3', '4');
break;
case "التربية":
return array('1','2','3', '4');
break;
 }
}

$CollegeId=@$_GET['CollegeId'];
$DepNames=doIt($CollegeId);
foreach ((array)$DepNames as $DepName) {
echo '|'.$DepName;
}
?>