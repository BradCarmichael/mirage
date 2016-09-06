<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content blog">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
       
      
       <div class="blog-entries">
      
        
        <?php $featuredImage = hackeryou_featured_image_url($post); ?> 
        <img src="<?php echo $featuredImage ?>" />

        
        <h2><?php the_title(); ?></h2>
        <?php the_content('READ MORE'); ?>

      </div>


      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <!-- <?php get_sidebar(); ?> -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>