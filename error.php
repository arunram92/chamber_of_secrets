<?php
session_start();


$err=$_SESSION['err'];

$_SESSION['err']=$err+1;
$mod=$err%6;

switch($mod)
{
case 5:echo'<img src="images/err1.jpg" width="500" height="500" />';
break;

case 2:echo'<img src="images/errors/girl.jpg" width="500" height="500" />';
break;

case 4:echo'<img src="images/errors/bush.jpg" width="500" height="500" />';
break;

case 1:echo'<img src="images/errors/three.jpg" width="500" height="500" />';
break;

case 3:echo'<img src="images/errors/player.jpg" width="500" height="500" />';
break;

case 6:echo'<img src="images/errors/getalife.jpg" width="500" height="500" />';
break;

default:
echo'<img src="images/err1.jpg" width="500" height="500" />';
}

?>