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
$result = mysqli_query( $link,"insert into Coach values('$Coach_id','$Coach_name','$Team_id','$Coach_address','$Coach_phno','$email')");
header("LOCATION:CoachesPage.php");
?>

