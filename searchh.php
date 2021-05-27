<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
  


<table>
<tr>
<th>ID</th>
<th>E-MAIL OF CRIMINAL</th>
<th>NAME OF CRIMINAL</th>
<th> PASSWORD OF CRIMINAL</th>
<th>PHONE NUMBER OF CRIMINAL</th>
<th>CITY </th>
<th>HEIGHT</th>
<th>WEIGHT</th>
<th>ADDRESS</th>
<th>COUNTRY</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "youtube");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, email, username, password, phone, city, height, weight, address, country FROM criminal";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["username"] . "</td><td>" . $row["password"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["city"] . "</td><td>" . $row["height"] . "</td><td>" . $row["weight"] . "</td><td>" . $row["address"] . "</td><td>". $row["country"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</body>
</html>