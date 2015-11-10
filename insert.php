<?php
		DEFINE ('DB_USER', 'cs566105');
        DEFINE ('DB_PASSWORD', '4hFQi5TJT');
        DEFINE ('DB_HOST','courses');
        DEFINE ('DB_NAME','cs566105');
		$dbconnection = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
        or die ('Could not connect to MySql:' .mysqli_connect_error() );
        mysqli_set_charset($dbconnection, 'utf8');
        $sql="INSERT INTO Teams (Team_id, Team_name, Description, Matches_Played, Matches_won, Matches_lost, No_results)";
VALUES
('$_POST[Team id]','$_POST[Team name]','$_POST[Description]', '$_POST[Matches Played]', '$_POST[Matches won]', '$_POST[Matches lost]', '$_POST[Noresults/Tie]');

if (!mysqli_query($dbconnection,$sql))
  {
  die('Error: ' . mysqli_error($dbconnection));
  }
echo "1 record added";
{
?>