<?php
session_start();


include('config.php');  
$uname=$_SESSION['uname'];
$ans=$_POST["answer"];
$lev=$_SESSION['level'];
$ansarray=array("monalisa","chromium","2.71","kota","kirloskar","a","adalovelace","nokianvirta","russellpeters","williamwallace","beezlebub","saqqara","apache","gunsandroses","pelos","pe:los","gunsnroses");

if($_SESSION['level']==0)
{
mysql_query("UPDATE users SET level='1' where uname='$uname' ");
$_SESSION['level']=1;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

echo '<script type="text/javascript">;
location.href="stare.php" ';
echo '</script>';

}




if($ans!=null)
{


if($lev==1)
{

if(strcmp($ans,$ansarray[0])==0)
{
mysql_query("UPDATE users SET level='2' where uname='$uname' ");
$_SESSION['level']=2;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

echo '<script type="text/javascript">;
location.href="google.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}
}

if($lev==2)
{
if(strcmp($ans,$ansarray[1])==0)
{
mysql_query("UPDATE users SET level='3' where uname='$uname' ");
$_SESSION['level']=3;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="value.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}




}

if($lev==3)
{
if(strcmp($ans,$ansarray[2])==0)
{
mysql_query("UPDATE users SET level='4' where uname='$uname' ");
$_SESSION['level']=4;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="level4.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}


}

if($lev==4)
{
if(strcmp($ans,$ansarray[3])==0)
{
mysql_query("UPDATE users SET level='5' where uname='$uname' ");
$_SESSION['level']=5;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="level5.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}

}



if($lev==5)
{
if(strcmp($ans,$ansarray[4])==0)
{
mysql_query("UPDATE users SET level='6' where uname='$uname' ");
$_SESSION['level']=6;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="omc.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}


}

if($lev==6)
{
$check=mysql_query("select mob from users where uname='$uname' ");

$cnt = mysql_fetch_array($check);
if(strcmp($ans,$cnt[0])==0)
{
mysql_query("UPDATE users SET level='7' where uname='$uname' ");
$_SESSION['level']=7;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="fatherofcomputer.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}


}

if($lev==7)
{
if(strcmp($ans,$ansarray[6])==0)
{
mysql_query("UPDATE users SET level='8' where uname='$uname' ");
$_SESSION['level']=8;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="river.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}
}

if($lev==8)
{
if(strcmp($ans,$ansarray[7])==0)
{
mysql_query("UPDATE users SET level='9' where uname='$uname' ");
$_SESSION['level']=9;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="double.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}



}

if($lev==9)
{
if(strcmp($ans,$ansarray[8])==0)
{
mysql_query("UPDATE users SET level='10' where uname='$uname' ");
$_SESSION['level']=10;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="play.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}



}


if($lev==10)
{
if(strcmp($ans,$ansarray[9])==0)
{
mysql_query("UPDATE users SET level='11' where uname='$uname' ");
$_SESSION['level']=11;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="rotateit.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}



}


if($lev==11)
{
if(strcmp($ans,$ansarray[10])==0)
{
mysql_query("UPDATE users SET level='12' where uname='$uname' ");
$_SESSION['level']=12;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="pharoah.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}



}

if($lev==12)
{

if(strcmp($ans,"isolemnlysweariamuptonogood")==0)
{
echo '<script type="text/javascript">;
location.href="marauder.php" ';
echo '</script>';

}



if(strcmp($ans,$ansarray[11])==0)
{
mysql_query("UPDATE users SET level='13' where uname='$uname' ");
$_SESSION['level']=13;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="dreamlevel4.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}



}



if($lev==13)
{
if(strcmp($ans,$ansarray[12])==0)
{
mysql_query("UPDATE users SET level='14' where uname='$uname' ");
$_SESSION['level']=14;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="oneisadoctorotheris.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}



}

if($lev==14)
{
if((strcmp($ans,$ansarray[13])==0)||(strcmp($ans,$ansarray[16])==0))
{
mysql_query("UPDATE users SET level='15' where uname='$uname' ");
$_SESSION['level']=15;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="translate.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}



}


if($lev==15)
{
if((strcmp($ans,$ansarray[14])==0)||(strcmp($ans,$ansarray[15])==0))
{
mysql_query("UPDATE users SET level='16' where uname='$uname' ");
$_SESSION['level']=16;
mysql_query("UPDATE users
SET time=NOW() where uname='$uname' ");

//change
echo '<script type="text/javascript">;
location.href="thanks.php" ';
echo '</script>';

}
else
{
echo '<script type="text/javascript">;
location.href="error.php" ';
echo '</script>';
}



}






}
echo "either you dont have permission or not logged in";
mysql_close($con);
?>