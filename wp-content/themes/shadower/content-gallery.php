<?php
/**
 * The template for displaying posts in the Gallery post format
 * 
 */
$thumbnail_url     = ( has_post_thumbnail() ) ? wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) : shadower_default_featured_image();
$thumbnail_echo    = ( has_post_thumbnail() ) ? get_the_post_thumbnail( get_the_ID(), 'shadower-post-thumbnail-large', array( 'class' => 'parallax-img' ) ) : '<img src="'.shadower_default_featured_image().'" class="parallax-img" alt="'.the_title_attribute( 'echo=0' ).'" >';
$gallery           = shadower_get_content_gallery();
?>

<?php  if ( is_single() ) {  ?>

    <section <?php post_class( array( 'space-none-top' ) ); ?>  id="post-<?php the_ID(); ?>">
        <div class="parallax parallax-auto overlay-bg overlay-bg-black overlay-text-white height-50 entry-title-container" data-speed="0.3" data-image-src="<?php echo esc_url( $thumbnail_url ); ?>">
            <?php echo shadower_wp_kses( $thumbnail_echo ); ?>
            <div class="pos-vertical-align t-c">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                            <?php the_title( '<h1 class="h2">', '</h1>' ); ?>
                            <?php get_template_part( 'partials', 'entry_meta' ); ?>   
                    </div>
                </div>
                <!-- .row end -->

            </div>
            <!-- .pos-vertical-align  end -->
        </div>
    </section>   

    
<?php } else { ?>

    <!-- Topics Item -->
   <?php 
	if  ( !has_post_thumbnail() && empty( $gallery ) ) {
	    $featured = 'no-featured-img';
	} else {
		$featured = '';
	}
	
	if ( Shadower_Core::inc_str( $gallery, 'custom-theme-flexslider' ) ) {
		$col      = 'col-sm-6';
	} else { 
		$col      = 'col-md-12';
		$featured = 'no-featured-img';
	} 
	?>   
    
    <div <?php post_class( array( 'topics-item', 'style-1', 'scroll-reveal', esc_attr( $featured ) ) ); ?> id="post-<?php the_ID(); ?>">
        <div class="row">
        
                <div class="title-style-fieldset">
                      <?php the_title( sprintf( '<h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
                      <h5 class="font-normal">
                          <span>
							<?php
                                echo shadower_wp_kses( get_the_term_list(
                                        get_the_ID(), 
                                        'category', 
                                        '', 
                                        ', ', 
                                        '' 
                                ) );
                            ?>
                          </span>
                      </h5>
                </div>
                
                
                
                <?php if ( has_post_thumbnail() || !empty( $gallery ) ) { ?>
                    <div class="<?php echo esc_attr( $col ); ?> topics-item-img transition">
                        
                        <?php if ( !empty( $gallery ) || ( has_post_thumbnail() && !empty( $gallery ) ) ) { ?>
                           
                            <?php  echo shadower_wp_kses( $gallery ); ?>
                        
                       <?php } else { ?>
							 <a href="<?php echo esc_url( shadower_get_content_linkurl() ); ?>" target="_blank">
								<?php
									$imgarr = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'shadower-post-retina-thumbnail' );
									the_post_thumbnail( 'post-thumbnail', array(
										'alt' => the_title_attribute( 'echo=0' ),
										'data-retina' => esc_url( $imgarr[0] ),

									) ); 
								?>
							 </a> 
                        
                       <?php } ?>       
                          

                    </div>
                    <div class="<?php echo esc_attr( $col ); ?> topics-item-info list-normal table-normal">
                         <?php the_excerpt(); ?>
                    </div>

                <?php } else { ?>
                    <div class="col-md-12 transition">
                        <div class="topics-item-info list-normal">
                          <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php } ?>
                              
        
                


        </div>
        <!-- .row  end -->
    </div>
    <!--  .topics-item  end -->
                
<?php } ?>
