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
    <link rel="stylesheet" type="text/css" href="menu.css">
</head>


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
            $('#cssmenu > ul:has(li)').addClass("has-sub");
            $('#cssmenu > ul > li > a').click(function() {
                var checkElement = $(this).next();
                $('#cssmenu li').removeClass('active');
                $(this).closest('li').addClass('active');   

                if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                    $(this).closest('li').removeClass('active');
                    checkElement.slideUp('normal');
                }
                if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                    $('#cssmenu ul ul:visible').slideUp('normal');
                    checkElement.slideDown('normal');
                }
                if (checkElement.is('ul')) {
                    return false;
                } else {
                    return true;    
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
                        <hr class="star-light">
                        <h2>Follow us on social media for events</h2>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/upenn.sweundergrad?fref=ts" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/intent/follow?screen_name=PennSWE" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- calendar Section -->
    <section id="calendar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Upcoming Events</h2>
                    <hr class="star-primary">
                </div>
                <center><table width="800">
                <tr>
                <td><center><iframe src="https://www.google.com/calendar/b/0/embed?title=Penn%20SWE&amp;height=360&amp;wkst=1&amp;bgcolor=%23f2f0f0&amp;src=pennswe%40gmail.com&amp;color=%237A367A&amp;ctz=America%2FNew_York" style=" border-width:0 " width="600" height="400 " frameborder="0" scrolling="no"></iframe></center>
                </td>
                <td> 
                    <div class="events">
                            <div class="panel panel-default">
                                <div class="panel-heading">Details</div>
                                <div class="panel-body" style="min-height: 10; overflow-y: none; max-height: 10;">On winter break, coming soon</div>
                            </div>
                    </div>
                </td>
            </table></center>
        </div>
    </section>

    <!-- Programming Section -->
    <section id="programs" class="success">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 text-center">
                    <h2>Programming</h2>
                    <hr class="star-light">
                </div>
                <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-left">
                    <div class="menu" id = "cssmenu">
                        <ul class="menu">
                            <li class="menu"><a href="#"><span>Corporate Dinner</span></a>
                                <ul class="menu">
                                    <li class="menu"> The Society of Women Engineers Corporate Dinner is the largest annual student-run corporate event in the School of Engineering and Applied Science. Each year we invite organizations to send representatives to this event held at the University of Pennsylvania. More than 150 undergraduates and graduates attend and have the opportunity to speak with representatives during a reception and dinner about internship opportunities and full-time positions. Students attending the dinner will submit their resumes to the online resume book which will be accessible to all representatives prior to the dinner. The 19th Annual Corporate Dinner will be on Monday, October 26th, 2015 from 6-9 PM at the Inn at Penn.
                                    <br>
                                    <br>
                                    Questions? Please contact swecorporatedinner15@gmail.com 
                                    </li>
                                </ul>
                            </li>
                            <li class="menu"><a href="#"><span>Educational Outreach</span></a>
                                <ul class="menu">
                                    <li class="menu">
                                        <h3>GEARS Day</h3>
                                        <br>
                                        GEARS Day (Girls in Engineering and Related Sciences) is a program run by Penn SWE with the help of Philadelphia SWE to encourage high school girls to develop an interest in engineering by attending a mini day camp on Penn's engineering campus. This one-day event for high school girls in the Philadelphia area, specifically sophomores and juniors, will take place this spring. During the event, the girls will participate in a series of hands-on workshops designed to give them a taste of several various engineering and scientific disciplines. The goal is to interest the high school girls in pursuing engineering in college. Aside from the workshops, the day includes a student panel and a lunch where the girls can mingle with current students, faculty, and Philadelphia SWE volunteers. 
                                        <br>
                                        <br>
                                        <h3>High School Shadowing Day</h3>
                                        <br>
                                        In keeping with our mission to encourage young people, especially young women, to explore engineering as a possible career, we invite groups of high school students to come to Penn and learn about being in college and more importantly, studying engineering. Each high school student shadows a SWE member to a few classes and between classes, has time to ask questions about student life at Penn. We also have a speaker who has had great success in an engineering field to share her experiences with both the college and high school students.
                                    </li>
                                </ul>
                            </li>

                            <li class="menu"><a href="#"><span>Activities</span></a>
                                <ul class="menu">
                                    <li class="menu">Penn SWE holds many professional development for networking as well as social events for students to get together and meet other SWE members. We hold dinners where company representatives give presentations and answer questions about applying for internships. Our social activities include study breaks, including the annual "Get to Know SWE S'More" event.
                                    </li>
                                </ul>
                            </li>
                        </ul>
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
