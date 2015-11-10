<html>
	<head>
		<title>Swarna Venkata Naga Sasidhar reddy</title>
		<!--<style type="text/css"/>-->
	</head>
	
		<body background="YBClanding5.jpg">	
<p style="text-align:right"><a href="https://twitter.com/YBC_SmallPark" target="_blank"><button type="button"><img src="twitter.jpg" width="15" height="15" alt="follow icon"/><b>follow</b>@<b>YBC</b></button></a></p>					
		<br><br><br><br><br><br><br><br><br>
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
</marquee><br><br><br><br><br><br>

<form action="MainLoginPage.php" method="post">
	 <p style="text-align:center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b> USER ID:</b> <input type="text" name="username">*<br>
	 <p style="text-align:center"><b> PASSWORD:</b> <input type="password" name="password">*<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <button style="align:center; color:green" onclick="window.open(setit.options[setit.selectedIndex].value)"><b>Login</b></button>
</p></form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')                             
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		if ($username=="admin1@ybc.in" && $password=="12345678")                                   
		{
		header("LOCATION:AdminLoginPage.php");
		}
		elseif ($username=="referee1@ybc.in" && $password=="qwerty123")                                   
		{
		header("LOCATION:RefereeLoginPage.php");
		}
		elseif ($username=="referee2@ybc.in" && $password=="qwerty1234")                                   
		{
		header("LOCATION:RefereeLoginPage.php");
		}
		elseif ($username=="referee3@ybc.in" && $password=="qwerty12345")                                   
		{
		header("LOCATION:RefereeLoginPage.php");
		}
		elseif ($username=="referee4@ybc.in" && $password=="qwer123456")                                   
		{
		header("LOCATION:RefereeLoginPage.php");
		}
		elseif ($username=="referee5@ybc.in" && $password=="qwerty5678")                                   
		{
		header("LOCATION:RefereeLoginPage.php");
		}
		else                                                                                                                                                                                                                                                                                                         
		{
		echo "<script>alert('Invalid login credentials')</script>";
		}
		}
?>
</body>
</html>
