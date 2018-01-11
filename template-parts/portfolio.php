
<?php /* Template Name: Portfolio */ ?>
<?php get_header(); 
global $post;
?>

<div class="container" style="max-width:900px; padding-left:0;padding-right:0; padding-top:50px;;">
<!-- Nav tabs -->
<ul class="nav nav-pils nav-justified" role="tablist">
  <li class="nav-item nav-first">
    <a class="nav-link active" data-toggle="tab" href="#Games" role="tab">Games</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#illustrations" role="tab">Illustrations</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#themes" role="tab">Themes</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link nav-last disabled" data-toggle="tab" href="#settings" role="tab">Soon...</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content portfolio-tab-content">
  <div class="tab-pane active" id="Games" role="tabpanel">
<div class="row" style="margin:auto;">
            <?php 
            $args = array(
                'category_name' => 'Games'
            );
            $myposts = get_posts($args);
            
            foreach ( $myposts as $post ) : setup_postdata( $post );
            
            ?>
            
                <div class="col-md-4" style="margin-top:10px; margin-bottom:10px;">
                <div class style="position:relative; margin:auto;">
                    <div style="
                    background:
    
                    url('<?php echo get_the_post_thumbnail_url( $post = $post); ?>');
                    width:100%;
                    height:200px;
                    background-size: cover;
                    background-position:center;
                    background-color:#fcfcfc;
                    border-radius:2px;
                    z-index:1;
                    ">
                </div>
		<a href="<?php the_permalink(); ?>" class="spritekit-link"><?php
        
         
         the_title(); 
    
         ?>
            
         </a>
        </div>
        </div>
       
	
<?php
 endforeach; 
 ?>
</div>

  </div>
  <div class="tab-pane fade" id="illustrations" role="tabpanel">
  
  <div class="row" style="margin:auto;">
            <?php 
            $args = array(
                'category_name' => 'Illustrations'
            );
            $myposts = get_posts($args);
            
            foreach ( $myposts as $post ) : setup_postdata( $post );
            
            ?>
            
                <div class="col-md-4" style="margin-top:10px; margin-bottom:10px;">
                <div class style="position:relative; margin:auto;">
                    <div style="
                    background:
    
                    url('<?php echo get_the_post_thumbnail_url( $post = $post); ?>');
                    width:100%;
                    height:200px;
                    background-size: cover;
                    background-position:center;
                    background-color:#fcfcfc;
                    border-radius:2px;
                    z-index:1;
                    ">
                </div>
		<a href="<?php the_permalink(); ?>" class="spritekit-link"><?php
        
         
         the_title(); 
    
         ?>
            
         </a>
        </div>
        </div>
       
	
<?php
 endforeach; 
 ?>
</div>
  </div>

  <div class="tab-pane fade" id="themes" role="tabpanel">

      <div class="row" style="margin:auto;">
            <?php 
            $args = array(
                'category_name' => 'Themes'
            );
            $myposts = get_posts($args);
            
            foreach ( $myposts as $post ) : setup_postdata( $post );
            
            ?>
            
                <div class="col-md-4" style="margin-top:10px; margin-bottom:10px;">
                <div class style="position:relative; margin:auto;">
                    <div style="
                    background:
    
                    url('<?php echo get_the_post_thumbnail_url( $post = $post); ?>');
                    width:100%;
                    height:200px;
                    background-size: cover;
                    background-position:center;
                    background-color:#fcfcfc;
                    border-radius:2px;
                    z-index:1;
                    ">
                </div>
		<a href="<?php the_permalink(); ?>" class="spritekit-link"><?php
        
         
         the_title(); 
    
         ?>
            
         </a>
        </div>
        </div>
       
	
<?php
 endforeach; 
?>

</div>
<a href="https://github.com/kubamod"><img src="<?php echo get_template_directory_uri() . '/assets/img/github-logo.png'?>" style="max-width:200px; margin-left:auto; margin-right:auto; margin-top:40px; margin-bottom:40px; display:block; "/></a>
  </div>
  <div class="tab-pane" id="settings" role="tabpanel">chuj</div>
</div>
</div>
<?php get_footer(); ?>