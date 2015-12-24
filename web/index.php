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
    <link href="slideshow.css" rel="stylesheet" type="text/css">

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
                            <li class="page-scroll"><a href="getinvolved.php#sponsorship">Join Listserve</a></li>
                        </ul>
                    </li>
                    <li class="page-scroll">
                        <a href="contact.php">SPONSORSHIP</a>
                    </li>
                    <li class = "">
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
                    <style type="text/css">
                    #logform {
                        margin-top: 15px;
                    }
                    </style>
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

                    <center>
                        <div class="bss-slides num" tabindex="1" autofocus="autofocus">
                            <figure>
                              <img src="img/board.jpg" height="400" />
                            </figure>
                            <figure>
                              <img src="img/cdinner.jpg" height="400" />
                            </figure>
                            <figure>
                              <img src="img/gears.jpg" height="400" />
                            </figure>
                        </div>

                        <script>
                        var makeBSS = function (el, options) {
                            var $slideshows = document.querySelectorAll(el), // a collection of all of the slideshow
                                $slideshow = {},
                                Slideshow = {
                                    init: function (el, options) {
                                        this.counter = 0; // to keep track of current slide
                                        this.el = el; // current slideshow container    
                                        this.$items = el.querySelectorAll('figure'); // a collection of all of the slides, caching for performance
                                        this.numItems = this.$items.length; // total number of slides
                                        options = options || {}; // if options object not passed in, then set to empty object 
                                        options.auto = options.auto || false; // if options.auto object not passed in, then set to false
                                        this.opts = {
                                            auto: (typeof options.auto === "undefined") ? false : options.auto,
                                            speed: (typeof options.auto.speed === "undefined") ? 1500 : options.auto.speed,
                                            pauseOnHover: (typeof options.auto.pauseOnHover === "undefined") ? false : options.auto.pauseOnHover,
                                            fullScreen: (typeof options.fullScreen === "undefined") ? false : options.fullScreen,
                                            swipe: (typeof options.swipe === "undefined") ? false : options.swipe
                                        };
                                        
                                        this.$items[0].classList.add('bss-show'); // add show class to first figure 
                                        this.injectControls(el);
                                        this.addEventListeners(el);
                                        if (this.opts.auto) {
                                            this.autoCycle(this.el, this.opts.speed, this.opts.pauseOnHover);
                                        }
                                        if (this.opts.fullScreen) {
                                            this.addFullScreen(this.el);
                                        }
                                        if (this.opts.swipe) {
                                            this.addSwipe(this.el);
                                        }
                                    },
                                    showCurrent: function (i) {
                                        // increment or decrement this.counter depending on whether i === 1 or i === -1
                                        if (i > 0) {
                                            this.counter = (this.counter + 1 === this.numItems) ? 0 : this.counter + 1;
                                        } else {
                                            this.counter = (this.counter - 1 < 0) ? this.numItems - 1 : this.counter - 1;
                                        }

                                        // remove .show from whichever element currently has it 
                                        // http://stackoverflow.com/a/16053538/2006057
                                        [].forEach.call(this.$items, function (el) {
                                            el.classList.remove('bss-show');
                                        });
                          
                                        // add .show to the one item that's supposed to have it
                                        this.$items[this.counter].classList.add('bss-show');
                                    },
                                    injectControls: function (el) {
                                    // build and inject prev/next controls
                                        // first create all the new elements
                                        var spanPrev = document.createElement("span"),
                                            spanNext = document.createElement("span"),
                                            docFrag = document.createDocumentFragment();
                                
                                        // add classes
                                        spanPrev.classList.add('bss-prev');
                                        spanNext.classList.add('bss-next');
                                
                                        // add contents
                                        spanPrev.innerHTML = '&laquo;';
                                        spanNext.innerHTML = '&raquo;';
                                        
                                        // append elements to fragment, then append fragment to DOM
                                        docFrag.appendChild(spanPrev);
                                        docFrag.appendChild(spanNext);
                                        el.appendChild(docFrag);
                                    },
                                    addEventListeners: function (el) {
                                        var that = this;
                                        el.querySelector('.bss-next').addEventListener('click', function () {
                                            that.showCurrent(1); // increment & show
                                        }, false);
                                    
                                        el.querySelector('.bss-prev').addEventListener('click', function () {
                                            that.showCurrent(-1); // decrement & show
                                        }, false);
                                        
                                        el.onkeydown = function (e) {
                                            e = e || window.event;
                                            if (e.keyCode === 37) {
                                                that.showCurrent(-1); // decrement & show
                                            } else if (e.keyCode === 39) {
                                                that.showCurrent(1); // increment & show
                                            }
                                        };
                                    },
                                    autoCycle: function (el, speed, pauseOnHover) {
                                        var that = this,
                                            interval = window.setInterval(function () {
                                                that.showCurrent(1); // increment & show
                                            }, speed);
                                        
                                        if (pauseOnHover) {
                                            el.addEventListener('mouseover', function () {
                                                interval = clearInterval(interval);
                                            }, false);
                                            el.addEventListener('mouseout', function () {
                                                interval = window.setInterval(function () {
                                                    that.showCurrent(1); // increment & show
                                                }, speed);
                                            }, false);
                                        } // end pauseonhover
                                        
                                    },
                                    addFullScreen: function(el){
                                        var that = this,
                                        fsControl = document.createElement("span");
                                        
                                        fsControl.classList.add('bss-fullscreen');
                                        el.appendChild(fsControl);
                                        el.querySelector('.bss-fullscreen').addEventListener('click', function () {
                                            that.toggleFullScreen(el);
                                        }, false);
                                    },
                                    addSwipe: function(el){
                                        var that = this,
                                            ht = new Hammer(el);
                                        ht.on('swiperight', function(e) {
                                            that.showCurrent(-1); // decrement & show
                                        });
                                        ht.on('swipeleft', function(e) {
                                            that.showCurrent(1); // increment & show
                                        });
                                    },
                                    toggleFullScreen: function(el){
                                        // https://developer.mozilla.org/en-US/docs/Web/Guide/API/DOM/Using_full_screen_mode
                                        if (!document.fullscreenElement &&    // alternative standard method
                                            !document.mozFullScreenElement && !document.webkitFullscreenElement &&   
                                            !document.msFullscreenElement ) {  // current working methods
                                            if (document.documentElement.requestFullscreen) {
                                              el.requestFullscreen();
                                            } else if (document.documentElement.msRequestFullscreen) {
                                              el.msRequestFullscreen();
                                            } else if (document.documentElement.mozRequestFullScreen) {
                                              el.mozRequestFullScreen();
                                            } else if (document.documentElement.webkitRequestFullscreen) {
                                              el.webkitRequestFullscreen(el.ALLOW_KEYBOARD_INPUT);
                                            }
                                        } else {
                                            if (document.exitFullscreen) {
                                              document.exitFullscreen();
                                            } else if (document.msExitFullscreen) {
                                              document.msExitFullscreen();
                                            } else if (document.mozCancelFullScreen) {
                                              document.mozCancelFullScreen();
                                            } else if (document.webkitExitFullscreen) {
                                              document.webkitExitFullscreen();
                                            }
                                        }
                                    } // end toggleFullScreen
                                    
                                }; // end Slideshow object .....
                                
                            // make instances of Slideshow as needed
                            [].forEach.call($slideshows, function (el) {
                                $slideshow = Object.create(Slideshow);
                                $slideshow.init(el, options);
                            });
                        };
                            var opts = {
                            auto : { 
                                speed : 2500, 
                                pauseOnHover : true 
                            },
                            fullScreen : false, 
                            swipe : true 
                            };
                            makeBSS('.num', opts);
                        </script>
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
                            <br/><br/>
            <center>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>E-mail</th>
                </tr>
                <tr>
                    <td>Emily Chen</td>
                    <td>President</td>
                    <td>chenem@seas.upenn.edu</td>
                </tr>
                <tr>
                    <td>Vasiliki Papanikolopou</td>
                    <td>Vice President of External Affairs</td>
                    <td>vpap@seas.upenn.edu</td>
                 </tr>
                <tr>
                    <td>Hayley Williamson</td>
                    <td>Vice President of Internal Affairs</td>
                    <td>hayleywi@seas.upenn.edu</td>
                </tr>
                <tr>
                    <td>Allison Higgins</td>
                    <td>Finance Director</td>
                    <td>ahigg@seas.upenn.edu</td>
                </tr>
                <tr> 
                    <td>Pooja Khandekar</td>
                    <td>Communications Director</td>
                    <td>kpooja@seas.upenn.edu</td>
                </tr>
                <tr> 
                    <td>Lina Huang</td>
                    <td>Technology Director</td>
                    <td>hlina@seas.upenn.edu</td>
                </tr>
                <tr>
                   <td>Shannon Toole<br /> Emily Pugh</td>
                   <td>Activities Co-Directors</td>
                    <td>stoole@seas.upenn.edu <br /> epugh@seas.upenn.edu</td>
                </tr>
                <tr>
                    <td>Nova Fallen<br /> Meghavi Talati</td>
                    <td>Corporate Dinner Co-Directors</td>
                    <td>nfallen@seas.upenn.edu <br /> mtalati@seas.upenn.edu</td>
                </tr>
                <tr>
                    <td>Vatsala Goyal <br /> Wanda Lipps</td>
                    <td>Educational Outreach Co-Directors</td>
                    <td>vatsala@seas.upenn.edu <br /> wlipps@seas.upenn.edu</td>
                </tr>
                <tr>
                    <td>Sindura Chaparala <br /> Tara Lorimer</td>
                    <td>GEARS Day Co-Directors</td>
                    <td>sindura@seas.upenn.edu <br /> tlorimer@seas.upenn.edu</td>
                </tr>
        <tr>
          <td>Kate Miller</td>
          <td>Region Collegiate Representative</td>
          <td>katmill@seas.upenn.edu</td>
        </tr> 
    
        <tr>
        <td>Danielle Bassett, PhD</td>
        <td>Faculty Advisor</td>
        <td>dsb@seas.upenn.edu</td>
        </tr>
        <tr>
        <td>Alexis Wallen Wasserman</td>
        <td>Professional Counsleor</td>
        <td>ajwallen@gmail.com</td>
        </tr>
    </table>
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
