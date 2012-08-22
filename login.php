<?php 
session_start();

//connect to db
include('config.php');

if(isset($_SESSION['logged']))
{

$uname=$_SESSION['uname'];
goto levelc;

}

else
{

//get pwd and check

$uname=$_POST["uname"];
$pwd=$_POST["pwd"];


$check=mysql_query("select pwd from users where uname='$uname' ");

$cnt = mysql_fetch_array($check);


//if pwd correct

if($pwd==$cnt[0])
{
$_SESSION['uname']=$uname;
$_SESSION['logged']=1;
$_SESSION['err']=0;
goto levelc;
}

else
{
mysql_close($con);
header("location:loginform2.php");
}

}





levelc:

$lev=mysql_query("select level from users where uname='$uname' ");

$level = mysql_fetch_array($lev);
$_SESSION['level']=$level[0];
//redirect to that page
//all levels

if($level[0]==0)
{

header("location:clicktoenter.php");
}



if($level[0]==1)
{

header("location:stare.php");
}

if($level[0]==2)
{

header("location:google.php");
}


if($level[0]==3)
{

header("location:value.php");
}


if($level[0]==4)
{

header("location:level4.php");
}


if($level[0]==5)
{

header("location:level5.php");
}

if($level[0]==6)
{

header("location:omc.php");
}

if($level[0]==7)
{

header("location:fatherofcomputer.php");
}

if($level[0]==8)
{

header("location:river.php");
}

if($level[0]==9)
{

header("location:double.php");
}

if($level[0]==10)
{

header("location:play.php");
}

if($level[0]==11)
{

header("location:rotateit.php");
}

if($level[0]==12)
{

header("location:pharoah.php");
}

if($level[0]==13)
{

header("location:dreamlevel4.php");
}

if($level[0]==14)
{

header("location:oneisadoctorotheris.php");
}

if($level[0]==15)
{
header("location:translate.php");
}




if($level[0]==16)
{

header("location:thanks.php");
}


echo "you are not permitted to view this file(also 3)..so your session is destroyed..CLOSE THE BROWSER AND OPEN ONCE AGAIN TO PLAY<br><br<br>";

mysql_close($con);


?>