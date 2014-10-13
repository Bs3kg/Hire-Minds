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


<div class="jumbotron">

    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="wp-content/themes/Hireminds/img/logo.jpg" class="navbar-brand hidden-xs img-responsive" href="<?php echo site_url(); ?>" />
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right front-nav">
                    <li><a href="#events">Events</a></li>
                    <li><a href="#sponsers">Sponsors</a></li>
                    <li><a href="#faqs">FAQs</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->




        </div>
    </div>

    <div class="container homebtn center-block"">
        <img class="img-responsive center-block" src="wp-content/themes/Hireminds/img/jumboimg.png" />
        <a href="https://ti.to/snagajob/hire-minds" class="btn">Registration opens Nov. 3</a>
    </div>
</div>




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; else: ?>

    <h1>Oops!</h1>
    <p>Looks like something went wrong.</p>

<?php endif; ?>




<?php get_footer();


