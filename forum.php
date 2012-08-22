<?php
session_start();
?>
<html>

<head>
<style type="text/css">
ul
{
list-style-type:none;
}
a
{
text-decoration:none;
font-size:25px;
color:black;
}

a:hover
{
color:red;
}
div.msg
{
position:relative;
color:black;
font-size:18px;
left:650px;
top:200px;
}
div.msg li
{
padding-top:10px;
}
div.whole
{
float:left;
position:relative;
left:200px;
top:-100px;
}
div.welcome
{
font-size:25px;

}
</style>

<link rel="stylesheet" href="stylesheets/forum.css" />
</head>

<body>
<div class="msg">
<h2>UPDATES</h2>
<li>check out forums frequently for clues..</li>
<li>Based on the suggestions we have changed the forum to facebook forum</li>
<li>So now it is easy to use the forums</li>
<li>You will get notifications in fb when some one reply to your comment</li>
<li>use forums actively to discuss</li>

</div>



<div class="whole">

<div class="welcome">
<img src="images/welcome.png" />
</div>

<ul>
<?php
$lev=$_SESSION['level'];
if($lev>=1)
{
echo'<li><a href="forum1.php" target="_blank"><img src="images/cool.png" /></li>';
}


if($lev>=2)
{
echo'<li><a href="forum2.php" target="_blank"><img src="images/level2forum.png" /></li>';
}


if($lev>=3)
{
echo'<li><a href="forum3.php" target="_blank"><img src="images/forum3.png" /></li>';
}


if($lev>=4)
{
echo'<li><a href="forum4.php" target="_blank"><img src="images/forum4.png" /></li>';
}


if($lev>=5)
{
echo'<li><a href="forum5.php" target="_blank"><img src="images/forum5.png" /></li>';
}

if($lev>=6)
{
echo'<li><a href="forum6.php" target="_blank"><img src="images/forum6.png" /></li>';
}


if($lev>=7)
{
echo'<li><a href="forum7.php" target="_blank"><img src="images/forum7.png" /></li>';
}


if($lev>=8)
{
echo'<li><a href="forum8.php" target="_blank"><img src="images/forum8.png" /></li>';
}


if($lev>=9)
{
echo'<li><a href="forum9.php" target="_blank"><img src="images/forum9.png" /></li>';
}


if($lev>=10)
{
echo'<li><a href="forum10.php" target="_blank"><img src="images/forum10.png" /></li>';
}



if($lev>=11)
{
echo'<li><a href="forum11.php" target="_blank"><img src="images/forum11.png" /></li>';
}


if($lev>=12)
{
echo'<li><a href="forum12.php" target="_blank"><img src="images/forum12.png" /></li>';
}


if($lev>=13)
{
echo'<li><a href="forum13.php" target="_blank"><img src="images/forum13.png" /></li>';
}

if($lev>=14)
{
echo'<li><a href="forum14.php" target="_blank"><img src="images/forum14.png" /></li>';
}

if($lev>=15)
{
echo'<li><a href="forum15.php" target="_blank"><img src="images/forum15.png" /></li>';
}


?>

</ul>
</div>


</body>
</html>