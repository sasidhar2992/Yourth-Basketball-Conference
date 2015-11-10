<?php
$con=mysqli_connect("turing.cs.niu.edu","cs566105","4hFQi5TJT","cs566105");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM Referee");

echo "<table border='1'>
<tr>
<th>Referee_name</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Referee_name'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>