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
<div class="err">
<p>your username and password does not match!</p>
</div>

<div class="msg">
<p>Welcome to chamber of secrtes buddy! please login to play</p>
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

</body>
</html>
