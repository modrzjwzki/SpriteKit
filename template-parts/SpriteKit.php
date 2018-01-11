

<?php /* Template Name: SpriteKit-Home */ ?>
<?php get_header(); 

global $post;
?>


<div class="container" style="max-width:900px; margin:auto;">
    <div class="spriteKit" >

        <img src="<?php echo get_template_directory_uri() . '/assets/img/spritemen.png'; ?>" class="img-responsive spritemen"  width="200" />
        <h1 id="chuj"><?php echo get_bloginfo(); ?></h1>

        <div id="p">
            <?php echo get_bloginfo(); ?> - to blog poświęcony tematyce gier wideo. <br />
            Z czego zbudowane, jak są zrobione i w jaki sposób działają. 
            Tutaj dowiesz się co to DirectX, OpenGL, Phaser, Cocos2d i inne technologie, z których korzysta się do tworzenia gier. 
            <br />Nie zabraknie również popularnych silników tj. Unity3D i Unreal Engine 4.
    
        </div>
    </div>
    
    <div class="newsletter">
       <p style="font-size:16px; margin:auto; max-width:350px; color:#0097fb ;"> Zapisz się do newsletter</p>
        <input type="text" placeholder="Email" />
    </div>
    
    <div class="row spritekit-row" style="margin-left:auto;margin-right:auto;" >
        <div class="col-sm-8" style="margin-bottom:20px;">
            <ul class="links-my">
                <li><h4>Gdzie mnie znajdziesz:</h4></li>
                <li><a href="https://github.com/kubamod"><i class="material-icons">&#xE157;</i>Kody źródłowe projektów na GitHub</a></li>
                <li><a href="http://www.wykop.pl/ludzie/kubam1414/"><i class="material-icons">&#xE157;</i>Moje konto na Wykopie </a></li>
                <li><a href="https://twitter.com/modrzjwzky"><i class="material-icons">&#xE157;</i>Mój kochany twitter  </a></li>
                <li><a href="https://www.youtube.com/channel/UCOj167hikCJiBiNfAc4gvSA?view_as=subscriber"><i class="material-icons">&#xE157;</i>Kanał na Youtube</a></li>
                
            </ul>
            <br />
            <ul class="links-my">
                <li><h4>Ostatnie filmy:</h4></li>
              <?php

$args = array( 'posts_per_page' => 2,  'category_name'    => 'video', );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<li>
		<a href="<?php the_permalink(); ?>"><i class="material-icons" style="margin-right:10px;">&#xE039;</i><?php the_title(); ?></a>
	</li>
<?php endforeach; 

?>
            </ul> 
        </div>
        <div class="col-sm-4 ">
            <ul>
                <li><h4>Forum dla deweloperów:</h4></li>
                <li style="max-width:200px; display: inline-block;">Zadawaj pytania, znajduj odpowiedzi. Poznawaj ludzi i dyskutuj.</li>
                <!-- <i class="material-icons forum-icon" >&#xE0BF;</i> -->
                <li style="margin-top:10px;"><a href="#">Już wkrótce ></a></li>
           
            </ul> 
            
            
        </div>
        
    </div>
    
   
    <hr class="separator" />   
        <h3 style="font-size:16px;  padding-left:15px;  ">Ostatnie posty:</h3>
            <div class="row" style="margin:auto;">
            <?php 
            $args = array( 'posts_per_page' => 3, );
            $myposts = get_posts( $args );
            
            foreach ( $myposts as $post ) : setup_postdata( $post );
            
            ?>
            
                <div class="col-md-4" style="margin-top:10px; margin-bottom:10px;">
                <div style="position:relative; margin:auto;" >
                    <div class="SpriteKit-image" style="
                    background:
                    url('<?php echo get_the_post_thumbnail_url( $post = $post); ?>');
                    width:100%;
                    height:200px;
                    background-size: cover;
                    background-position:center;
                    ">
                </div>
		<a href="<?php the_permalink(); ?>" style="position:absolute; bottom:50%; display:block;  z-index:1000;" class="spritekit-link"><?php
        
         
         the_title(); 
    
         ?>
            
         </a>
        </div>
        </div>
       
	
<?php
 endforeach; 
wp_reset_postdata();?>
                 </div>
                
            
    </div>
    
<br />
<br />
<?php get_footer(); ?>