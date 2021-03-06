<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://www.hiremindssummit.com/wp-content/themes/Hireminds/favicon.ico">

    <title>
        <?php wp_title( '|', true, 'right' ); ?>
        <?php bloginfo ('name'); ?>
    </title>

    <?php wp_head(); ?>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>


<div class="page-nav">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo site_url(); ?>"><img src="http://www.hiremindssummit.com/wp-content/themes/Hireminds/img/HRNavlogo.jpg" class="navbar-brand" /></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url(); ?>#events">Events</a></li>
                    <li><a href="<?php echo site_url(); ?>#sponsers">Sponsors</a></li>
                    <li><a href="<?php echo site_url(); ?>#faqs">FAQs</a></li>
                    <li><a href="<?php echo site_url(); ?>#contact">Contact</a></li>

                </ul>
            </div><!--/.nav-collapse -->




        </div>
    </div>
   </div>



