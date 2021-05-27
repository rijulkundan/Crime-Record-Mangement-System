<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #002233;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #ff661a;
color: white;
}
tr:nth-child(even) {background-color: #80d4ff}
</style>
</head>
<body>
  


<table>
<tr>
<th>ID</th>
<th>POLICE STATION NAME</th>
<th>LOCATION</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "youtube");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, policename, location FROM viewpolice";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["policename"] . "</td><td>"
. $row["location"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

</body>
</html>