<?php
session_start();
$Referee_id = $_POST['Referee_id'];
$Referee_name = $_POST['Referee_name'];
$Referee_address = $_POST['Referee_address'];
$Referee_phno = $_POST['Referee_phno'];
$email = $_POST['email'];
$_SESSION['error'] = ""; 
$link = mysqli_connect("courses","cs566105","4hFQi5TJT","cs566105");
$result = mysqli_query( $link,"update Referee set Referee_name='$Referee_name',Referee_address='$Referee_address',Referee_phno='$Referee_phno',email='$email' where Referee_id='$Referee_id'");
header("LOCATION:RefereeesPage.php");
?>

