<?php 

  header('Content-type: text/xml');
  
  $company= $_REQUEST['company'];

  include("../db.php");
  
  $query = "SELECT * FROM clients WHERE (company_name = '$company')";
  $result = mysql_query($query);
  if(!result) {
	echo "no results";
	exit('<p>Error performing query: ' . mysql_error() . '</p>');
  }
  
  mysql_close();
  
  while ($row = mysql_fetch_array($result)) {
	$name = $row['name'];
	$copy_to = $row['copy_to'];
	$tel = $row['telephone'];
	$fax = $row['fax'];
	$email = $row['email'];
  }

  $returnXML = "$name|$copy_to|$tel|$fax|$email";
	 
  echo $returnXML;
  
?>