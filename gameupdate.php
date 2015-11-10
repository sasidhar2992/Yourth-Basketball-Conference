<?php
session_start();
$Game_number=$_POST['Game_number'];
$Match_date = $_POST['Match_date'];
$Match_time = $_POST['Match_time'];
$Stadium=$_POST['Stadium'];
$Home_team = $_POST['Home_team'];
$Away_team = $_POST['Away_team'];
$_SESSION['error'] = ""; 
$link = mysqli_connect("courses","cs566105","4hFQi5TJT","cs566105");
$result = mysqli_query( $link,"update Games set Match_date='$Match_date',Match_time='$Match_time',Stadium='$Stadium',Home_team='$Home_team',Away_team='$Away_team' where Game_number='$Game_number'");
header("LOCATION:GamesPage.php");
?>

