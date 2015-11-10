<?php
session_start();
$Game_number = $_POST['Game_number'];
$Home_team = $_POST['Home_team'];
$Points_home = $_POST['Points_home'];
$Away_team = $_POST['Away_team'];
$Points_away = $_POST['Points_away'];
$_SESSION['error'] = ""; 
$link = mysqli_connect("courses","cs566105","4hFQi5TJT","cs566105");
$result = mysqli_query( $link," update Games set Home_team='$Home_team', Points_home='$Points_home',Away_team='$Away_team', Points_away='$Points_away' where Game_number='$Game_number'");
header("LOCATION:GamesPage.php");
?>