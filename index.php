<?php
session_start();

if(isset($_SESSION['logged']))
{

header("location:login.php");

}
?>

<html>
<head>

<link rel="stylesheet" href="stylesheets/style.css"/>


<script type="text/javascript">

function check()
{
var c=document.forms["form1"]["uname"].value;
if(c==null ||c=="")
{
alert("enter a username");
return false;
}

y=document.forms["form1"]["pwd"].value;
if(y==null ||y=="")
{
alert("enter a password");
return false;
}


}
</script>
</head>
<body>
<div class="whole">

<div class="msg">
<p>Welcome to Chamber of secrets buddy! please login to play</p>
</div>

<div class="frm">
<form name="form1" action="login.php" method="post" onsubmit="return check()">

username:
<br><input type="text" name="uname" size="30" />
<br>
password:
<br><input type="password" name="pwd" size="30" />
<br>
<br>


<input class="sub" type="submit" value="let me play" />
</form>
</div>

<div class="msg2">
<p>If you are new,then <a href="signupform.php">click here  to sign up</a></p>
</div>

</div>
<div class="follow">
<a href="https://www.facebook.com/pages/Chamber-of-secrets/201074656666808" target="_blank"><img src="images/follow.jpg" width="100" height="50"></a>
</div>
<div class="lead">
<a href="leaderboard.php" target="_blank"><img src="images/leaderboard.png"></a>
</div>
</body>
</html>
