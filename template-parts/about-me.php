
<?php /* Template Name: About-me */ ?>
<?php get_header(); 
global $post;
?>

<style scoped>
body { 
  background-color:#191919;
  color:#fff !important;
}

.site-header {
    background-color:rgba(0,0,0,0.0);
    border-bottom: none;
    color:#fff;
    -webkit-backdrop-filter: blur(0px);
}

.site-header a { 
    color:#fff;
}

.site-footer {
    background-color:rgba(0,0,0,0.0);
    padding-top:10px;
    padding-bottom:10px;
}

.breadcrumb {
    display:none;
}

.breadcrumb-footer {
    color: #fff;
}

.blog-info {
    color:#fff;
}

.stuff {
    margin-top:100px;
}

.stuff p{
    max-width:650px;
    margin:auto;
}

.site-footer {
    margin-top:100px;
    color:#fff;
}



</style>
<div class="container-fluid">
    <div class="h-100">
        <div class="stuff" id="box">
        <?php
        the_content();
        
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'spritekit-v3' ),
                        'after'  => '</div>',
                    ) );
        ?>
        </div>
    </div>
</div>

<script>
$(".logo").attr("src","<?php echo get_template_directory_uri() . '/assets/img/SiriVoice-white.png' ?>");
</script>
<?php get_footer(); 
?>