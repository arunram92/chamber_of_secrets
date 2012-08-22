<?php
session_start();
//sholud be changed two times in welcome and check level
$uname=$_SESSION['uname'];

//check level and let him

include('config.php');

$lev=mysql_query("select level from users where uname='$uname' ");

$level = mysql_fetch_array($lev);

//if his level is not 2 then he is a ******

if($level[0]!=14)
{
echo '<script type="text/javascript">';
echo 'alert("either you dont have permission or not logged in");
location.href="index.php" ';
echo '</script>';

}

?>



<html>
<!-- In the lyrics, "I am a ???" -->
<head>
<title></title>

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
<link rel="stylesheet" href="stylesheets/levels.css"/>

<style type="text/css">
div.text
{
color:black;
position:relative;
left:100px;
font-size:25px;
clear:both;
}
</style>
</head>
<body>


<div class="welcome">
<?php
echo "welcome to LEVEL 14"
?>

<div class="un">
<?php
echo $_SESSION['uname'];
?>
</div>

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
<img src="images/download.jpg" height="250" width="300" />
</div>
<div class="img2">
<img src="images/image2.jpg" height="250" width="300" />
</div>
<div class="text">
<b>FB is all about likes, shares, tags, pokes and ?</b>
</div>
</div>





<?php
echo "<br>";
echo "<br>";
?>


<div class="form">
<form name="form1" onsubmit="return phpcall()" action="answer.php" method="post">
Answer:<input type="text" value="" name="answer" />
<input type="submit" value="get me to next level" />
</form>
</div>

</div>

<div class="lo9">
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


</div>


<div class="logo">
<img src="images/itrix.jpg" width="200" height="100"/>
</div>


<div class="chamber">
<img src="images/chamber.gif" width="350" height="150"/>
</div>


</body>
</html>
