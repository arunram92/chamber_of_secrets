<?php
session_start();
//sholud be changed two times in welcome and check level
$uname=$_SESSION['uname'];

//check level and let him

include('config.php');

$lev=mysql_query("select level from users where uname='$uname' ");

$level = mysql_fetch_array($lev);

//if his level is not 2 then he is a ******

if($level[0]!=12)
{
echo '<script type="text/javascript">';
echo 'alert("either you dont have permission or not logged in");
location.href="index.php" ';
echo '</script>';

}

?>



<html>

<head>


<script type="text/javascript">
function phpcall()
{
var c=document.forms["form1"]["answer"].value;
if(c==null || c=="")
{
alert("answer field is empty idiot!");
return false;
}

}



</script>
<link rel="stylesheet" href="stylesheets/level12.css"/>
<style type="text/css">
div.hidden
{
color:black;
position:relative;
left:-500px;
top:-25px;
}

</style>

</head>
<body>


<div class="welcome2">
<?php
echo "map activated!to enter the answer press back and use pharoah.php"
?>


<div class="tim">
<?php
$time=mysql_query("select time from users where  uname='$uname' ");

$tim = mysql_fetch_array($time);

echo "level started at :".$tim[0];
?>
</div>

</div>

<?php
echo "<br>";

?>
<div class="content">

<div class="innercontent">

<div class="img1">
<img src="images/part1.jpg" height="250" width="200" />
</div>
<div class="img2">
<img src="images/part2.jpg" height="250" width="200" />
</div>
<div class="img3">
<img src="images/part3.jpg" height="250" width="200" />
</div>





<?php
echo "<br>";
echo "<br>";
?>




</div>

<div class="lo">
<form name="form2" method="post" action="logout.php" >
<input type="submit" value="logout"" />
</form>
</div>
</div>

<div class="like">
<iframe  src="https://www.facebook.com/plugins/like.php? href=www.itrix.co.in"
        scrolling="no" frameborder="0"
        style="border:none; width:450px;  height:80px"></iframe>
</div>

<div class="footer">

<div class="leader">
<a href="leaderboard.php" target="_blank"><img src="images/leaderboard.gif" /></a>
</div>

<div class="forum">
<a href="forum.php" target="_blank"><img src="images/forum.png" /></a>
</div>

<div class="acc">
<a href="account.php" target="_blank"><img src="images/acc.png" /></a>
</div>

<div class="hidden">
Where?
</div>

</div>


<div class="logo">
<img src="images/itrix.jpg" width="200" height="100"/>
</div>


<div class="chamber">
<img src="images/chamber.gif" width="350" height="150"/>
</div>


</body>
</html>
