<?php 
include("open_db.php");?>
<?php
$result = mysql_query("SELECT * FROM Person WHERE email='" . $_POST['email']. "'");
$result2 = mysql_query("SELECT * FROM Pending WHERE email='" . $_POST['email'] . "'");            
echo $_POST['email']. " ";
echo $result. " ";
echo mysql_num_rows($result). " ";
echo $result2. " ";
echo mysql_num_rows($result2);
if (mysql_num_rows($result) != 0) { ?>
	<META HTTP-EQUIV="Refresh" Content="0; URL=https://fling.seas.upenn.edu/~swe/cgi-bin/members/member.php">
<?php } 
else if (mysql_num_rows($result2) != 0) {
	echo "Your email is in review.";
}
else {
	$sql="INSERT INTO Pending (email, year) VALUES ('$_POST[email]','$_POST[year]')";
	if (!mysql_query($sql,$con)) {
		die('Error: ' . mysql_error());
    }
    // send email to admin: THERE SHOULD ONLY BE ONE
    $query = "SELECT * FROM Person WHERE is_admin=true";
    $result = mysql_query($query) or die('Error, query failed');
    if(mysql_num_rows($result) != 0){
        $rarr = mysql_fetch_array($result);
        $to = $rarr['email'];
    }
    $to = "hlina@seas.upenn.edu"; // hardcode the email, multiple people may be admin
    $subject = "Penn SWE: Request to join website";
     
    $body = $_POST['email'] . " (" . $_POST['year'] . ") has requested to join Penn SWE";
    //$headers = 'From: swe@seas.upenn.edu' . "\r\n" .
    //'Reply-To: swe@seas.upenn.edu' . "\r\n" . // changeable..should be noreply
    //'X-Mailer: PHP/' . phpversion();
    
    // TODO: CHECK THIS WHEN UPLOAD
    mail($to, $subject, $body);//, $headers);
    echo "Thanks for your interest in Penn SWE!  We will review your submission and send you an email when you have been added to our database.";
}
include("close_db.php"); ?>