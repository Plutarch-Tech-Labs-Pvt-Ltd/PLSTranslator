<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<?php wp_head(); ?>
	
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/uikit.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/ui.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css" rel="stylesheet" />    
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" rel="stylesheet" />
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


    <div class="topBand">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <ul class="list-inline list_social">
                        <li class="list-inline-item"><a href="tel:9820731115"><i class="fa fa-phone"></i> &nbsp; Call us (+91) 9820731115</a></li>
                        <li class="list-inline-item"><a href="mailto:phenixlingualsolutions@gmail.com"><i class="fa fa-envelope"></i>&nbsp;phenixlingualsolutions@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="list-inline list_social float-left social_div">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
       
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="https://plstranslators.com">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plstranslators_logo.jpg" alt="logo" height="150" width="150" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <div class="uk-inline drop_links"style="padding-top: 7px;padding-right: 5px;">
                                <a style="color: rgb(63, 69, 88);font-size: 16px;"> Industries &nbsp;<i class="fa fa-angle-down"></i></a>
                                 <div uk-dropdown>
                                    <ul class="list-unstyled">
<?php
$args = array(
'post_type'      => 'page',
'posts_per_page' => -1,
'post_parent'    => 131,
'order'          => 'ASC',
'orderby'        => 'menu_order'
);


$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
    
                                        <li class="p-l-10 f-14">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </li>
                                     <?php endwhile; ?>

<?php endif; wp_reset_postdata(); ?>

                                    </ul>
                                 </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                   <div class="uk-inline drop_links">
                                <a class="nav-link" href="<?php echo esc_url( get_page_link(159) ); ?>">Translation & Interpretation Services(T&I) &nbsp;</a>
                                 
                                </div>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url( get_page_link(256) ); ?>">Training</a>
                            </li>
							
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url( get_page_link(137) ); ?>">Best Practices</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url( get_page_link(135) ); ?>">About us</a>
                            </li>
							
							<li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url( get_page_link(121) ); ?>">Blog</a>
                            </li>
							
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
  
