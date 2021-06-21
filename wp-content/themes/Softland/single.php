
<?php get_header();?>
 
  <main id="main">

    <!-- ======= Single Blog Section ======= -->
    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-10 text-center hero-text">




<?while(have_posts()):
    the_post();?>
   
                <h1 data-aos="fade-up" data-aos-delay=""><?=wp_title();?></h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100"><?php the_time('j F Y');?> &bullet; By <a href="#" class="text-white"><?php the_author_meta('display_name', $iwriter=$post->post_author); ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="site-section mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">

          	 <div class="row mb-5">


<?php

if (has_post_thumbnail()) {
    echo ' <figure><img src="'. get_the_post_thumbnail_url().'" alt="" class="img-fluid">
                  <figcaption>'. get_the_post_thumbnail_caption().'</figcaption>
                </figure>';
}?>


             
                
         
              
            </div>

          

             <?php echo the_content();?>

           

            
            <div class="pt-5">
              <p>Categories: <a href="#"><?= the_category(', '); ?></a>, <?= the_tags();?></p>
            </div>

            
			<?endwhile;?>

          </div>
          <div class="col-md-4 sidebar">
            
           
            <div class="sidebar-box">
              
              <h4>About The Author</h4>
             <img src="<?= get_template_directory_uri();?>/assets/img/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
               <h3><?php the_author_meta('display_name', $iwriter); ?></h3>
              <p><?php the_author_meta('user_description', $iwriter); ?></p>
              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
            </div>

            
          </div>
        </div>
      </div>
    </section>

   
  <?php get_footer();?>

  