<html>
<head>
<link rel="stylesheet" href="stylesheets/table.css" />


</head>
<body>

<div class="welcome">
<h1>leaderboard</h1>
</div>


<?php

include('config.php');

$leader=mysql_query("select * from users ORDER BY level DESC,time asc");
?>


<?php

echo "<div class=\"imagetable\">
<table border='8' width='700'>
<tr>
<th>rank</th>
<th>name</th>
<th>college</th>
</tr>";
$i=0;
while($ans=mysql_fetch_array($leader))
{
if($ans['uname']!="arun" && $ans['uname']!="s" && $ans['uname']!="merlin" && $ans['uname']!="mohit")
{
$i=$i+1;

echo "<tr>";
echo "<td><b>" .$i."</b></td>";
echo "<td><b>" .$ans['uname']."</b></td>";
echo "<td><b>" .$ans['coll']."</b></td>";
echo "</tr>";
}
}
mysql_close($con);

?>
</div>

</html>