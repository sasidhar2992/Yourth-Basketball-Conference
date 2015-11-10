<?php
session_start();
$Coach_id = $_POST['Coach_id'];
$Coach_name = $_POST['Coach_name'];
$Team_id = $_POST['Team_id'];
$Coach_address = $_POST['Coach_address'];
$Coach_phno = $_POST['Coach_phno'];
$email = $_POST['email'];
$_SESSION['error'] = ""; 
$link = mysqli_connect("courses","cs566105","4hFQi5TJT","cs566105");
$result = mysqli_query( $link,"update Coach set Coach_name='$Coach_name',Team_id='$Team_id',Coach_address='$Coach_address',Coach_phno='$Coach_phno',email='$email' where Coach_id='$Coach_id'");
header("LOCATION:CoachesPage.php");
?>

