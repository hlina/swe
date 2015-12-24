<?php 
session_start();
echo "Logging in " . $_SERVER['REMOTE_USER']; 

include "../open_db.php";
$result = mysql_query("SELECT * FROM Person WHERE email='" . $_SERVER['REMOTE_USER'] . "@seas.upenn.edu'");
if($result === false) {
	var_dump(mysql_error());
}
if (mysql_num_rows($result) != 0) {
	$_SESSION['user'] = mysql_fetch_array($result); // save the result row in array form
?>
	<META HTTP-EQUIV="Refresh" Content="0; URL=https://fling.seas.upenn.edu/~swe/cgi-bin">
<?
}
else {
?>
	<p>The email you entered does not exist in our database.  Please try again.</p>
<?
}
include "../close_db.php";

?>