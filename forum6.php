<?php
session_start();


//gotta change the link in every page

//if logged in let him

if(isset($_SESSION['logged']))
{

$uname=$_SESSION['uname'];
$lev=$_SESSION['level'];



if(($lev<6))
{

echo '<script type="text/javascript">';
echo 'alert("you are not permitted to view this forum..");
location.href="forum.php" ';
echo '</script>';
}

}

//if not logged in show login form

else
{
header("location:index.php");
}
?>

<html>
<head>
<meta property=fb:admins content=548520147,ArunRamIT />
</head>


<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<a href="http://www.itrix.co.in" target="_blank"><img src="images/logo.jpg" width="1250"></a>


<div class="title">
<br>
welcome to level 6 forum.This forum is just to help users discuss and no one should post the answers else the person will be immediately disqualified!!
</div>
<br>
<br>
<br>
<br>
<div class="fb-comments" data-href="http://cos.itrix.co.in/forum6.php" data-num-posts="2" data-width="470"></div>
</body>
</html>




