<?php
session_start();
$Team_id = $_POST['Team_id'];
$Team_name = $_POST['Team_name'];
$Description = $_POST['Description'];
$Matches_Played = $_POST['Matches_Played'];
$Matches_won = $_POST['Matches_won'];
$Matches_lost = $_POST['Matches_lost'];
$No_results = $_POST['No_results'];
$_SESSION['error'] = ""; 
$link = mysqli_connect("courses","cs566105","4hFQi5TJT","cs566105");
$result = mysqli_query( $link,"update Teams set Team_name='$Team_name',Description='$Description',Matches_Played='$Matches_Played',Matches_won='$Matches_won',Matches_lost='$Matches_lost',No_results='$No_results' where Team_id='$Team_id'");
header("LOCATION:TeamsPage.php");
?>

