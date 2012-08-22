<html>
<head>
<link rel="stylesheet" href="stylesheets/table.css" />


</head>
<body>

<div class="welcome">
<h1>leaderboard</h1>
</div>

<div class="message">
<h4>This is just a tutorial..so dont worry about your rank buddy..Main event starts on march 1st..</h4>
</div>

<?php

include('config.php');

$leader=mysql_query("select * from users ORDER BY level DESC,time asc");
?>


<?php

echo "<div class=\"imagetable\">
<table border='8' width='700'>
<tr>
<th>name</th>
<th>college</th>
<th>level</th>
<th>email</th>
<th>mobile</th>
<th>time</th>
</tr>";

while($ans=mysql_fetch_array($leader))
{
echo "<tr>";
echo "<td><b>" .$ans['uname']."</b></td>";
echo "<td><b>" .$ans['coll']."</b></td>";
echo "<td><b>" .$ans['level']."</b></td>";
echo "<td><b>" .$ans['email']."</b></td>";
echo "<td><b>" .$ans['mob']."</b></td>";
echo "<td><b>" .$ans['time']."</b></td>";



echo "</tr>";
}

mysql_close($con);

?>
</div>

</html>
