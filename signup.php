<html>
<body>
<?php



$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$mob=$_POST["mob"];
$email=$_POST["email"];
$coll=$_POST["coll"];
if($uname!=null)
{

//connect to db
include('config.php');


//get uname and check

$check=mysql_query("select uname from users where uname='$uname' ");


//if exists redirect to sign up and a msg
$count=1;
while($cnt = mysql_fetch_array($check))
{
$count++;
}
if($count!=0)
{

echo("<script>location.href='signupform2.php'</script>"); 

}
//if new store in database with level=0;

else
{
session_start();




mysql_query("INSERT INTO users 
VALUES ('$uname', '$pwd', '$mob','$email','$coll',0,NOW())");

//store session uname and level
$_SESSION['uname']=$uname;
$_SESSION['logged']=1;
$_SESSION['err']=0;
//find level

//$lev=mysql_query("select level from users where uname='$uname' ");

//$level = mysql_fetch_array($lev);
$_SESSION['level']=0;


//go to level one
echo("<script>location.href='clicktoenter.php'</script>"); 


}

mysql_close($con);

}
else
{
echo("<script>location.href='index.php'</script>"); 
}
?>
</body>
</html>
