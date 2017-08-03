<?php
/**
 * The template for displaying the footer.
 *
 */
?>

        <!-- Footer
        ============================================= -->    
        <footer class="footer-main-container">
        
            <div class="container">
                <div class="row">
                    <div class="col-md-4 t-l">
                        
                        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shadower' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'shadower' ), 'WordPress' ); ?></a>
                        
                    </div>
                    <div class="col-md-4 t-c">
                    
  						<div class="footer-menu">
							  <?php
                              
                                    /*
                                     * Display footer menu
                                     *
                                    */    
                                    if ( has_nav_menu( 'footer' ) ) {
                            
                                        wp_nav_menu(
                                                array(
                                                    'theme_location'  => 'footer',
                                                    'menu'            => '',
                                                    'container'       => false,
                                                    'container_class' => '',
                                                    'container_id'    => '',
                                                    'menu_class'      => '',
                                                    'menu_id'         => 'footer-menu',
                                                    'echo'            => true,
                                                    'fallback_cb'     => '',
                                                    'before'          => '',
                                                    'after'           => '',
                                                    'link_before'     => '',
                                                    'link_after'      => '',
                                                    'items_wrap'      => '<ul id="%1$s">%3$s</ul>', 
                                                    'depth'           => 0
                                                )
                                            );	
                
                                            
                                    }
       
                              ?> 
						</div>
                        
                    </div>
                    <div class="col-md-4 t-r">
                        
                        
                        <div class="social-list social-footer">
                            <?php shadower_social_buttons(); ?>
                        </div>   

  
                    </div>
                </div>
            </div>
            <!-- .container  end -->

        </footer>
        
        

    </div>
    <!-- .wrapper end -->
    
    <?php wp_footer(); ?>
   
  </body>
</html>


     