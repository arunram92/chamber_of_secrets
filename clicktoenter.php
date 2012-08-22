<?php
session_start();
//sholud be changed two times in welcome and check level
$uname=$_SESSION['uname'];

//check level and let him

include('config.php');

$lev=mysql_query("select level from users where uname='$uname' ");

$level = mysql_fetch_array($lev);

//if his level is not 0 then he is a ******

if($level[0]!=0)
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

function enter()
{
alert("enter");
<?php
$_SESSION['enter']=1;
echo '<script type="text/javascript">;
location.href="answer.php" ';
echo '</script>';
?>
}

</script>
<link rel="stylesheet" href="stylesheets/levelz.css"/>


</head>
<body>





<?php
echo "<br>";
?>
<div class="content">

<div class="innercontent">

<div class="click">
<a href="redirect.php"><img src="images/click.jpg"></a>
</div>

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
write it down to see the equality
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

