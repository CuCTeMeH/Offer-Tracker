<?php
include("db.php");
session_start();
if(!session_is_registered("username")){
header("location: login.html");
}
?>
<!DOCTYPE html>
<html>
	<head>
	
		<link rel="stylesheet" href="style.css" title="Webbek CSS" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script type="text/javascript" src="jquery-autocomplete/jquery.js"></script>
		<script type="text/javascript" src="jquery-autocomplete/jquery-1.7.min.js"></script>
	    <script type='text/javascript' src='jquery-autocomplete/jquery.autocomplete.js'></script>
	    <link rel="stylesheet" type="text/css" href="jquery-autocomplete/jquery.autocomplete.css" />
<script type="text/javascript">
	        $().ready(function() {
            $("#company").autocomplete("jquery-autocomplete/get_from_db.php", {
	        width: 260,
	        matchContains: true,
	        selectFirst: false
                   });
			});
<!--
// Get the HTTP Object
function getHTTPObject(){
   if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
   else if (window.XMLHttpRequest) return new XMLHttpRequest();
   else {
      alert("Your browser does not support AJAX.");
      return null;
   }

}

// Change the value of the outputText field
function setOutput(){
    if(httpObject.readyState == 4){
        document.getElementById('company').value = httpObject.responseXML;
    }

}

// Implement business logic
function lookItUp(){
        httpObject = getHTTPObject();
    if (httpObject != null) {
        httpObject.open("GET", "jquery-autocomplete/fill_from_db.php?company="+document.getElementById('company').value, true);
        httpObject.send(null);
         httpObject.onreadystatechange = setOutput;
    }

}

var httpObject = null;

//-->

function setOutput(){
    if(httpObject.readyState == 4){
		var response = httpObject.responseText.split('|');
		document.getElementById('name').value = response[0];
		document.getElementById('realname').value = response[0];
		document.getElementById('copy_to').value = response[1];
		document.getElementById('tel').value = response[2];
		document.getElementById('fax').value = response[3];
		document.getElementById('email').value = response[4];
    }
}
	</script>
	
	    <script type="text/javascript">
			$(document).ready(function(){		
				
				$('.del').live('click',function(){
					$(this).parent().parent().remove();
				});
				
				$('.add').live('click',function(){
					$(this).val('Delete');
					$(this).attr('class','del');
					var appendTxt = "<tr><td><input type='text' name='input_box_one[]' /></td> <td><input type='text' name='input_box_two[]' /></td> <td><input type='text' name='input_box_three[]' /></td> <td><input type='text' name='input_box_four[]' /></td> <td><input type='text' name='input_box_five[]' /></td> <td><input type='text' name='input_box_six[]' /></td> <td><input type='text' name='input_box_seven[]' /></td> <td><input type='button' class='add' value='Add More' /></td></tr>";
					$("tr:last").after(appendTxt);			
				});        
			});
		</script>
		
		<title>New Offer</title>
	</head>
	<body>
<img src="images/logo_master.gif" align="left" width="250" height="100"/>
<!--<div class="right">
<ul>
<li>Пневматика и хидравлика</li>
<li>Електроапаратура</li>
<li>Линейна и монтажна техника</li>
<li>Инженеринг</li>
</ul>
</div>-->
<br /><br /><br /><br /><br /><br /><br /><br />
<div align="center">Offer No. <?php  $result = mysql_query("SELECT id FROM forms ORDER BY id DESC LIMIT 0 , 1");
while($row = mysql_fetch_array($result))
{ 
extract($row);

echo "$id"; }?> / <?php echo date("d.m.Y", time()); ?></div>
<hr />
<hr />
<form action="form_processing.php" method="post" autocomplete="on">
<div class="left">To: <input type="text" name="company" id="company" onChange="lookItUp();"/><br />
<input type="text" name="name" id="name" value="Person Name"/><br />
Cc: <input type="text" name="copy_to" id="copy_to" /><br />
Telephone: <input type="text" name="tel" id="tel" /><br />
Fax: <input type="text" name="fax" id="fax" /><br />
E-mail: <input type="text" name="email" id="email" /><br />
</div>
<div class="right">From: <?php  $result = mysql_query("SELECT * FROM masters WHERE 1");
while($row = mysql_fetch_array($result))
{ 
extract($row);

echo "$company_name";?><br />
Address: <?php  echo "$address"; ?><br />
Telephone: <?php echo "$telephone";  ?><br />
Fax: <?php echo "$fax"; ?><br />
Email: <?php echo "$email"; ?><br />
Web: <?php echo "$website"; } ?><br />
</div><br /><br /><br /><br /><br /><br /><br />
<hr />
<hr />
<p align="center">Dear Mr./Mrs. <input type="text" name="realname" id="realname" /> </p>
<p align="center">Thank you for your request for <input type="text" name="freetext" />. </p>
<p align="center">As requested, we are pleased to quote you without engagement, for the following:</p>
<br /><br />
<div align="center">    
<table id="options-table">					
			<tr>
				<td>No.</td>
				<td>Product</td>
				<td>Мярка</td>
				<td>Quantity</td>
				<td>Ед. цена</td>
				<td>Общо</td>
			</tr>
			<tr>
				<td><input type="text"   name="input_box_one[]" /></td>
				<td><input type="text" 	 name="input_box_two[]" /></td>                        
				<td><input type="text" 	 name="input_box_three[]" /></td>                        
				<td><input type="text" 	 name="input_box_four[]" /></td>                        
				<td><input type="text" 	 name="input_box_five[]" /></td>                        
				<td><input type="text" 	 name="input_box_six[]" /></td>                        
				<td><input type="text" 	 name="input_box_seven[]" /></td>                        
				<td><input type="button" class='del' value='Delete' /></td>
			</tr>                  
			<tr>
				<td><input type="text"   name="input_box_one[]" /></td>
				<td><input type="text" 	 name="input_box_two[]" /></td>                        
				<td><input type="text" 	 name="input_box_three[]" /></td>                        
				<td><input type="text" 	 name="input_box_four[]" /></td>                        
				<td><input type="text" 	 name="input_box_five[]" /></td>                        
				<td><input type="text" 	 name="input_box_six[]" /></td>                        
				<td><input type="text" 	 name="input_box_seven[]" /></td>
				<td><input type="button" class="add" value="Add More" /></td>
			</tr>
		</table>
	</div>
<div class="left">
<p>Забележка: <input type="text" name="remark" size="60"/></p>
<p class="left">Срок на доставка:</p> <textarea class="textarea" rows="3" cols="30" name="delivery"> </textarea>
<p>Начин на плащане: <input type="text" name="payment" size="60"/></p>
<p>Валидност на офертата: <input type="text" name="remark"/></p>
<br /><br /><br />
<p>Дата: <?php echo date("d.m.Y", time()); ?></p>
<p>Русе</p>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div class="right">
<p>Изготвил: </p>
<p class="pmargin">/<?php echo $_SESSION['fullname']; ?>/</p>
</div>
</form>
	</body>
</html>