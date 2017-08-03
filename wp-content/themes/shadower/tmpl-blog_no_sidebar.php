<?php
/**
 * Template Name: Blog No SideBar
 *
 * The template for displaying blog pages.
 *
 * 
 */

get_header(); ?>


   
    <section class="space-sm">
        <div class="container t-c">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h2><?php the_title();?></h2>
                    </div>
                </div>
                <!-- .row end -->
        </div>
        <!-- .container end -->
    
    </section> 
   
   
    <section class="space-none-top">
        <div class="container">

			<?php 
                $wp_query = new WP_Query( array(
                                'post_type'      => 'post',
                                'showposts'      => shadower_blog_show(), 
                                'paged'          => $paged
                            )
                );
                
                if ( $wp_query->have_posts() ) { 
                
                    while ($wp_query->have_posts()) : $wp_query->the_post(); 
                        get_template_part( 'content', get_post_format() ); 
                    endwhile; 
                    
					// Reset post data to prevent conflicts with the main query 
					wp_reset_postdata();
                
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

            
        </div>
        <!-- .container end -->

    </section>
       


<?php get_footer(); ?>


