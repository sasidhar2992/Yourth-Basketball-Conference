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
        <th scope="col"><a href="AboutYBC.html">About YBC</a></th><!--navigates to the aboutybc page--> 
		<th scope="col"><a href="MainLoginPage.html" target="_blank">Login</a></th><!-- navigates to the login page-->
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
<p style="font-family:Georgia;font-size:25px;color:Green;text-align:center"><b>Teams</b></p><br>
<?php
		DEFINE ('DB_USER', 'cs566105');           //connection attributes to the database//
        DEFINE ('DB_PASSWORD', '4hFQi5TJT');
        DEFINE ('DB_HOST','courses');
        DEFINE ('DB_NAME','cs566105');
		$dbconnection = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)//establishes the connection//
        or die ('Could not connect to MySql:' .mysqli_connect_error() );
        mysqli_set_charset($dbconnection, 'utf8');
        $query = "select * from Teams";//data is displayed  based on the query//
        $result = mysqli_query ($dbconnection, $query);
		if (mysqli_num_rows($result) > 0) 
        {
			echo "<table width='95%' border='0' align='center' height='60%'
		<tr bgcolor='LightGrey'>
		<th>ID</th>
		<th>Team Name</th>
		<th>Description</th>
		<th>Matches Played</th>
		<th>Matches Won</th>
		<th>Matches Lost</th>
		<th>No Results/Tie</th>
		</tr>";
		
         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))//fetches the data from the database//
		{
		echo "<tr align='center' bgcolor='white'>";
        echo "<td>" .$row['Team_id']. "</td>";
		echo "<td>" .$row['Team_name']. "</td>";
		echo "<td>" .$row['Description']. "</td>";
		echo "<td>" .$row['Matches_Played']. "</td>";
		echo "<td>" .$row['Matches_won']. "</td>";
		echo "<td>" .$row['Matches_lost']. "</td>"; 
		echo "<td>" .$row['No_results']. "</td>"; 
		echo "</tr>";
		}
		echo"</table>";
		}
		
		 else
{
 echo "Query didn't return any result";
}
?>
<p style= " font-family:Calibri; color: black; text-align:center; font-size:16px">We have <a href="CoachesPage.php"><Font face="Calibri"  color="Green"  size="3" ><b>Coaches</b></font></a> guiding their respective teams and <a href="PlayersPage.php"><Font face="Calibri"  color="Green"  size="3" ><b>Players</b></font></a> playing for their respective teams.
</body>
</html>