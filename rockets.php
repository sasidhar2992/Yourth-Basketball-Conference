<html>
	<head>
		<title>Group Project</title>
		<!--<style type="text/css"/>-->
	</head>
	
		<body background="YBClanding5.jpg">
		<p style="text-align:right"><a href="https://twitter.com/YBC_SmallPark" target="_blank"><button type="button"><img src="twitter.jpg" width="15" height="15" alt="follow icon"/><b>follow</b>@<b>YBC</b></button></a></p>			
		<br><br><br><br><br><br><br><br><br>
		<tr>
    <td class="links"><table width="100%" height="5%">
      <tr bgcolor="LightGrey">
        <th scope="col"><a href="MainScreen.html">Home</a></th><!-- navigates to the home screen-->
        <th scope="col"><a href="TeamsPage.php">Teams</a> </th><!-- navigates to the teams page-->
		<th scope="col"><a href="GamesPage.php">Games</a></th><!--navigates to the games page-->
        <th scope="col"><a href="Standings.php">Standings</a> </th><!--navigates to the standings page-->
        <th scope="col"><a href="AboutYBC.html">About YBC</a></th><!--navigates to the standings page-->
		<th scope="col"><a href="MainLoginPage.html" target="_blank">Login</a></th><!-- navigates to the login page-->
  </tr>
  </table></td>
  </tr>
		<marquee behavior="ALTERNATE" bgcolor="White"><a href="rockets.php"><img src="rockets.jpg" width="50" height="50" alt="rockets" /></a></marquee><br><br><br>
<p style="font-family:Georgia;font-size:25px;color:Green;text-align:center"><b>Rockets</b></p><br>
<p style="font-family:Georgia;font-size:15px;color:Green;text-align:center"><b>Coaches</b></p>
<?php
		DEFINE ('DB_USER', 'cs566105');//connection attributes to the database//
        DEFINE ('DB_PASSWORD', '4hFQi5TJT');
        DEFINE ('DB_HOST','courses');
        DEFINE ('DB_NAME','cs566105');
		$dbconnection = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)//establishes the connection//
        or die ('Could not connect to MySql:' .mysqli_connect_error() );
        mysqli_set_charset($dbconnection, 'utf8');
        $query = "select * from Coach where Team_id='RKT'";//data is displayed  based on the query//
        $result = mysqli_query ($dbconnection, $query);
		if (mysqli_num_rows($result) > 0) 
        {
			echo "<table width='75%' border='0' align='center' height='10%' 
		<tr bgcolor='LightGrey'>
		<th>ID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Phone.no</th>
		<th>Email</th>
		</tr>";
		
         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))//fetches the data from the databse//
		{
		echo "<tr align='center' bgcolor='white'>";
        echo "<td>" .$row['Coach_id']. "</td>";
		echo "<td>" .$row['Coach_name']. "</td>";
		echo "<td>" .$row['Coach_address']. "</td>";
		echo "<td>" .$row['Coach_phno']. "</td>";
		echo "<td>" .$row['email']. "</td>"; 
		echo "</tr>";
		}
		echo"</table>";
		}
		 else 
{
 echo "Query didn't return any result";
}
?>
<p style="font-family:Georgia;font-size:15px;color:Green;text-align:center"><b>Players</b></p>
<?php
		DEFINE ('DB_USER', 'cs566105');
        DEFINE ('DB_PASSWORD', '4hFQi5TJT');
        DEFINE ('DB_HOST','courses');
        DEFINE ('DB_NAME','cs566105');
		$dbconnection = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
        or die ('Could not connect to MySql:' .mysqli_connect_error() );
        mysqli_set_charset($dbconnection, 'utf8');
        $query = "select * from Players where Team_id='RKT'";
        $result = mysqli_query ($dbconnection, $query);
		if (mysqli_num_rows($result) > 0) 
        {
			echo "<table width='55%' border='0' align='center' height='70%' 
		<tr bgcolor='LightGrey'>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		</tr>";
		
         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr align='center' bgcolor='white'>";
        echo "<td>" .$row['Player_id']. "</td>";
		echo "<td>" .$row['Player_name']. "</td>";
		echo "<td>" .$row['Player_email']. "</td>"; 
		echo "</tr>";
		}
		echo"</table>";
		}
		 else 
{
 echo "Query didn't return any result";
}
?>
</body>
</html>