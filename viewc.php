<!DOCTYPE html>
<html>
<head>
<title>View Customers</title>
<link rel="stylesheet" type="text/css" href="viewc.css">
<header>Customers</header>
</head>
<body>
<table>
<tr>
<th>id</th>
<th>Firstame</th>
<th>lastname</th>
<th>Amount</th>

</tr>


<?php
$conn = mysqli_connect("localhost", "root", "", "company");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,firstname,lastname,Amount FROM myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

// output data of each row

while($row = $result->fetch_assoc()) {

echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"] . "</td><td>"
. $row["lastname"]. "</td><td>". $row["Amount"]. "</td></tr>";
}
echo "</table>";
} 

else { echo "0 results"; }
$conn->close();
?>
</table>

<form action="trans.php">
	<input type="submit" value="Add Money">	
</form>
<form action="First Page.php">
    <input type="submit" value="Back">
</form>




</body>
</html>