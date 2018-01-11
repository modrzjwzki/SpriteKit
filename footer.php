<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SpriteKit_v3
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div class="cookies-info">
		<div class="container" style="max-width:1024px;">
			* We are using data saved in cookies to advertisements and statistic purposes as well as individual users needs.  Collaborating companies may also use them. If you want you can change cookies settings in your web browser and disable them, however, using our site signifies you are accepting to save them in memory of your device.
		<hr style="margin-top:4px;margin-bottom:15px; margin-top:15px;"/>
		</div>
	</div>
	

		<div class="site-info container" style="max-width:1024px; margin:auto;">
		<?php if (is_single() || is_page() || is_category()): ?>
			<div class="breadcrumb-footer"><img src="<?php echo get_template_directory_uri().'/assets/img/spritemen2.png'; ?>" width="20" style=" opacity: 0.8;
	filter: alpha(opacity=80);" alt="logo"/><?php get_breadcrumb(); ?></div>
	<hr />
		<?php endif; ?>	
		
			<div style=" color:#888;">Don't steal my shit please</div>
			
			<div class="copy row">
				<div class="col-sm-5">
				Copyright © 2017 <?php echo get_bloginfo(); ?>. All rights reserved.
				</div>
				<div class="col-sm-7">
					<a href="https://twitter.com/modrzjwzki">Twitter</a>


					<a href="https://www.instagram.com/modrzjwzki/">Instagram</a>


					<a href="<?php echo get_home_url() . '/about-me' ?>">Contact</a>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script>
$( "a:contains('My projects')" ).addClass("my-projects");
$( ".breadcrumb-footer a:contains('Home')" ).empty();

	$('.search-field').attr("placeholder", "Type here");

</script>

<?php
if (is_singular()) {
	if (has_post_thumbnail()):
		echo "<script>document.getElementById('content-image').scrollIntoView();</script>";
	endif;
}
?>
<?php wp_footer(); ?>
<div class="zelda img-fluid" ></div>
</body>
</html>

<!--	&copy Kuba Modrzejewski &middot; Powered by SpriteKit &middot; <a href="https://twitter.com/modrzjwzky">Twitter</a> &middot; <a href="https://www.instagram.com/modrzjwzki/">Instagram</a> &middot; <a href="<?php echo esc_url( home_url( '/about-me' ) ); ?>">about me</a> &middot; <a href="javascript:;" onclick="document.body.scrollTop = 0;">Return to top </a>&middot; -->
