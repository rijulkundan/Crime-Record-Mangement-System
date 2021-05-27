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
<th>FIR ID</th>
<th>E-MAIL OF APPLICANT</th>
<th>NAME OF APPLICANT</th>
<th> PASSWORD OF APPLICANT</th>
<th>PHONE NUMBER OF APPLICANT</th>
<th>ADDRESS OF THE APPLICANT</th>
<th>RELATION WITH THE ACCUSED</th>
<th>ACCUSED NAME</th>
<th>CRIME TYPE</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "youtube");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, email, username, password, phone, address, relation, accused, crime FROM fir";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["username"] . "</td><td>" . $row["password"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["address"] . "</td><td>" . $row["relation"] . "</td><td>" . $row["accused"] . "</td><td>". $row["crime"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</body>
</html>