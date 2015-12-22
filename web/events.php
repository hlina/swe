
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SWE Society of Women Engineers</title>

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

</head>


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
                            <li class="page-scroll"><a href="getinvolved.php#subscribe">Join Listserve</a></li>
                            <li class="page-scroll"><a href="getinvolved.php#sponsorship">Committees</a></li>
                        </ul>
                    </li>
                    <li class="page-scroll">
                        <a href="contact.php">SPONSORSHIP</a>
                    </li>
                    <li class = "page-scroll">
                        <a href="#" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-search"></span> Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Pictures Section -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name"></span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- calendar Section -->
    <section class="success" id="calendar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Upcoming Events</h2>
                    <hr class="star-light">
                </div>
                <center><table width="800">
                <tr>
                <td><center><iframe src="https://www.google.com/calendar/b/0/embed?title=Penn%20SWE&amp;height=360&amp;wkst=1&amp;bgcolor=%23f2f0f0&amp;src=pennswe%40gmail.com&amp;color=%237A367A&amp;ctz=America%2FNew_York" style=" border-width:0 " width="600" height="400 " frameborder="0" scrolling="no"></iframe></center>
                </td>
                <td> 
                    <div class="events">
                            <div class="panel panel-default">
                                <div class="panel-heading">Details</div>
                                <div class="panel-body" style="min-height: 10; overflow-y: scroll; max-height: 10;">Panel Content</div>
                            </div>
                    </div>
                </td>
            </table></center>
        </div>
    </section>

    <!-- Programming Section -->
    <section id="programs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Programming</h2>
                    <hr class="star-primary">
                </div>
                <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-left">
                    <a href="#" rel="toggle[events]" style= "color:gray"><h3>Events</h3></a>
                    <div id="events">
                        <p>
                            <ul>
                                <li>
                                    <a href="http://societyofwomenengineers.swe.org/index.php/scholarships" target="_blank">National SWE Scholarship</a>
                                </li>
                                <li>
                                    <a href="http://www.vpul.upenn.edu/careerservices/wharton/apps/LehmanVisionScholarship07.pdf" target="_blank">
                                    Lehman Brothers Vision Scholarship</a>
                                </li>
                                <li>
                                    <a href="http://www.sms.scholarshipamerica.org/vanguardwomenintechnology/" target="_blank">
                                    The Vanguard Women in Technology Scholarship Program</a>
                                </li>
                            </ul>
                        </p>
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
                        <a href = "index.php#about">About</a><br>
                        <a href = "index.php#board">Board</a><br>
                        <a href = "events.php">Events</a><br>
                        <a href = "getinvolved.php">Get Involved</a><br>
                        <a href = "contact.php">Contact Us</a>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/upenn.sweundergrad?fref=ts" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                                <a href="https://twitter.com/intent/follow?screen_name=PennSWE" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>SWE Resources</h3>
                        <a href = "http://societyofwomenengineers.swe.org/">National SWE</a><br>
                        <a href = "http://regione.swe.org/">PA Regional SWE</a><br>
                        <a href = "http://societyofwomenengineers.swe.org/index.php/scholarships">SWE Scholarship</a><br>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

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
