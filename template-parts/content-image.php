<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 

	

    
		<div class="full-post code full-post-code<?php if (is_singular()) echo 'padding-article'; ?>" style="">
		<div class="row">
	
		<div class="col-sm-9">
			<header class="code-entry-header">
				
					<?php
					if ( 'post' === get_post_type() ) {
						/* translators: used between list items, there is a space after the comma */
						$categories_list = get_the_category_list( esc_html__( ', ', 'spritekit-v3' ) );
						if ( $categories_list ) {
							/* translators: 1: list of categories. */
							printf( '<div class="code-cat-links">' . esc_html__( '%1$s', 'spritekit-v3' ) . '</div>', $categories_list ); // WPCS: XSS OK.
						}
					}
					?>
					<?php
						if ( is_singular() ) :
							the_title( '<h3 class="code-entry-title">', '</h2>' );
						else :
							the_title( '<h3 class="code-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
						endif;

						if ( 'post' === get_post_type() ) : ?>
						
						<?php
						endif; ?>
			</header><!-- .entry-header -->
		</div>
				
	</div>

	<div class="entry-content row">

		<div class="col-sm-2 push-sm-10">
					<div class="entry-meta"> 
						
						<span class="time"><?php the_time('M d, Y');  ?></span>
						<a target="_blank"  href="https://twitter.com/modrzjwzky?lang=pl">@<?php the_author() ?></a>
						
					</div> <!-- entry meta end -->

					<footer class="entry-footer">
						<?php spritekit_v3_entry_footer(); ?>
					</footer><!-- .entry-footer -->

		</div>
				
		<div class="col-sm-10 pull-sm-2">
			
		
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading →', 'spritekit-v3' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'spritekit-v3' ),
					'after'  => '</div>',
				) );
			?>

			
	</div>
	
	</div><!-- .entry-content -->
		<?php if(is_single()){ ?>
		<h2 class="comments-h" >Comments</h2>
		<div class="comments">
		<?php 
			echo comment_form(); 
		?>
		</div>
		<?php
} ?>


	
	</div>
</div>

</article><!-- #post-## -->
<hr class="separator" />