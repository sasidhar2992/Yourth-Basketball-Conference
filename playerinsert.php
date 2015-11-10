<?php
session_start();
$Player_id = $_POST['Player_id'];
$Player_name = $_POST['Player_name'];
$Team_id = $_POST['Team_id'];
$Player_address = $_POST['Player_address'];
$Home_phno = $_POST['Home_phno'];
$Player_email = $_POST['Player_email'];
$_SESSION['error'] = ""; 
$link = mysqli_connect("courses","cs566105","4hFQi5TJT","cs566105");
$result = mysqli_query( $link,"insert into Players values('$Player_id','$Player_name','$Team_id','$Player_address','$Home_phno','$Player_email')");
header("LOCATION:PlayersPage.php");
?>

