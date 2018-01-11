

<?php /* Template Name: newsletter */ ?>
<?php get_header(); 

global $post;
?>


<div class="container" style="max-width:900px; margin:auto;">
    <div class="spriteKit" >

        <img src="<?php echo get_template_directory_uri() . '/assets/img/spritemen.png'; ?>" class="img-responsive spritemen"  width="200" />
        <h1 id="chuj">Newsletter</h1>

        <div id="p">
            <?php echo get_bloginfo(); ?> - to blog poświęcony tematyce gier wideo. <br />
            Z czego zbudowane, jak są zrobione i w jaki sposób działają. 
            Tutaj dowiesz się co to DirectX, OpenGL, Phaser, Cocos2d i inne technologie, z których korzysta się do tworzenia gier. 
            <br />Nie zabraknie również popularnych silników tj. Unity3D i Unreal Engine 4.
    
        </div>
    </div>
    
    <div class="newsletter">
       <p style="font-size:16px; margin:auto; max-width:350px; color:#0097fb ;"> Zapisz się do newsletter</p>
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?> 
    </div>
   
<?php get_footer(); ?>