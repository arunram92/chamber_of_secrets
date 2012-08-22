<?php
session_start();
$uname=$_SESSION['uname'];


include('config.php');



$acc_det=mysql_query("select * from users where uname='$uname' ");

$acc=mysql_fetch_array($acc_det);

$_SESSION['mob']=$acc['mob'];
$_SESSION['coll']=$acc['coll'];
$_SESSION['email']=$acc['email'];


mysql_close($con);

?>


<html>
<head>
<link rel="stylesheet" href="stylesheets/forum.css" />


</head>



<div class="account">

<div class="welc">
<h1>welcome to your account</h1>
<br>
<p>NAME :</p>
<p>MOBILE :</p>
<p>COLLEGE :</p>
<p>EMAIL ID :</p>
<p>CURRENT LEVEL :</p>

</div>

<div class="name">
<?php
echo $_SESSION['uname'];
?>
</div>

<div class="mob">
<?php
echo $_SESSION['mob'];
?>
</div>

<div class="lev">
<?php
echo $_SESSION['level'];
?>
</div>

<div class="coll">
<?php
echo $_SESSION['coll'];
?>
</div>

<div class="email">
<?php
echo $_SESSION['email'];
?>
</div>

</div>



</html>