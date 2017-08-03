<?php
/**
 * Template part for displaying results in search pages.
 *
 */

?>

<!-- Topics Item -->
<div <?php post_class( array( 'topics-item', 'style-1', 'scroll-reveal', ( ( !has_post_thumbnail() ) ? esc_attr( 'no-featured-img' ) : '' ) ) ); ?> id="post-<?php the_ID(); ?>">
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

			<?php if ( has_post_thumbnail() ) { ?>
				<div class="col-sm-6 topics-item-img transition">
					 <a href="<?php the_permalink(); ?>" >
						<?php
                            $imgarr = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'shadower-post-retina-thumbnail' );
							the_post_thumbnail( 'post-thumbnail', array(
								'alt' => the_title_attribute( 'echo=0' ),
								'data-retina' => esc_url( $imgarr[0] ),

							) ); 
						?>
					 </a> 
				</div>
				<div class="col-md-6 topics-item-info list-normal table-normal">
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
