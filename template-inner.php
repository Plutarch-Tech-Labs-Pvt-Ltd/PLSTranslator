<?php
 /**
 * Template Name: Inner Pages
 *
 * 
 */
get_header();
?>


<div class="page_head ecommerce">
     <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h1><?php echo get_the_title(); ?></h1>
                <ul class="uk-breadcrumb">
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li><span><?php echo get_the_title(); ?></span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="inner_space">
     <div class="container">
        <div class="row">
            <div class="col-xl-8">
                
                <?php echo get_the_content();?>
                
            </div>
             <div class="col-xl-4">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header bg_expand">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>                            
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Enquiry Form</h3>                               
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                      
                        <?php echo do_shortcode('[contact-form-7 id="134" title="Contact form for Inner page"]'); ?>
                          
                    </div>
                    
                </div>
             </div>
        </div>
    </div>
</div>
    

<?php
get_footer(); 
?>