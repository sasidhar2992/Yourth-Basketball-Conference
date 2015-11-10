<?php
session_start();
$Team_id = $_POST['Team_id'];
$Team_name = $_POST['Team_name'];
$Description = $_POST['Description'];
$_SESSION['error'] = ""; 
$link = mysqli_connect("courses","cs566105","4hFQi5TJT","cs566105");
$result = mysqli_query( $link,"insert into Teams (Team_id,Team_name,Description) values('$Team_id','$Team_name','$Description')");
header("LOCATION:TeamsPage.php");
?>

