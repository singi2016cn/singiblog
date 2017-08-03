<?php
/**
 * Template Name: Page No SideBar
 *
 * The template for displaying all pages.
 * 
 */

get_header(); ?>
     
	<?php while ( have_posts() ) : the_post(); ?>

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
                <div class="row">
                
                <div class="col-md-12 transition">
                
                    
                    <?php 
                        the_content(); 
                        wp_link_pages( array(
                            'before'      => '<div class="page-links"><span class="page-links-title">' . shadower_wp_kses( __( 'Pages: ', 'shadower' ) ) . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                        ) );
                    ?> 
                    
                    <?php edit_post_link( esc_html__( 'Edit', 'shadower' ), '<span class="edit-link">', '</span>' ); ?>
                    
					<?php
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                    ?>
                    
    
                    </div>
                    <!--  .col-md-12  end --> 
                
                
                </div>
                <!-- .row  end -->   
            </div>
            <!-- .container end -->
        </section>
        
                               
    
    <?php endwhile; ?>  

<?php get_footer(); ?>
