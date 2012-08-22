<?php
$con = mysql_connect("localhost","root","");
//$con = mysql_connect("localhost","itrix_user","a!i#GtAnpQ-W");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ros",$con);

function sanitize_data($input_data) {
  return htmlentities(stripslashes($input_data), ENT_QUOTES);
}
?>
