<?php
include '../nedmin/connect.php';

$fetch_skill= $db -> prepare('SELECT * FROM about_me WHERE about_id=1');
$fetch_skill-> execute();

$fetch_s = $fetch_skill -> fetch(PDO::FETCH_ASSOC);

$fetch_home= $db -> prepare('SELECT * FROM home WHERE home_id=1');
$fetch_home-> execute();

$fetch_h = $fetch_home -> fetch(PDO::FETCH_ASSOC);

$fetch_contact= $db -> prepare('SELECT * FROM contact WHERE contact_id=1');
$fetch_contact-> execute();

$fetch_c = $fetch_contact -> fetch(PDO::FETCH_ASSOC);

$fetch_info= $db -> prepare('SELECT * FROM info WHERE exp_id=2');
$fetch_info-> execute();

$fetch_i = $fetch_info -> fetch(PDO::FETCH_ASSOC);
?>


 

<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Aircv" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
================================== -->
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Metronic "Aircv" Frontend Freebie</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- THEME STYLES -->
    <link href="css/layout.min.css" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <style>
        #example1 {
            border: 2px solid black;

            box-shadow: 5px 15px 8px #241f1f;
        }
    </style>
</head>
<!-- END HEAD -->

<!-- BODY -->

<body id="body" data-spy="scroll" data-target=".header">


    <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top">
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container js_nav-item">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>

                    <!-- Logo -->
                    <div class="logo">
                        <a class="logo-wrap" href="#body">
                            <img class="logo-img logo-img-main" src="img/logo.png" alt="Asentus Logo">
                            <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="Asentus Logo">

                        </a>
                    </div>
                    <!-- End Logo -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav navbar-nav-right">
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">ANA
                                    SAYFA</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover"
                                    href="#about">HAKKIMDA</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover"
                                    href="#experience">DENEYİM</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover"
                                    href="#contact">İletİşİm</a></li>
                        </ul>
                    </div>
                </div>

                <!-- End Navbar Collapse -->
            </div>

        </nav>
        <div id="example1">

        </div>
        <!-- Navbar -->
    </header>
    <!--========== END HEADER ==========-->


    <!--========== SLIDER ==========-->
    <div class="promo-block parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="promo-block-divider">
                        <h1 class="promo-block-title"><?php echo $fetch_h['site_title']; ?><br/> <?php echo $fetch_h['title']; ?></h1>
                        <p class="promo-block-text"><?php echo $fetch_h['sub_title']; ?>&amp; <?php echo $fetch_h['sub_titlee']; ?></p>
                    </div>
                    <ul class="list-inline">
                        <li><a href="#" class="social-icons"><i class="icon-social-facebook"></i></a></li>
                        <li><a href="https://twitter.com/<?php echo $fetch_h['twitter']; ?> " class="social-icons"><i class="icon-social-twitter"></i></a></li>

                        <li><a href="https://instagram.com/<?php echo $fetch_h['instagram']; ?>" class="social-icons"><i class="icon-social-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>  
    <!--========== SLIDER ==========-->
      
    <!--========== PAGE LAYOUT ==========-->
    <!-- About -->
    <div id="about">
        <div class="container content-lg">
            <div class="row">
                <div class="col-sm-3 sm-margin-b-30">
                    <div class="text-right sm-text-left">
                        <h2 class="margin-b-0"><?php echo $fetch_s['title']; ?></h2>
                        <p>Ben Kimim?</p>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1">
                    <div class="margin-b-60">
                        <p><?php echo $fetch_s['About_biography']; ?></p>
                        <p>
                    </div>

                    <!-- Progress Box -->
                    <div class="progress-box">
                        <h5><?php echo $fetch_s['first_skill']; ?> <span class="color-heading pull-right">%<?php echo $fetch_s['first_counter']; ?></span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="<?php echo $fetch_s['first_counter']; ?>"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h5><?php echo $fetch_s['second_skill']; ?> <span class="color-heading pull-right">%<?php echo $fetch_s['second_counter']; ?></span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="<?php echo $fetch_s['second_counter']; ?>"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h5><?php echo $fetch_s['third_skill']; ?><span class="color-heading pull-right">%<?php echo $fetch_s['third_counter']; ?></span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="<?php echo $fetch_s['third_counter']; ?>"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h5><?php echo $fetch_s['forth_skill']; ?> <span class="color-heading pull-right">%<?php echo $fetch_s['forth_counter']; ?></span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="<?php echo $fetch_s['forth_counter']; ?>"></div>
                        </div>
                    </div>
                    <!-- End Progress Box -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End About -->

    <!-- Experience -->
    <div id="experience">

        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="container content-lg">

                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0"><?php echo $fetch_i['site_title']; ?></h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="row row-space-2 margin-b-4">
                            <div class="col-md-4 md-margin-b-4">
                                <div class="service" data-height="height">
                                    <div class="service-element">
                                        <i class="service-icon icon-chemistry"></i>
                                    </div>
                                    <div class="service-info">
                                        <h3><?php echo $fetch_i['first_exp']; ?></h3>
                                        <p class="margin-b-5"><?php echo $fetch_i['first_comment']; ?></p>
                                    </div>
                                    <a href="#" class="content-wrapper-link"></a>
                                </div>
                            </div>
                            <div class="col-md-4 md-margin-b-4">
                                <div class="service bg-color-base wow zoomIn" data-height="height"
                                    data-wow-duration=".3" data-wow-delay=".1s">
                                    <div class="service-element">
                                        <i class="service-icon color-white icon-screen-tablet"></i>
                                    </div>
                                    <div class="service-info">
                                        <h3 class="color-white"><?php echo $fetch_i['second_exp']; ?></h3>
                                        <p class="color-white margin-b-5"><?php echo $fetch_i['second_comment']; ?></p>
                                    </div>
                                    <a href="#" class="content-wrapper-link"></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service" data-height="height">
                                    <div class="service-element">
                                        <i class="service-icon icon-badge"></i>
                                    </div>
                                    <div class="service-info">
                                        <h3><?php echo $fetch_i['third_exp']; ?></h3>
                                        <p class="margin-b-5"><?php echo $fetch_i['third_comment']; ?></p>
                                    </div>
                                    <a href="#" class="content-wrapper-link"></a>
                                </div>
                            </div>
                        </div>
                        <!--// end row -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Experience -->

    <!-- Work -->

    <!-- Masonry Grid -->

    <!-- Work -->

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Work -->
    </div>
    </div>
    <!-- End Masonry Grid -->
    </div>
    </div>
    <!--// end row -->
    </div>
    </div>
    <!-- End Work -->

    <!-- Contact -->
    <div id="contact">
        <div class="bg-color-sky-light">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0"><?php echo $fetch_c['site_title']; ?></h2>
                            <p>Bana Ulaşın</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="row">
                            <div class="col-md-3 col-xs-6 md-margin-b-30">
                                <h5>Konum</h5>
                                <a href="#"><?php echo $fetch_c['locaitonn']; ?></a>
                            </div>
                            <div class="col-md-3 col-xs-6 md-margin-b-30">
                                <h5>Phone</h5>
                                <a href="#"><?php echo $fetch_c['phone']; ?></a>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <h5>Email</h5>
                                <a href="mailto:soruncozuk@gmail.com"><?php echo $fetch_c['email']; ?></a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    </div>
    <!-- End Contact -->
    <!--========== END PAGE LAYOUT ==========-->

    <!--========== FOOTER ==========-->

    </div>
    <!--// end row -->
    </div>
    </footer>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="vendor/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="vendor/jquery.easing.js" type="text/javascript"></script>
    <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
    <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
    <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
    <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
    <script src="vendor/jquery.appear.js" type="text/javascript"></script>
    <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="js/layout.min.js" type="text/javascript"></script>
    <script src="js/components/progress-bar.min.js" type="text/javascript"></script>
    <script src="js/components/masonry.min.js" type="text/javascript"></script>
    <script src="js/components/wow.min.js" type="text/javascript"></script>

<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
<!-- END BODY -->

</html>