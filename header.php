<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 8]>
    <script src="<?php echo get_template_directory_uri()?>/assets/plugins/modernizr.min.js"></script>
    <![endif]-->

    <?php wp_head();?>

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="66" <?php body_class(); ?>>
    <!--[if lt IE 10]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- HERO START -->
    <header id="home" class="hero">
        <div class="hero-body">
            <div class="hero-text text-center">
                <h1>
                    I'm Zakir Sajib
                </h1>

                <h1 class="small">
	                <span id="js-rotating">Full Stack WordPress Developer | WooCommerce Experience</span></h1>

                <p>34 years young, husband and father, coffee addict.</p>

                <div class="page-scroll">
                    <a href="#profile" class="btn btn-lg btn-custom">
                        <?php echo get_theme_mod('button_label_intro', 'No button label.')?>
                    </a>
                </div>
                <!-- //.page-scroll -->
            </div>
            <!-- //.hero-text -->
        </div>
        <!-- //.hero-body -->
    </header>
    <!-- //HERO END -->


    <!-- NAVIGATION START -->
    <nav id="navigation" class="navbar navbar-fixed-top center-menu" role="navigation">
        <div class="container navbar-container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".zakir-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand visible-xs visible-sm" href="#page-top">ZAKIR</a>
            </div>
            <!-- //.navbar-header -->

            <div class="navbar-collapse collapse zakir-collapse">
                <ul class="nav navbar-nav">
                    <li class="page-scroll">
                        <a href="#home">Home</a>
                    </li>

                    <li class="page-scroll">
                        <a href="#profile">Profile</a>
                    </li>

                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>

                    <li class="page-scroll">
                        <a href="#services">Services</a>
                    </li>

                    <li class="page-scroll">
                        <a href="#resume">Resume</a>
                    </li>

                    <li class="page-scroll">
                        <a href="#references">References</a>
                    </li>

                    <li class="page-scroll">
                        <a href="#skills">Skills</a>
                    </li>

                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- //.navbar-collapse -->
        </div>
        <!-- //.navbar-container -->
    </nav>
    <!-- //NAVIGATION END -->
