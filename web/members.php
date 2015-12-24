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
                            <li class="page-scroll"><a href="getinvolved.php#sponsorship">Join Listserve</a></li>
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
                            <a href="admin.php" class="btn btn-default">Admin Page</a>
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
                <center>
                <? if(isset($_SESSION['user'])) {?>
                    <div id="content" style="height:800px;">
                    <div id="left"></div>
                    <!-- main content -->
                    <div id="main">
                        <div class="left-content">
                        <h3>Profile: </h3>
                        <p>*We use this information for downloading specific resumes for companies.</p>
                        <p>Year: <? echo $_SESSION['user']['year'] ?><br/>
                            Major: <? echo $_SESSION['user']['major'] ?></p>
                        <p><a href="members_edit.php">Edit this information.</a></p>
                    </div>
                    <div class="right-content">
                    <h3>Resume:</h3>
                        <p>Current Resume: 
                    <?php
                    include "open_db.php";
                    $uid = $_SESSION['user']['ID'];
                    $query = "SELECT id, name FROM upload WHERE uid='" . $uid . "'";
                    $result = mysql_query($query) or die('Error, query failed');
                    if(mysql_num_rows($result) == 0) {
                        echo "No resume uploaded.<br>";
                    } 
                    else {
                        while(list($id, $name) = mysql_fetch_array($result))
                    { ?>
                        <a href="download.php?id=<?=$id;?>"><?=$name;?></a> <br>
                    <?php }
                    }
                    include "close_db.php";
                    ?>
                <br/>
                Upload new resume (PDF files only):<br/>
                <?
                if(isset($_SESSION['user']) && isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
                {
                $fileName = $_FILES['userfile']['name'];
                $tmpName  = $_FILES['userfile']['tmp_name'];
                $fileSize = $_FILES['userfile']['size'];
                $fileType = $_FILES['userfile']['type'];
                
                if ($fileType == 'application/pdf') {
                    
                    // check type here, need to make sure they ONLY upload pdf files
                    $fp      = fopen($tmpName, 'r');
                    $content = fread($fp, filesize($tmpName));
                    $content = addslashes($content);
                    fclose($fp);

                    if(!get_magic_quotes_gpc())
                    {
                        $fileName = addslashes($fileName);
                    }
                    
                    include("open_db.php");
                    
                    // rename it to the person's username
                    // this way will prevent duplicates
                    $fileName = str_replace("@seas.upenn.edu", "", $_SESSION['user']['email']) . ".pdf";
                    
                    $uid = $_SESSION['user']['ID'];
                    
                    $result = mysql_query("SELECT * FROM upload WHERE uid='" . $uid . "'");
                    if (mysql_num_rows($result) != 0) {
                        $query = "UPDATE upload SET name='" . $fileName . "', size='" . $fileSize . "', type='" . $fileType . "', content='" . $content .
                            "' WHERE uid='" . $uid . "'";
                    }
                    else {
                        $query = "INSERT INTO upload (name, size, type, content, uid ) ".
                        "VALUES ('$fileName', '$fileSize', '$fileType', '$content', '$uid')";
                    }
                    
                    mysql_query($query) or die('Error, query failed');

                    include("close_db.php");
                
                    echo "<br><b><i>File $fileName uploaded</b></i><br>";
                    echo '<META HTTP-EQUIV="Refresh" Content="2; URL=https://fling.seas.upenn.edu/~swe/cgi-bin/members.php">';
                }
                else {
                    echo "<br><b>Incorrect file type.  Please upload only PDF files.</b><br>";
                }
                }
                else {
                ?>
                <form class="form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                    <input name="userfile" class="info" type="file" id="userfile"> 
                    <br/>
                    <input class="join" name="upload" value="Upload" type="submit">
                </form>
                <? }
                ?>
                <p>
                *resumes will be added to the Penn SWE<br/>
                resume book and sent to companies for review<br/>*resumes are automatically renamed to your <br/>username to avoid duplicates
                </p>
                </div>
                <div id="points">
                <h3>Penn SWE Activity</h3>
                <p><i>Get 20 points and win a prize at the end of the semester!</i></p>
                <p>You currently have <b><?= $_SESSION['user']['num_points'] ?></b> points.</p>
                </div>
             <?
             }
             else {
             ?>
                <h2>Please sign in above to access this page.</h2>
            <?
            }
            ?>
             </div>
            </center>
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
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
