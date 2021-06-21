
<?php get_header(  );?>
 

  <main id="main">

    <!-- ======= Blog Section ======= -->
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
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Mobile App Development</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100"> News And Best Practices</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="section">
      <div class="container">
        <div class="row mb-5">

			<?php if (have_posts()): while (have_posts()): the_post(); ?>
			     <div class="col-md-4">
			            <div class="post-entry">
			              <a href="<?php the_permalink();?>" class="d-block mb-4">



<?php

if (has_post_thumbnail()) {
    echo '<img src="' . get_the_post_thumbnail_url().'" alt="thumbnail" class="img-fluid">';
}
else {
    echo '<img src="' . get_template_directory_uri() . '/assets/img/thumb-default.png" alt="thumbnail" class="img-fluid" />';
}?>

			                



			              </a>
			              <div class="post-text">
			                <span class="post-meta"><?php the_time( $d = '' );?> &bullet; By <?php the_author_meta('display_name',$post->post_author);?></span>
			                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			                <p><?php the_excerpt( );?></p>
			                <p><a href="<?php the_permalink();?>" class="readmore">Read more</a></p>
			              </div>
			            </div>
			          </div>

			<?php endwhile; else: ?>
			    <p>Northing found(</p>
			<?php endif; ?>
        </div>
        
       <!--  <div class="row">
          <div class="col-12 text-center">
            <span class="p-3 active text-primary">1</span>
            <a href="#" class="p-3">2</a>
            <a href="#" class="p-3">3</a>
            <a href="#" class="p-3">4</a>
          </div>
        </div> -->
      </div>

    </section>

  
  

  <?php get_footer(  );?>

 