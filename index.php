<?php 
get_header();?> 

	<section class="blog-heading row container-fluid">
	<div class="blog-first col-md-8">

<?php if (have_posts()) : 
while (have_posts()) : the_post(); ?> 
<div class="thumbnail">
	<div class="caption">
		<h3><?php the_title() ?></h3> 

<?php the_content(); ?>
    <div class="btn-class">
        <button onclick="self.location.href=<?php the_permalink() ?>&#39;blogpage-post.html&#39;;" class="btn btn-default" type="submit">Continue Reading</button>
    </div> 
    </div>
</div>    
<?php endwhile; 

else : 
echo "<p>No content found</p>"; 

endif; ?>
	</div>
	<aside class="blog-second col-sm-6 col-md-3 col-lg-3 hidden-xs">
        <div class="categories">
          <h6>
            About Blogin.
          </h6>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          </p>
          <p>
            Excepteur sint occaecat sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="popular-post">
          <h6>
            Search.
          </h6>
          <form action="#" class="search-it">
            <input placeholder="What are you looking for?" type="search" /> 
          </form>
        </div>
        <div class="tags-main">
          <h6>
            Stay Tuned.
          </h6>
          <form action="#" class="search-it">
            <input placeholder="Your Email" type="email" /><button type="submit"><i class="fa fa-arrow-circle-o-right"></i></button>
          </form>
        </div>
      </aside>
      <div class="prev-next col-md-11 col-lg-11 col-xs-12">
        <div>
          <a href="#"><i class="fa fa-long-arrow-left"></i>previous</a>  
        </div>
        <div>
           <a href="#">next<i class="fa fa-long-arrow-right"></i></a>
        </div>
        </div>  
    </section>
<?php get_footer(); 

?>