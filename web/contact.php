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

</head>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#logform').hide();
            $('#signin').click(function() {
                window.location.assign("contact2.php");
            });
            $("#cancel").click(function() {
                $('#logform').hide();
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
                    <li class = "page-scroll">
                    <?php
                    if(isset($_SESSION['user'])) {?>
                        <a href="members.php" class="btn btn-info btn-xs" id = "member"><span class="glyphicon glyphicon-search"></span>Member Page</a>
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

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name"></span>
                        <h1>Sponsors</h1>
                        <hr class="star-light">
                        <p> There are many opportunities for involvement with the University of Pennsylvania Chapter of the Society of Women Engineers. Our organization has set viable goals for our women engineering student body this coming year and your contribution will help us reach our vision. Opportunites include sponsorship of the annual corporate dinner, general body meetings, or GEARS day for educational outreach. Please contact us below if your company is at all interested in working with Penn SWE.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Email Us</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Organization</label>
                                <input type="text" class="form-control" placeholder="Organization" id="phone" required data-validation-required-message="Please enter your organization.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" id = "contacted" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
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
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
