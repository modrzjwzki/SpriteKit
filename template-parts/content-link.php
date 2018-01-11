<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>
<?php 
	if(is_singular()):
?>
	<hr class="separator"></hr>
<?php 
	endif;
?>
<article id="post-<?php the_ID(); ?>" class="microblog" <?php post_class(); ?>>
<div class="row">
	
	<span class="microblog-time">

	<a href="<?php the_permalink(); ?>"><?php the_time('m-j-y g:i A'); ?></span></a>
	<div class="entry-content-microblog">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Czytaj dalej <span class="meta-nav">&rarr;</span>', '_s' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
        
     

	</div><!-- .entry-content -->
</div>
</article><!-- #post-## -->

<?php 
	if(is_singular()):
?>
	<hr class="separator"></hr>
<?php 
	endif;
?>

<?php  
if(is_singular()):
	//nothing here;
else:
	?><hr class="separator"></hr><?php
endif;
?>