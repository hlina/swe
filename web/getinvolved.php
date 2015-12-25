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

    <!-- Pictures Section -->
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
                        <span class="name"></span>
                        <p>Become a general body member! Sign up as a member by clicking sign in above. Come to GBMs and other events, which you can learn about by signing up for our listserv below. Aside from being a general body member, become more involved by joining a committee, described below.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="subscribe" class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center intro-text">
                    <h2>Committees</h2>
                    <hr class="star-light">
                    <div class="menu" id = "cssmenu">
                        <ul class="menu">
                            <li class="menu"><a href="#"><span>Activities Committee</span></a>
                                <ul class="menu">
                                    <li class="menu"> Help plan GBMs and social events!
                                    </li>
                                </ul>
                            </li>
                            <li class="menu"><a href="#"><span>Educational Outreach Committee</span></a>
                                <ul class="menu">
                                    <li class="menu">Reach out and mentor high school students regularly.
                                        </li>
                                </ul>
                            </li>

                            <li class="menu"><a href="#"><span>Tech Committee</span></a>
                                <ul class="menu">
                                    <li class="menu">Help build things, like this website, for SWE. </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
        </div>
    </section>

    <!-- sponsorship Section -->
    <section id="sponsorship">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Join Listserv</h2>
                    <hr class="star-primary">
                </div>
                <div class="row">
            <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;}
    #mc_embed_signup form {display:block; position:relative; text-align:left; padding:10px 0 10px 3%; width: 75%; margin-left:15%; width: 70%;
    margin-right: 15%;}
    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//upenn.us9.list-manage.com/subscribe/post?u=7029c517c841f224227a175ea&amp;id=b0172d234e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
    <h2>Subscribe to our mailing list </h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
    <label for="mce-FNAME">First Name </label>
    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
    <label for="mce-LNAME">Last Name </label>
    <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
    <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7029c517c841f224227a175ea_b0172d234e" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
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
