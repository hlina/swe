<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start();?>
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
                        <a href="https://weblogin.pennkey.upenn.edu/logout" class="btn btn-info btn-xs" id = "member"><span class="glyphicon glyphicon-search"></span>Sign out</a>
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
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-left">
        <?php 
        if (isset($_SESSION['user'])) {
            
        ?>
            <!-- main content -->
            <h2>Edit your account:</h2>
            
            <div>
            <?
            if (isset($_POST['submit'])) {
                include("open_db.php");
                $result = mysql_query("SELECT * FROM Person WHERE ID='" . $_SESSION['user']['ID'] . "'");
                if (mysql_num_rows($result) != 0) {
                        $query = "UPDATE Person SET major='" . $_POST['major'] . "', year='" . $_POST['year'] . "' WHERE ID='" . $_SESSION['user']['ID'] . "'";
                }   
                
                mysql_query($query) or die('Error, query failed');
                
                // reset the result so updated to the updated person
                $result = mysql_query("SELECT * FROM Person WHERE ID='" . $_SESSION['user']['ID'] . "'");
                $_SESSION['user'] = mysql_fetch_array($result);
                
                include("close_db.php");
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=https://fling.seas.upenn.edu/~swe/cgi-bin/members.php">';
                //header('Location:  members.php');
                //exit();
            }
            ?>
                <h3>Profile: </h3>
                <form name="editform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validateMajorYear();">
                    <table width="500px">
                    <tr>
                        <td valign="top" width="50px">
                            Major:
                        </td>
                        <td width="400px" valign="top">
                            <input class="radio" type="radio" name="major" value="BE" <? if ($_SESSION['user']['major'] == 'BE'){ ?>checked<? } ?>>Bioengineering <br/>
                            <input class="radio" type="radio" name="major" value="CBE" <? if ($_SESSION['user']['major'] == 'CBE'){ ?>checked<? } ?>>Chemical Biomolecular Engineering <br/>
                            <input class="radio" type="radio" name="major" value="MEAM" <? if ($_SESSION['user']['major'] == 'MEAM'){ ?>checked<? } ?>>Mechanical Engineering<br/>
                            <input class="radio" type="radio" name="major" value="MSE" <? if ($_SESSION['user']['major'] == 'MSE'){ ?>checked<? } ?>>Materials Science<br/>
                            <input class="radio" type="radio" name="major" value="SYS" <? if ($_SESSION['user']['major'] == 'SYS'){ ?>checked<? } ?>>Systems Engineering<br>
                            <input class="radio" type="radio" name="major" value="CD" <? if ($_SESSION['user']['major'] == 'CD'){ ?>checked<? } ?>>Curriculum Deferred<br/>
                        </td>
                        <td width="400px" valign="top">
                            <input class="radio" type="radio" name="major" value="CIS" <? if ($_SESSION['user']['major'] == 'CIS'){ ?>checked<? } ?>>Computer Science <br/>
                            <input class="radio" type="radio" name="major" value="DMD" <? if ($_SESSION['user']['major'] == 'DMD'){ ?>checked<? } ?>>Digital Media Design <br/>
                            <input class="radio" type="radio" name="major" value="EE" <? if ($_SESSION['user']['major'] == 'EE'){ ?>checked<? } ?>>Electrical Engineering <br/>
                            <input class="radio" type="radio" name="major" value="NETs" <? if ($_SESSION['user']['major'] == 'NETs'){ ?>checked<? } ?>>NETs <br/>
                            
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" width="20px">
                            Year:
                        </td>
                        <td width="70px" valign="top">
                            <input class="radio" type="radio" name="year" value="2019" <? if ($_SESSION['user']['year'] == '2019'){ ?>checked<? } ?>>2019 <br/>
                            <input class="radio" type="radio" name="year" value="2018" <? if ($_SESSION['user']['year'] == '2018'){ ?>checked<? } ?>>2018 <br/>
                            <input class="radio" type="radio" name="year" value="Other" <? if ($_SESSION['user']['year'] == 'Other'){ ?>checked<? } ?>>Other <br/>
                        </td>
                        <td width="80px" valign="top">
                            <input class="radio" type="radio" name="year" value="2017" <? if ($_SESSION['user']['year'] == '2017'){ ?>checked<? } ?>>2017 <br/>
                            <input class="radio" type="radio" name="year" value="2016" <? if ($_SESSION['user']['year'] == '2016'){ ?>checked<? } ?>>2016 <br/>
                            <input class="radio" type="radio" name="year" value="Alumnus" <? if ($_SESSION['user']['year'] == 'Alumnus'){ ?>checked<? } ?>>Alumnus <br/>
                        </td>
                    </tr>
                    </table>
                    <br/>
                    <input class="join" name="submit" value="submit" type="submit">
                </form>
            </div>
        <?
        }
        ?>
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
