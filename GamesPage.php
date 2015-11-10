<html>
	<head>
		<title>Swarna Venkata Naga Sasidhar reddy</title>
		<!--<style type="text/css"/>-->
	</head>
	
		<body background="YBClanding5.jpg">
		<p style="text-align:right"><a href="https://twitter.com/YBC_SmallPark" target="_blank"><button type="button"><img src="twitter.jpg" width="15" height="15" alt="follow icon"/><b>follow</b>@<b>YBC</b></button></a></p>			
		<br></br><br></br><br></br><br></br><br>
		<tr>
    <td class="links"><table width="100%" height="5%">
      <tr bgcolor="LightGrey">
        <th scope="col"><a href="MainScreen.html">Home</a></th>
        <th scope="col"><a href="TeamsPage.php">Teams</a> </th>
		<th scope="col"><a href="GamesPage.php">Games</a></th>
        <th scope="col"><a href="Standings.php">Standings</a> </th>
        <th scope="col"><a href="AboutYBC.html">About YBC</a></th>
		<th scope="col"><a href="MainLoginPage.html" >Login</a></th>
  </tr>
  </table></td>
  </tr>
	<marquee behavior="ALTERNATE" ><a href="rockets.php"><img src="rockets.jpg" width="50" height="50" alt="rockets" /></a> &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="razors.php"><img src="razor.png" width="50" height="50" alt="razors" /></a>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<a href="avalanches.php"><img src="avalanche.jpg" width="50" height="50" alt="Avalanche" /></a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="wolf.php"><img src="wolf.jpg" width="50" height="50" alt="wolf" /></a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp
<a href="outsiders.php"><img src="outsiders.jpg" width="50" height="50" alt="outsiders" /></a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp 
<a href="aliens.php"><img src="aliens.png" width="50" height="50" alt="aliens" /></a>
</marquee><br><br>

<p style="font-family:Georgia;font-size:25px;color:Green;text-align:center"><b>Fixtures</b>
<p style="font-family:Georgia;font-size:12px;color:Grey;text-align:right"><i>All times are in Central Time</i></p>
<?php
		DEFINE ('DB_USER', 'cs566105');
        DEFINE ('DB_PASSWORD', '4hFQi5TJT');
        DEFINE ('DB_HOST','courses');
        DEFINE ('DB_NAME','cs566105');
		$dbconnection = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
        or die ('Could not connect to MySql:' .mysqli_connect_error() );
        mysqli_set_charset($dbconnection, 'utf8');
        $query = "select * from Games where Game_number<=12";
        $result = mysqli_query ($dbconnection, $query);
		if (mysqli_num_rows($result) > 0) 
        {
			echo "<table width='95%' border='0' align='center' height='60%' 
		<tr bgcolor='LightGrey'>
		<th>Game Number</th>
		<th>Date</th>
		<th>Time</th>
		<th>Stadium</th>
		<th>Home Team</th>
		<th>Points Home</th>
		<th>Away Team</th>
		<th>Points Away</th>
		</tr>";
		
         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr align='center' bgcolor='white'>";
        echo "<td>" .$row['Game_number']. "</td>";
		echo "<td>" .$row['Match_date']. "</td>";
		echo "<td>" .$row['Match_time']. "</td>";
		echo "<td>" .$row['Stadium']. "</td>";
		echo "<td>" .$row['Home_team']. "</td>";
		echo "<td>" .$row['Points_home']. "</td>";
		echo "<td>" .$row['Away_team']. "</td>";
		echo "<td>" .$row['Points_away']. "</td>";		
		echo "</tr>";
		}
		echo"</table>";
		}
		 else 
{
 echo "Query didn't return any result";
}
?>
<br><br>
<p style="font-family:Georgia;font-size:18px;color:Green;text-align:center"><b>Semi-Finals</b>
<p style="font-family:Georgia;font-size:12px;color:Grey;text-align:right"><i>All times are in Central Time</i></p>
<?php
		DEFINE ('DB_USER', 'cs566105');
        DEFINE ('DB_PASSWORD', '4hFQi5TJT');
        DEFINE ('DB_HOST','courses');
        DEFINE ('DB_NAME','cs566105');
		$dbconnection = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
        or die ('Could not connect to MySql:' .mysqli_connect_error() );
        mysqli_set_charset($dbconnection, 'utf8');
        $query = "select * from Games where Game_number=13 OR Game_number=14";
        $result = mysqli_query ($dbconnection, $query);
		if (mysqli_num_rows($result) > 0) 
        {
			echo "<table width='95%' border='0' align='center' height='20%'
		<tr bgcolor='LightGrey'>
		<th>Game Number</th>
		<th>Date</th>
		<th>Time</th>
		<th>Stadium</th>
		<th>Home Team</th>
		<th>Points Home</th>
		<th>Away Team</th>
		<th>Points Away</th>
		</tr>";
		
         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr align='center' bgcolor='white'>";
        echo "<td>" .$row['Game_number']. "</td>";
		echo "<td>" .$row['Match_date']. "</td>";
		echo "<td>" .$row['Match_time']. "</td>";
		echo "<td>" .$row['Stadium']. "</td>";
		echo "<td>" .$row['Home_team']. "</td>";
		echo "<td>" .$row['Points_home']. "</td>";
		echo "<td>" .$row['Away_team']. "</td>";
		echo "<td>" .$row['Points_away']. "</td>";		
		echo "</tr>";
		}
		echo"</table>";
		}
		 else 
{
 echo "Query didn't return any result";
}
?>
<br><br>
<p style="font-family:Georgia;font-size:18px;color:Green;text-align:center"><b>Finals</b>
<p style="font-family:Georgia;font-size:12px;color:Grey;text-align:right"><i>All times are in Central Time</i></p>
<?php
		DEFINE ('DB_USER', 'cs566105');
        DEFINE ('DB_PASSWORD', '4hFQi5TJT');
        DEFINE ('DB_HOST','courses');
        DEFINE ('DB_NAME','cs566105');
		$dbconnection = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
        or die ('Could not connect to MySql:' .mysqli_connect_error() );
        mysqli_set_charset($dbconnection, 'utf8');
        $query = "select * from Games where Game_number=15";
        $result = mysqli_query ($dbconnection, $query);
		if (mysqli_num_rows($result) > 0) 
        {
			echo "<table width='95%' border='0' align='center' height='10%';
		<tr bgcolor='LightGrey'>
		<th>Game Number</th>
		<th>Date</th>
		<th>Time</th>
		<th>Stadium</th>
		<th>Home Team</th>
		<th>Points Home</th>
		<th>Away Team</th>
		<th>Points Away</th>
		</tr>";
		
         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr align='center' bgcolor='white'>";
        echo "<td>" .$row['Game_number']. "</td>";
		echo "<td>" .$row['Match_date']. "</td>";
		echo "<td>" .$row['Match_time']. "</td>";
		echo "<td>" .$row['Stadium']. "</td>";
		echo "<td>" .$row['Home_team']. "</td>";
		echo "<td>" .$row['Points_home']. "</td>";
		echo "<td>" .$row['Away_team']. "</td>";
		echo "<td>" .$row['Points_away']. "</td>";		
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