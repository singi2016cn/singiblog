<?php
/**
 * The main template file.
 *
 */

get_header(); ?>


   <!-- Uix Slideshow
    ====================================================== -->
    <?php get_template_part( 'partials', 'uix_slideshow' ); ?>
                 
               
   <!-- Post List
    ====================================================== -->
    <section>
        <div class="container">
            <?php if ( shadower_blog_layout() == 'sidebar' ) { ?>
            <div class="row">
                <div class="col-md-9">
            <?php } ?>
            
                
                        <?php 
                            if ( have_posts() ) { 
                            
                                while ( have_posts() ) : the_post();
                                
                                    get_template_part( 'content', get_post_format() );
                                    
                                endwhile;
                            
                            } else { 
                            
                                get_template_part( 'content', 'none' ); 
                            
                            } 
                         ?>            
                
                              
                        <div class="pagination-container t-c transition">
                            <?php
                                if ( get_theme_mod( 'custom_pagination', true ) ) {
                                    //Use numeric Paginate
									the_posts_pagination( array(
										'type'               => 'list',
										'mid_size'           => 3,
										'prev_text'          => '<i class="fa fa-angle-left"></i>',
										'next_text'          => '<i class="fa fa-angle-right"></i>',
									) ); 	 
                                } else {
                                    //Only "next" and "previous" button
									the_posts_navigation( array(
										'prev_text'          => '<i class="fa fa-angle-left"></i>',
										'next_text'          => '<i class="fa fa-angle-right"></i>',
									) ); 

                                }
                            ?>
                        </div> 
                        <!-- .pagination-container  end -->

            <?php if ( shadower_blog_layout() == 'sidebar' ) { ?>
                </div>
                <!--  .col-md-9  end -->
                <div class="col-md-3">
                
                    <?php get_sidebar(); ?>
                
                </div>
                <!--  .col-md-3  end --> 
            
            </div>
            <!-- .row  end -->
            <?php } ?>
        

            
        </div>
        <!-- .container end -->

    </section>
       
    

   <!-- Advertising
    ====================================================== --> 
    <?php
    if ( is_active_sidebar( 'homepage-advertising' ) ) {
		dynamic_sidebar( 'homepage-advertising' ); 
	}
	?>
   
        
  
<?php get_footer(); ?>
