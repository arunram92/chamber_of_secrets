<?php
session_start();
$_SESSION['enter']=1;
header('Location:answer.php');
?>