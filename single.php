<?php 
get_header();?> 

<section class="blog-heading row container-fluid">
	<div class="blog-first col-md-8">

<?php if (have_posts()) : 
while (have_posts()) : the_post(); ?> 
<div class="thumbnail">
  <?php 
      if (has_post_thumbnail()) :
     ?>
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail(full) ?></a>
    <?php endif ?>
	<div class="caption">
	<h3><?php the_title() ?></h3> 

<?php the_content(); ?>
  </div>    
<?php endwhile; 

else : 
echo "<p>No content found</p>"; 

endif; ?>
</div>
</div>
  <?php get_template_part('sidebar'); ?>
    </section>
<?php get_footer(); 

?>

