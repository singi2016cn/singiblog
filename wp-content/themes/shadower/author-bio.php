<?php
/**
 * The template for displaying Author bios
 *
 */
?>

<div class="author-card">
	<div class="author-card-top">
		<div class="text">
			<h3><?php printf( esc_html__( 'Published by %s', 'shadower' ), get_the_author() ); ?></h3>
        </div>
		<div class="pic">
			<?php echo get_avatar( get_the_author_meta( 'user_email' ), 100 );?>
        </div>
	</div>

    <div class="author-card-middle">
        <?php the_author_meta( 'description' ); ?>
    </div>

    <a class="author-card-final" title="<?php printf( esc_attr__( 'View all posts by %s', 'shadower' ), get_the_author() ); ?>" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">&rarr;</a>
    

</div>
<!-- .author-card  end -->
