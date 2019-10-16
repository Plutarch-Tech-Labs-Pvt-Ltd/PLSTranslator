<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
   <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-sm-3 col-12 footer_widget">
                        <h4>Exlore Links</h4>
                        <ul class="list-unstyled widget_list">
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo esc_url( get_page_link(135) ); ?>">About us</a></li>
							<li><a href="<?php echo esc_url( get_page_link(137) ); ?>">Best Practices</a></li>
							<li><a href="<?php echo esc_url( get_page_link(256) ); ?>">Training</a></li>
                            <li><a href="<?php echo esc_url( get_page_link(233) ); ?>">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-3 col-12 footer_widget">
                        <h4>  Industries</h4>
                        <ul class="list-unstyled widget_list">
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

                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            
                        <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>

                        </ul>
                    </div>                    
                    <div class="col-xl-3 col-lg-3 col-sm-3 col-12 footer_widget">
                        <h4>Information</h4>
                        <ul class="list-unstyled contact_widget">
                            <li>
                                <strong>Office Address</strong>
                                <a href="#">Blue Meadows CHS, C-1002, off JVLR,<br/>
                                behind Majas Bus depot, Jogeshwari East,
                                <br/>Mumbai-400060.
                                </a>
                            </li>
                            <li>
                                <strong>Contact enquiry</strong>
                                <a href="#">(+91) 9820731115</a>
                            </li>
                            <li>
                                <strong>Email us at</strong>
                                <a href="#">phenixlingualsolutions@gmail.com</a>
                            </li>
                             <li>
                                <strong>Hours of operation</strong>
                                <a href="#">10:00 am - 07:00 pm</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-3 col-12 footer_widget">
                        <h4>Blog</h4>
                        <!--<ul class="list-unstyled widget_list">
                            <li><a href="#">Blog link one</a></li>
                            <li><a href="#">Blog link two</a></li>
                            <li><a href="#">Blog link three</a></li>
                            <li><a href="#">Blog link four</a></li>
                            <li><a href="#">Blog link five</a></li>
                            <li><a href="#">Blog link six</a></li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </footer>

        <div class="bottom_footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <p class="d-inline-block">Copyright &copy 2019-20 <a href="<?php echo site_url();?>">Plstranslators</a>. All right reserved | <a href="<?php echo esc_url( get_page_link(196) ); ?>">Sitemap</a> | <a href="<?php echo esc_url( get_page_link(198) ); ?>">Terms & Conditions</a> | <a href="<?php echo esc_url( get_page_link(3) ); ?>">Privacy Policy</a> | <a href="<?php echo esc_url( get_page_link(235) ); ?>">Disclaimer</a></p>
                       
                    </div>
                    <div class="col-xl-4 float-right">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="facebook"></a></li>
                            <li class="list-inline-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/f_twitter.png" alt="facebook"></a></li>
                            <li class="list-inline-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/f_linkedin.png" alt="facebook"></a></li>
                            <li class="list-inline-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/f_instagram.png" alt="facebook"></a></li>
                            <li class="list-inline-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/f_youtube.png" alt="facebook"></a></li>                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d7fe8cec22bdd393bb621a3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <!-- jqueries -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/uikit.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/uikit-icons.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

<?php wp_footer(); ?>

</body>
</html>
