<?php get_header();?>
<div class="container">
   <h1><?php the_title();?></h1>
   
    <?php if (have_posts()) : while(have_posts()): the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>

    <!-- <button>Contact Me</button> -->
    <button type="button" class="btn btn-dark">contact me</button>
</div>

<?php get_footer();?>