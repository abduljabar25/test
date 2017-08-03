<!DOCTYPE html>
<html dir="rtl">
    

<head>
<title>Chained Selects</title>
<script language="javascript" src="chainedmenu.js">

/***********************************************
* Chained Select Menu- By Xin Yang (http://www.yxscripts.com/) & Dynamic Drive (http://dynamicdrive.com)
* Script featured on/available at http://www.dynamicdrive.com/
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
* This notice must stay intact for legal use!
***********************************************/

</script>
<script language="javascript" src="config.js"></script>

</head>

<body onload="initListGroup('chainedmenu', document.listmenu0.firstlevel, document.listmenu0.secondlevel, document.listmenu0.thirdlevel, 'savestate')">

<form name="listmenu0">
<table align="center"><tr>
<td><select name="firstlevel" style="width:180px;"></select></td>
<td><select name="secondlevel" style="width:160px;"></select></td>
<td><select name="thirdlevel" style="width:160px;"></select></td>
<td><input type="button" value="Go" onclick="goListGroup(document.listmenu0.firstlevel, document.listmenu0.secondlevel, document.listmenu0.thirdlevel)">
 <input type="button" value="Reset" onclick="resetListGroup('chainedmenu')">
</tr></table>
</form>

<h3>Notes</h3>
<ul>
<li>An arbitrary string ("savestate") is passed in as the last argument of function initListGroup() inside this page, "sample.html", enabling the session-only cookie persistent feature. What this means is that the script will save and load the last state of the chained Selection lists when you reload or return to this page. See the documentation in chainedmenu.html for more info.</li>
<li>Disable empty lists feature is enabled, so empty lists are disabled (grayed out).</li>
</ul>

<p align="center">Dynamic Drive- <a href="http://www.dynamicdrive.com/dynamicindex1/chainedmenu/">Chained Select Menu</a></p>

</body>

</html>