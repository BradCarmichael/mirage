<?php get_header();  ?>

<div class="main">
  <div class="container">
     <div class="content">
            <?php // Start the loop ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <!-- not going to use this -->
             <!--  <h2><?php the_title(); ?></h2> -->
          <div class="dynamic-sidebar-wrap contact">
              <div class="dynamic-sidebar contact">
                  <ul>
                    <?php dynamic_sidebar('contact1-widget-area'); ?>
                  </ul>
              </div> 
              <div class="form-wrap">
                <?php the_content(); ?>
              </div>
              <div class="dynamic-sidebar contact"> 
                  <ul>
                    <?php dynamic_sidebar('contact2-widget-area'); ?>
                  </ul>
              </div>   
          </div> 
          <?php endwhile; // end the loop?>
      </div> <!-- /,content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>