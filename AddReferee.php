<html>
	<head>
		<title>Group project</title>
		<!--<style type="text/css"/>-->
	</head>
	
		<body background="YBClanding5.jpg">
		<br><br><br><br><br>
		<br><br><br><br><br><br><br>
<p style= "text-align:center; font-family:Georgia; color:Green; font-size:24px">&nbsp&nbsp&nbsp&nbsp<b>New Referee</b>
<form action="<?php $_PHP_SELF ?>" method="post"> <!-- php file that connects to the database -->
<p style="text-align:center"> <b>Referee id:</b> <input type="text" name="Referee_id" size="5"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Referee Name:</b> <input type="text" name="Referee_name"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Address:</b>&nbsp <input type="text" name="Referee_address" style="width: 200px; height: 50px"/><br>&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Phone Number:</b> <input type="text" name="Referee_phno" size="14"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Email.id:</b> <input type="email" name="email" size="25">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<p style= "text-align:center">&nbsp&nbsp&nbsp&nbsp <button style="color: Green"><b>Submit</b></button>
</p></form>
</body>
<?php
$Referee_id = $_POST['Referee_id'];
$Referee_name = $_POST['Referee_name'];
$Referee_address = $_POST['Referee_address'];
$Referee_phno = $_POST['Referee_phno'];
$email = $_POST['email'];
$_SESSION['error'] = ""; 
$link = mysqli_connect("courses","cs566105","4hFQi5TJT","cs566105");
if($Referee_id=="")
{
echo "<script>alert('Invalid login credentials')</script>";
}
else
{
$result = mysqli_query( $link,"insert into Referee values('$Referee_id','$Referee_name','$Team_name','$Referee_address','$Referee_phno','$email')");
echo "one record affected. Table modified";
}
?>
</html>