<?php
session_start();
$Referee_id = $_POST['Referee_id'];
$Referee_name = $_POST['Referee_name'];
$Referee_address = $_POST['Referee_address'];
$Referee_phno = $_POST['Referee_phno'];
$email = $_POST['email'];
$_SESSION['error'] = ""; 
$link = mysqli_connect("courses","cs566105","4hFQi5TJT","cs566105");
$result = mysqli_query( $link,"insert into Referee values('$Referee_id','$Referee_name','$Referee_address','$Referee_phno','$email')");
header("LOCATION:RefereePage.php");
?>

