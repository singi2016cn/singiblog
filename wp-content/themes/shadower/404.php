<?php
/**
 * The template for displaying 404 pages (not found).
 * 
 */

get_header(); ?>

    <section class="space-sm">
        <div class="container">
                <div class="row">
                    <div class="col-md-12 relative">
                        
                        <div class="error-container">
                            <h1 class="error">
                                <?php echo shadower_wp_kses( __( 'Error 404', 'shadower' ) ); ?>
                            </h1>
                            <p class="error-info"><?php echo shadower_wp_kses( __( 'The page you were looking for wasn\'t found, if you think this might be a mistake drop us a line', 'shadower' ) ); ?></p> 
                            
                            <div class="search-form">
							<form class="form-merge no-labels" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
									<label for="search"><?php printf( esc_html__( 'Search Results for: %s', 'shadower' ), '<span>' . get_search_query() . '</span>' ); ?></label>
									<input id="s" name="s" class="col-md-8 col-sm-6 controls-custom-merge" value="" placeholder="<?php echo esc_attr__( 'Enter your search term...', 'shadower' ); ?>" type="search" required />
									<button type="submit" class="col-md-4 col-sm-6 controls-custom-merge button-bg-primary"><?php echo shadower_wp_kses( __( 'Search', 'shadower' ) ); ?></button>
							</form>   
							</div> 

                            
                        </div>
    
                    
                    
                    
                    
                     
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                
        </div>
        <!-- .container end -->
       
    </section>

    

<?php get_footer(); ?>
