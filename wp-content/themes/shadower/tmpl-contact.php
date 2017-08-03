<?php
/**
 * Template Name: Contact
 *
 * The template for displaying contact page.
 *
 * 
 */

get_header(); ?>


	<?php while ( have_posts() ) : the_post(); ?>
            
        <section class="space-none-top">
            
            <div class="entry-title-container">
                        
                <?php
                if ( class_exists( 'UixShortcodes' ) ) {
					echo do_shortcode( "[uix_map style='".esc_attr( get_theme_mod( 'custom_map_style', 'normal' ) )."' width='100%' height='".floatval( get_theme_mod( 'custom_map_height', '285' ) )."px' latitude='".floatval( get_theme_mod( 'custom_map_latitude', '37.7770776' ) )."' longitude='".floatval( get_theme_mod( 'custom_map_longitude', '-122.4414289' ) )."' zoom='".floatval( get_theme_mod( 'custom_map_zoom', '14' ) )."' name='".esc_attr( get_theme_mod( 'custom_map_name', __( 'SEO San Francisco, CA, Gough Street, San Francisco, CA', 'shadower' ) ) )."' marker='".esc_url( get_theme_mod( 'custom_map_marker', UixShortcodes::plug_directory() .'assets/images/map/map-location.png' ) )."' ]" );
                }
                
                 ?>

            </div>
                                
    

            <div class="container">
                    <div class="row">
                        <div class="col-md-6 transition">
                        
                            <?php the_content(); ?>
                         
                        </div>
                        <!-- .col-md-6 end -->
                        
                        <div class="col-md-6 transition">
                                <?php comment_form(); ?>
                        </div>
                        <!-- .col-md-6 end -->             
                        
                    </div>
                    <!-- .row end -->
                    
            </div>
            <!-- .container end -->
           
        </section>
                            
    
    <?php endwhile; ?>  
    
    

<?php get_footer(); ?>


