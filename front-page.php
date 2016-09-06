<?php get_header();  ?>


<div class="main">
    <?php $heroImage = get_field('hero_image'); ?>

        
    <div class="container">
        <div class="content">
          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <!-- title of page
           <!--  <h2><?php the_title(); ?></h2> -->
        </div>
    </div>
            <!-- <div class="gallery" data-flickity> -->
            <div id="owl-demo" class="owl-carousel owl-theme">
                <?php  
                  if(have_rows('gallery')){
                    while(have_rows('gallery')) {
                      the_row();
                      ?>
                      <div class="item">
                      <!-- <div class="gallery-item"> -->
                       
                        <h4><?php the_sub_field('gallery_text'); ?></h4>
                        <?php 
                          $galleryImage = get_sub_field('gallery_image');
                        ?>
                         <img src="<?php echo $galleryImage['url'] ?>" />
                      </div>
                      <?php 
                    } //end while
                  } //end if
                ?>
            </div>

      <div class="container">
        <div class="content">
              <div class="front-about-container">
                    <div class="front-about-wrap">
                         <!-- content of page -->
                         <?php the_content(); ?>
                        <div class="title-text-about-box">
                              <!-- adds title text and image -->
                            <div class="title">
                              <?php the_field('about_title'); ?>
                            </div>
                            <div class="text">
                              <?php the_field('about_text'); ?> 
                            </div>
                        </div>
                        <div class="image-about-box">
                            <?php 
                                $aboutImage = get_field('about_image');
                            ?>
                            <img  src="<?php echo $aboutImage['url'] ?>" />
                        </div>
                    </div>  <!-- .front-about-wrap -->
              </div> <!-- .front-about-container -->
                <?php endwhile; // end the loop?>
        </div> <!-- /,content -->
               <!--  <?php get_sidebar(); ?> -->
     </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>