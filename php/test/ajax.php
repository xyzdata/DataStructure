<?php 

$q=$_GET["q"];

// var_dump($_GET);
// echo "{$q}";
// exit();

$con = mysqli_connect('localhost','root','123456','dsqcx');
if (!$con){
	die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"dsqcx");
// $sql="SELECT * FROM admin WHERE id = '".$q."'";
$sql="SELECT * FROM admin WHERE id = '{$q}'";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>id</th>
<th>super name</th>
<th>super role</th>
<th>super rights</th>
<th>add time</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['sname'] . "</td>";
echo "<td>" . $row['srole'] . "</td>";
echo "<td>" . $row['srights'] . "</td>";
echo "<td>" . $row['addtime'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);



 ?>