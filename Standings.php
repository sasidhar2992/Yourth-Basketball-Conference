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
        <th scope="col"><a href="MainScreen.html">Home</a></th><!-- navigates to the home screen-->
        <th scope="col"><a href="TeamsPage.php">Teams</a> </th><!-- navigates to the teams page-->
		<th scope="col"><a href="GamesPage.php">Games</a></th><!--navigates to the games page-->
        <th scope="col"><a href="Standings.php">Standings</a> </th><!--navigates to the standings page-->
        <th scope="col"><a href="AboutYBC.html">About YBC</a></th><!--navigates to the aboutybc page-->
		<th scope="col"><a href="MainLoginPage.html" >Login</a></th><!-- navigates to the login page-->
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
</marquee><br><br><br><br>

<p style="font-family:Georgia;font-size:25px;color:Green;text-align:center"><b>Standings</b></p>
<?php
		DEFINE ('DB_USER', 'cs566105');//connection attributes to the database//
        DEFINE ('DB_PASSWORD', '4hFQi5TJT');
        DEFINE ('DB_HOST','courses');
        DEFINE ('DB_NAME','cs566105');
		$dbconnection = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)//establishes the connection//
        or die ('Could not connect to MySql:' .mysqli_connect_error() );
        mysqli_set_charset($dbconnection, 'utf8');
        $query = "select Team_name, Matches_Played, Matches_won, Matches_lost, No_results from Teams order by (((Matches_won) * 3) + ((No_results) *1) - ((Matches_lost) * 0.5)) DESC ";
        $result = mysqli_query ($dbconnection, $query);//data is displayed  based on the query//
		
		if (mysqli_num_rows($result) > 0) 
        {
			echo "<table width='80%' border='0' align='center' height='40%' 
		<tr bgcolor='LightGrey'>
		<th>Team Name</th>
		<th>Matches Played</th>
		<th>Matches Won</th>
		<th>Matches Lost</th>
		<th>No Results/Tie</th>
		<th>Points</th>
		</tr>";
		
         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr align='center' bgcolor='white'>";
		echo "<td>" .$row['Team_name']. "</td>";
		echo "<td>" .$row['Matches_Played']. "</td>";
		echo "<td>" .$row['Matches_won']. "</td>";
		echo "<td>" .$row['Matches_lost']. "</td>"; 
		echo "<td>" .$row['No_results']. "</td>";  
		echo "<td>" .(($row['Matches_won'] * 5) + ($row['No_results'] * 2.5) - ($row['Matches_lost'] * 1)). "</td>";
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
