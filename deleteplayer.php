<html>
	<head>
		<title>Group proj</title>
		<!--<style type="text/css"/>-->
	</head>
	
		<body background="YBClanding5.jpg">
		<br><br><br><br><br>
		<br><br><br><br><br><br><br>
<p style= "text-align:center; font-family:Georgia; color:Green; font-size:24px">&nbsp&nbsp&nbsp&nbsp<b>Delete Player</b>
<p style="text-align:center;">select the Player.id:</p>
<?php 
DEFINE ('DB_USER', 'cs566105'); //connects to the user
DEFINE ('DB_PASSWORD', '4hFQi5TJT');
DEFINE ('DB_HOST','courses');
DEFINE ('DB_NAME','cs566105'); //connects to the database
//make connection
$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
or die ('Could not connect to MySql:' .mysqli_connect_error() );
//set encoding
mysqli_set_charset($dbc, 'utf8');
//define the query
$q = "select Player_id from Players ";
//run the query
$r = @mysqli_query($dbc,$q);
//if the query ran correctly, display the results in a table
if ($r)
{
echo '<form align="center" method="post"> ';
echo '<select name="employee">';
//fetch and print each record or row
while ($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
{
echo '<option value=" ';
echo $row["Player_id"];
echo ' " > ';
echo $row["Player_id"];
echo '</option>';
}
//close the selection
echo '</select>';
echo '<br><input style="color:Green" type="submit" name="submit" value="Delete"> <br>';
echo '</form>';
mysqli_free_result($r);
}//end if clause
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$own = trim($_POST['employee']); //trim is probably not needed here because
//it is coming from a dropdown that is pulled from the db
 //just to demonstrate
$q = "delete from Players where Player_id='$own'";
$r = @mysqli_query ($dbc, $q); // Run the query.
if($r>0)
{
echo "one record affected. Table modified";
}
else
{
echo "coundn't modify";
}
}
?>
</body>
</html>