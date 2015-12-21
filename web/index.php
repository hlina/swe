
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

    <!-- Slideshow -->
    <script type="text/javascript">
    var interval = 3500;
    var imageDir = "";

    var imageNum = 0;
    imageArray = new Array();
    imageArray[imageNum++] = new imageItem(imageDir + "Love.jpg");
    imageArray[imageNum++] = new imageItem(imageDir + "pic.jpg");
    var totalImages = imageArray.length;
    function imageItem(image_location) {
        this.image_item = new Image();
        this.image_item.src = image_location;
    }
    function get_ImageItemLocation(imageObj) {
        return(imageObj.image_item.src);
    }

    function getNextImage() {
        imageNum = (imageNum+1) % totalImages;
        var new_image = get_ImageItemLocation(imageArray[imageNum]);
        return(new_image);
    }   
    function getPrevImage() {
        imageNum = (imageNum-1) % totalImages;
        var new_image = get_ImageItemLocation(imageArray[imageNum]);
        return(new_image);
    }
    function prevImage(place) {
        var new_image = getPrevImage();
        document[place].src = new_image;
    }
    function switchImage(place) {
        var new_image = getNextImage();
        document[place].src = new_image;
        var recur_call = "switchImage('"+place+"')";
        timerID = setTimeout(recur_call, interval);
    }
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
                <li><a class="navbar-brand" href="swe.html">Penn SWE</a></li>
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
                        <a href="swe.html" data-toggle="dropdown" class="dropdown-toggle">ABOUT<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="page-scroll"><a href="swe.html#about">Vision</a></li>
                            <li class="page-scroll"><a href="swe.html#board">Board</a></li>
                        </ul>
                    </li>
                    <li class="page-scroll">
                        <a href="events.html" data-toggle="dropdown" class="dropdown-toggle">EVENTS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="page-scroll"><a href="events.html#calendar">Upcoming Events</a></li>
                            <li class="page-scroll"><a href="events.html#programs">Annual Events</a></li>
                        </ul>
                    </li>
                    <li class="page-scroll">
                        <a href="events.html" data-toggle="dropdown" class="dropdown-toggle">GET INVOLVED<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="page-scroll"><a href="getinvolved.html#subscribe">Join Listserve</a></li>
                            <li class="page-scroll"><a href="getinvolved.html#sponsorship">Committees</a></li>
                        </ul>
                    </li>
                    <li class="page-scroll">
                        <a href="contact.html">SPONSORSHIP</a>
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
                    <center>
                        <img name="slideImg" src="Love.jpg" width=500 height=375 border=0>
                        </br>
                        <a onClick="prevImage('slideImg'); clearTimeout(timerID)"> previous</a>
                        <a onClick="switchImage('slideImg'); clearTimeout(timerID)">next </a>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center intro-text">
                    <h2>Vision</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-left">
                   <p>The Society of Women Engineers (SWE) is a non-profit service organization aimed at informing the community of the qualifications and achievements of women engineers. Its mission is to stimulate women to achieve their full potential in their careers as engineers and as leaders, to expand the image of the engineering profession as a positive force in improving the quality of life, and to demonstrate the value of diversity. <br>
                    
                    The University of Pennsylvania Student Chapter has three primary objectives: professional development, education outreach to local high school and elementary schools, and social activities for its members.<br>

                    If you would like to find out more information about the Society of Women Engineers, please visit the national SWE website (refer to Resources page). There you can also find out how to apply for paid membership to the national organization.</p>
                    <p>Mission Statement: <br>
                    i) To stimulate women to achieve full potential in careers as engineers and leaders.<br>
                    ii) To expand the image of the engineering profession as a positive force in improving the quality of life.<br>
                    iii) To demonstrate the value of diversity.</p>
                </div>
            </div>
        </div>
        <div id = "outstanding">
            <table>
            <tr>
                <td><img class="img-responsive center" src="img/outstanding1.png" alt="" height = "150px" width = "200px"></td>
                <td><img class="img-responsive center" src="img/outstanding2.png" alt="" height = "150px" width = "200px"></td>
            </tr>
            </table>
        </div>
    </section>

    <!-- board Section -->
    <section class="success" id="board">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Board</h2>
                    <hr class="star-light">
                </div>
                <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-left">
                   <p>The Society of Women Engineers (SWE) is a non-profit service organization aimed at informing the community of the qualifications and achievements of women engineers. Its mission is to stimulate women to achieve their full potential in their careers as engineers and as leaders, to expand the image of the engineering profession as a positive force in improving the quality of life, and to demonstrate the value of diversity. <br>
                    
                    The University of Pennsylvania Student Chapter has three primary objectives: professional development, education outreach to local high school and elementary schools, and social activities for its members.<br>

                    If you would like to find out more information about the Society of Women Engineers, please visit the national SWE website (refer to Resources page). There you can also find out how to apply for paid membership to the national organization.</p>
                    <p>Mission Statement: <br>
                    i) To stimulate women to achieve full potential in careers as engineers and leaders.<br>
                    ii) To expand the image of the engineering profession as a positive force in improving the quality of life.<br>
                    iii) To demonstrate the value of diversity.</p>
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
                        <a href = "swe.html#about">About</a><br>
                        <a href = "swe.html#board">Board</a><br>
                        <a href = "events.html">Events</a><br>
                        <a href = "getinvolved.html">Get Involved</a><br>
                        <a href = "contact.html">Contact Us</a>
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
