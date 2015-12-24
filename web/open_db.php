<?php
	//$con = mysql_connect("localhost", "root", "");
	$con = mysql_connect("fling.seas.upenn.edu", "swe", "gA434nw24");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("swe", $con);
	
?>