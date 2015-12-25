<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penn SWE Society of Women Engineers</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="form.js"></script>

</head>

    <!-- Slideshow -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#logform').hide();
        $('#signin').click(function() {
            $('#logform').show();
        });
        $("#cancel").click(function() {
            $('#logform').hide();
        });
        $("#signout").click(function() {
            window.location.replace("logout.php");
        });
        $("#submitted").click(function() {
            var x=document.forms["login-form"][0].value;
            var seas1 = x.indexOf("seas.upenn.edu");
            var y = document.forms["login-form"][1].value;
            var seas2 = y.indexOf("seas.upenn.edu");
            if ((x==null || x=="" || seas1 == -1)&&(y==null || y=="" || seas2 == -1)){
                alert("Please fill out the email field with your SEAS email.");
            }
        });
    });
    </script>

<body id="page-top" class="index">


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class = "navbar-nav">
                <li><img class="img-responsive" id = "logo" src="img/logo.png" alt="" height = "80px" width = "80px"></li>
                <li><a class="navbar-brand" href="index.php">Penn SWE</a></li>
                </ul>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <br>
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php" data-toggle="dropdown" class="dropdown-toggle">ABOUT<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="page-scroll"><a href="index.php#about">Vision</a></li>
                            <li class="page-scroll"><a href="index.php#board">Board</a></li>
                        </ul>
                    </li>
                    <li class="page-scroll">
                        <a href="events.php" data-toggle="dropdown" class="dropdown-toggle">EVENTS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="page-scroll"><a href="events.php#calendar">Upcoming Events</a></li>
                            <li class="page-scroll"><a href="events.php#programs">Annual Events</a></li>
                        </ul>
                    </li>
                    <li class="page-scroll">
                        <a href="events.php" data-toggle="dropdown" class="dropdown-toggle">GET INVOLVED<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="page-scroll"><a href="getinvolved.php#subscribe">Committees</a></li>
                            <li class="page-scroll"><a href="getinvolved.php#sponsorship">Join Listserv</a></li>
                        </ul>
                    </li>
                    <li class="page-scroll">
                        <a href="contact.php">SPONSORSHIP</a>
                    </li>
                    <li class = "">
                    <?php
                    if(isset($_SESSION['user'])) {?>
                        <a href="#" class="btn btn-info btn-xs" id = "signout"><span class="glyphicon glyphicon-search"></span> Sign Out</a>
                    <? }
                    else {?>
                        <a href="#" class="btn btn-info btn-xs" id = "signin"><span class="glyphicon glyphicon-search"></span> Sign In</a>
                    <?}?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <h3>Account for: <? echo $_SESSION['user']['email'] ?></h3>
                        <hr class="star-light">
                        <?if ($_SESSION['user']['is_admin']){?>
                            <a href="members.php" class="btn btn-default">Member Page</a>
                            <a href=https://docs.google.com/forms/d/1KJGq2kIB5_nTM1F8v0iTD1DbwHi64exKlWPkB9utoDw/viewform?usp=send_form class="btn btn-default">Attendance Form</a>
                        <?} else if($_SESSION['user']['is_board']) {?>
                            <a href=https://docs.google.com/forms/d/1KJGq2kIB5_nTM1F8v0iTD1DbwHi64exKlWPkB9utoDw/viewform?usp=send_form class="btn btn-default">Attendance Form</a>
                        <?}?>
                        <form name="login-form" class="form-horizontal" id = "logform" method="post" action="login.php">
                        <ul class="nav nav-tabs">
                        <li class="active"><a href="#info-tab" data-toggle="tab">Returning Member<i class="fa"></i></a></li>
                        <li><a href="#address-tab" data-toggle="tab">New Member<i class="fa"></i></a></li>
                        </ul>
                        <br>
                        <label class="col-xs-3 control-label">Penn SEAS Email Address</label>
                        <div class="col-xs-5">
                            <input type="email" class="form-control" id="email" name = "email" placeholder="SEAS email">
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="info-tab">
                                <div class="form-group">
                                </div>
                            </div>
                            <div class="tab-pane" id="address-tab">
                                <div class="form-group">
                                </div>
                                <div class="form-group">
                                    <div class="radio"><label><input name="year" type="radio" value = "2016">2016</label></div>
                                    <div class="radio"><label><input name="year" type="radio" value = "2017">2017</label></div>
                                    <div class="radio"><label><input name="year" type="radio" value = "2018">2018</label></div>
                                    <div class="radio"><label><input name="year" type="radio" value = "2019">2019</label></div>
                                    <div class="radio"><label><input name="year" type="radio" value = "Other">Other</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 15px;">
                            <div class="col-xs-5 col-xs-offset-3">
                                <a href = "#" class="btn btn-default" id = "cancel">Cancel</a>
                                <button type="submit" class="btn btn-default" id = "submitted">Submit</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-left">
            <div id="main">
            <? if(isset($_SESSION['user'])) {
            if ($_SESSION['user']['is_admin']){
        ?>
            <h2>Hi, Admin.</h2>

            <div class="left-content">
        <?
            if (isset($_POST['approve'])){
                include "open_db.php";
                $query = "SELECT * FROM Pending";
                $result = mysql_query($query) or die('Error, query failed');
                while($row = mysql_fetch_array($result)) {
                    $sql="INSERT INTO Person (email, year)
                    VALUES
                    ('$row[email]','$row[year]')";
                    if (!mysql_query($sql,$con)) {
                        die('Error: ' . mysql_error());
                    }
                }

                $sql = "DELETE FROM Pending";
                mysql_query($sql);

                if (!mysql_query($sql,$con)) {
                    die('Error: ' . mysql_error());
                }

                include("close_db.php");
        ?>
            <p>New members approved.</p>
            </div>
            <META HTTP-EQUIV="Refresh" Content="2; URL=https://fling.seas.upenn.edu/~swe/cgi-bin/members.php">
        <?
            }
            else if (isset($_POST['approve_select'])){
                if (!($_POST['pending'])){
                    echo("You didn't select anyone.");
                    echo("</div>");
                }
                else {
                    $selected = $_POST['pending'];
                    include "open_db.php";
                    $N = count($selected);

                    foreach ($selected as $select) {
                        $query = "SELECT * FROM Pending WHERE email='" . $select . "'";
                        $result = mysql_query($query) or die('Error, query failed');
                        while($row = mysql_fetch_array($result)) {
                        $sql="INSERT INTO Person (email, year)
                            VALUES
                            ('$row[email]','$row[year]')";
                            if (!mysql_query($sql,$con)) {
                                die('Error: ' . mysql_error());
                            }
                        }
                        $sql = "DELETE FROM Pending WHERE email='" . $select . "'";
                        mysql_query($sql);

                        if (!mysql_query($sql,$con)) {
                            die('Error: ' . mysql_error());
                        }
                    }
                    include("close_db.php");
                }
        ?>
            <p><?= $N ?> new members approved.</p>
            </div>
            <META HTTP-EQUIV="Refresh" Content="2; URL=https://fling.seas.upenn.edu/~swe/cgi-bin/members.php">
        <?
            }
            else if (isset($_POST['members']) && $_FILES['memberfile']['size'] > 0) {
                include "open_db.php";
                $fileType = $_FILES['memberfile']['type'];

                // make sure upload ONLY CSV files
                $mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
                if(in_array($_FILES['memberfile']['type'],$mimes)){

                $tmp  = $_FILES['memberfile']['tmp_name'];
                $handle = fopen($tmp, "r");
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($data);
                    if ($num == 2){
                        // first check if email exists
                        $query = "SELECT * FROM Person WHERE email='" . $data[0] . "'";
                        $result = mysql_query($query) or die(mysql_error());
                        if (mysql_num_rows($result) == 0) {
                            $sql = "INSERT into Person(email, year) values('$data[0]','$data[1]')";
                        }
                        else {
                            // TODO: check if year is correct
                            $sql = "UPDATE Person SET year='" . $data[1] . "' WHERE email='" . $data[0] . "'";
                        }
                    }
                    mysql_query($sql) or die(mysql_error());
                }
                fclose($handle);
                include("close_db.php");
        ?>
            <p>Members added.</p>
            </div>
            <META HTTP-EQUIV="Refresh" Content="2; URL=https://fling.seas.upenn.edu/~swe/cgi-bin/members.php">
        <?
            }
            else {
        ?>
            <p>Please upload only CSV files.</p>
            </div>
        <?
            }
        }
            else if (isset($_POST['points']) && $_FILES['eventfile']['size'] > 0)
            {
                include "open_db.php";
                $fileType = $_FILES['eventfile']['type'];

                // make sure upload ONLY CSV files
                $mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
                if(in_array($_FILES['eventfile']['type'],$mimes)){

                $tmp  = $_FILES['eventfile']['tmp_name'];
                $handle = fopen($tmp, "r");
                $allexist = true;
                $nonexistent = array();
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    // first check if email exists
                    $query = "SELECT * FROM Person WHERE email='" . $data[0] . "'";
                    $result = mysql_query($query) or die(mysql_error());
                    if (mysql_num_rows($result) == 0) {
                        // add to the nonexistent array
                        $nonexistent[] = $data[0];
                        echo $data[0] . "does not exist";
                        $allexist = false;
                    }
                    else {
                        //ADD POINTS TO OLD TOTAL
                        $oldpoints = $query['num_points'];
                        // $newpoints = $_POST['numpoints'];
                        $newpoints = $data[1];
                        $totalpoints = $oldpoints + $newpoints;
                        $sql = "UPDATE Person SET num_points='" . $totalpoints . "' WHERE email='" . $data[0] . "'";
                    }
                    mysql_query($sql) or die(mysql_error());
                }
                fclose($handle);
                include("close_db.php");
                /* Code for single person points below:
                $query = "SELECT * FROM Person WHERE email='" . $_POST['email'] . "'";
                $result = mysql_query($query);
                $check = true;
                if (mysql_num_rows($result) == 0) {
                    echo "Email not in database.";
                    $check = false;
                }
                else {
                    $arr_result = mysql_fetch_array($result);
                    $total_points = $arr_result['num_points'] + $_POST['numpoints'];
                    $query = "UPDATE Person SET num_points='" . $total_points . "' WHERE email='" . $_POST['email'] . "'";
                }*/

                if ($allexist) {
        ?>
            <p>Points added to all members.</p>
            </div>
            <META HTTP-EQUIV="Refresh" Content="2; URL=https://fling.seas.upenn.edu/~swe/cgi-bin/members.php">
        <?
                }
                else {
        ?>
            <p>Points added to all but the following, who do not exist in the database:</p>
            <ul>
        <?
            foreach ($nonexistent as $email) {
                echo "<li>" . $email . "</li>";
            }
        ?>
            </ul>
            </div>
        <?
                }
            }
            else {
        ?>
            <p>Please upload only CSV files.</p>
            </div>
            <!--<META HTTP-EQUIV="Refresh" Content="2; URL=http://www.fannieliu.com/swe/members.php">-->
        <?
            }
            }
            else if (isset($_POST['clear'])){
                include "open_db.php";
                $query = "UPDATE Person SET num_points='" . 0 . "'";
                mysql_query($query) or die('Error, query failed');
                include("close_db.php");

        ?>
            <p>All member points cleared.</p>
            </div>
            <META HTTP-EQUIV="Refresh" Content="2; URL=https://fling.seas.upenn.edu/~swe/cgi-bin/members.php">
        <?
            }
            else {
        ?>
        <h3>Add pending members:</h3>
        <?
                include "open_db.php";
                $query = "SELECT * FROM Pending";
                $result = mysql_query($query) or die('Error, query failed');
        ?>
            <form name="approve_select" class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <?
            while($row = mysql_fetch_array($result)) {
                echo "<input type='checkbox' name='pending[]' value='" . $row['email'] . "' />";
                echo $row['email'];
                echo "<br/>";
             }
            include("close_db.php");
        ?>
            <br/>
            <input class="join" name="approve_select" value="Approve Selected" type="submit">
            <input class="join" name="approve" value="Approve All" type="submit">
            </form>

            <h3>Add Members Manually</h3>
            <p>Add members manually using a CSV file in the format: email, year</p>
            <p>Make sure year is of the form: 2012, 2013, 2014, 2015, Grad, or Alumnus
            <form name="manual_members" class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
                <input class="info" type="file" name="memberfile"><br/>
                <input class="join" name="members" value="Add Members" type="submit">
            </form>
            </div>

            <div class="right-content">
            <h3>Add Points for Members</h3>
            <!-- if need to add individually just have one name in csv file... if too troublesome uncomment here
            <p>Add points individually:</p>
            <form name="points" class="form" method="post" action="<//?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validatePointForm('single');">
                <input class="info" type="email" name="email" placeholder="SEAS email"><br/>
                <input class="info" type="text" name="numpoints" placeholder="number of points"><br/>
                <input class="join" name="points" value="Add Points" type="submit">
            </form>
            -->
            <p>Add points to multiple members (CSV file)
            <br/>File must only contain SEAS emails</p> <!-- note that this creates a new event in the event table -->
            <form name="mult_points" class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validatePointForm();" enctype="multipart/form-data">
                <input class="info" type="file" name="eventfile"><br/>
                <input class="info" type="text" name="numpoints" placeholder="number of points"><br/>
                <input class="join" name="points" value="Add Points" type="submit">
            </form>
            <form name="clear" class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validateClear();">
                <input class="join" name="clear" value="Clear All Member Points" type="submit">
            </form>

            <h3>Highest Member Points</h3>
            <?
                include "open_db.php";
                $query = "SELECT * FROM Person ORDER BY num_points DESC LIMIT 0, 5";
                $result = mysql_query($query) or die('Error, query failed');

                echo "<ul>";
                while($row = mysql_fetch_array($result)) {
                    echo "<li>" . $row['email'];
                    echo " (" . $row['num_points'] . " points)</li>";
                }
                echo "</ul>";
            include("close_db.php");
            ?>

            </div>
            <br/>
            <br/>
            <hr/>
            <div id="points">
            <h3>Download Resumes</h3>
            <div class="left-content">
            - <a href="download.php?type=all">Download All</a>
            <br/>
            - Download by year:
            <ul>
            <table width="200">
            <tr>
            <td>
            <li><a href="download.php?type=senior">Seniors</a></li>
            <li><a href="download.php?type=junior">Juniors</a></li>
            <li><a href="download.php?type=grad">Grad</a></li>
            </td>
            <td>
            <li><a href="download.php?type=soph">Sophomores</a></li>
            <li><a href="download.php?type=fresh">Freshmen</a></li>
            <li><a href="download.php?type=alumni">Alumni</a></li>
            </td>
            </tr>
            </table>
            </ul>
            </div>
            <div class="right-content">
            - Download by major:
            <ul>
            <table width="170">
            <tr>
            <td>
            <li><a href="download.php?type=be">BE</a></li>
            <li><a href="download.php?type=cbe">CBE</a></li>
            <li><a href="download.php?type=meam">MEAM</a></li>
            <li><a href="download.php?type=mse">MSE</a></li>
            <li><a href="download.php?type=cd">CD</a></li>
            </td>
            <td valign="top">
            <li><a href="download.php?type=cis">CIS</a></li>
            <li><a href="download.php?type=dmd">DMD</a></li>
            <li><a href="download.php?type=ee">EE</a></li>
            <li><a href="download.php?type=mkse">MKSE</a></li>
            <li><a href="download.php?type=sys">SYS</a></li>
            </td>
            </tr>
            </ul>
            </table>
            </div>
            </div>
        <? }
        }
        else {
        ?>
            <h2>You do not have access to this page.</h2>
        <?
        }
        } else {
        ?>
            <h2>Please sign in above to access this page.</h2>
        <?
        }
        ?>
        </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Penn SWE</h3>
                        <a href = "index.php">About</a><br>
                        <a href = "events.php">Events</a><br>
                        <a href = "getinvolved.php">Get Involved</a><br>
                        <a href = "contact.php">Sponsorship</a>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/upenn.sweundergrad?fref=ts" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/intent/follow?screen_name=PennSWE" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>SWE Resources</h3>
                        <a href = "http://societyofwomenengineers.swe.org/">National SWE</a><br>
                        <a href = "http://regione.swe.org/">PA Regional SWE</a><br>
                        <a href = "http://societyofwomenengineers.swe.org/index.php/scholarships">SWE Scholarship</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
