<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Select Chain</title>
    <script type="text/javascript">
    <!--
    var request = false;
	/*@cc_on @*/
	/*@if (@_jscript_version >= 5)
	try {
	request = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
	try {
	request = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (e2) {
	request = false;
	}
	}
	@end @*/
	if (!request && typeof XMLHttpRequest != 'undefined') {
	request = new XMLHttpRequest();
	}

	function fillSelect(country) {
		var url = "csa_ajax.php?country=" + escape(country);
		request.open("GET", url, true);
		request.onreadystatechange = go;
		request.send(null);
	}

	function go() {
		if (request.readyState == 4) {
			if (request.status == 200) {
				var response = request.responseText;
				var list=document.getElementById("dep_name");
				var cities=response.split('|');
				/* for (i=1; i<cities.length; i++) { */
				for (i in cities) {
				   if(i > 0){
				   var x=document.createElement('option');
				   var y=document.createTextNode(cities[i]);
				   x.value = i;
				   x.appendChild(y);
				   list.appendChild(x);
				   }
				}
			}
		}
	}

	function initCs() {
		var colle_name=document.getElementById('colle_name');
		colle_name.onchange=function() {
			if(this.value!="") {
				var list=document.getElementById("dep_name");
				while (list.childNodes[0]) {
					list.removeChild(list.childNodes[0])
				}
				fillSelect(this.value);
			}
		}
		fillSelect(colle_name.value);
	}
    //-->
    </script>
  </head>
<body>
<script>
<!--
window.onload=initCs; 
//-->
</script>
<form method="post" action="conc.php">
<p>
	<label>
		country: 
		<select id="country" name="country">
		<option value="United Kingdom">United Kingdom</option>
		<option value="United States">United States</option>
		<option value="Australia">Australia</option>
		<option value="Japan">Japan</option>
		</select>
	</label>
	<label>
		city: <select id="city" name="city"></select>
	</label>
</p>
</form>
</body>
</html>