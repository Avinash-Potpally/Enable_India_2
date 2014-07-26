<?php
$con=mysqli_connect("example.com","peter","abc123","my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT name,count(name) FROM user_info,mentor_mentee where role="+'mentor'+" and id="mt_id";");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Number of Mentees</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['count(name)'] . "</td>";
  echo "</tr>";
}

echo "</table>";

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Phone</th>
</tr>";

$result = mysqli_query($con,"SELECT id,name,phone,qualification FROM user_info where role="+'mentor'+";");

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['qualification'] . "</td>";
  echo "</tr>";
}
echo "</table>";
$result = mysqli_query($con,"SELECT id,name,phone,qualification FROM user_info where role="+'mentee'+";");

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['language'] . "</td>";
  echo "</tr>";
}
mysqli_close($con);
?>