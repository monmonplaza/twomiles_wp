<?php get_header(); ?>
<section class="banner-sm bg-single-references">
    <div class="container">
    <div class="banner-sm-wrapper text-light">
        <span class="welcome-span">Latest</span>
        <h1>Two Miles <span>Reference</span></h1>
    </div>
    </div>
</section>

<section class="main-news py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="main-acticle-wrapper">
          <?php if(have_posts()) : while(have_posts()) : the_post() ?>
          <div class="article-header">
            <span>Reference</span>
            <h2><?php the_title();?></h2>
            <div class="acticle-header-meta">
              <ul>
                <li>Date Posted: <?php the_date(); ?></li>
                <li>Author: <?php the_author(); ?></li>
              </ul>
            </div>
          </div>

          <div class="article-body">  
              <?php the_content(); ?>
          </div>
                        
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no more content to load.' ); ?></p>
            <?php endif; ?>  
          </div>
        </div>
        <div class="col-md-4">
          <div class="sidebar">
          <?php get_sidebar();?>
          </div>
    
        </div>
      </div>
    </div>
  </section>







<?php if(is_Page('contact')) : ?>
    <?php echo '
    
    <section class="get-quote bg-lightgray call-out">
    <div class="container">
        <h3 class="float-left">
            We have over 30 years of expertise in Finance, Accounting and
            Consulting
        </h3>
        <a href=" '. get_permalink( get_page_by_title( "services" ) ). '" class="btn bg-primary float-right">Get Free Quote</a>
    </div>
    </section>
    ';?>
<?php  else : ?>
    <?php echo '
    <section class="get-quote bg-lightgray call-out">
    <div class="container">
        <h3 class="float-left">
            We have over 30 years of expertise in Finance, Accounting and
            Consulting
        </h3>
        <a href=" '. get_permalink( get_page_by_title( "contact" )) . '" class="btn bg-primary float-right">Lets Talk</a>
    </div>
    </section>

    ';?>
<?php  endif;  ?>


<?php get_footer(); ?>