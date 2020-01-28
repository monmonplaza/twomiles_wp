<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'news-banner' ); ?>
<section class="banner-sm " style="background-image: linear-gradient(to right, white 20%, rgba(255, 255, 255, 0.2)), url(<?php echo $backgroundImg[0]?>)" >
    <div class="container">
    <div class="banner-sm-wrapper text-light">
        <span class="welcome-span">Latest</span>
        <h1>Two Miles <span>News</span></h1>
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
            <span>Tax News</span>
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
        <!-- CUSTOM LOOP NA LANG KESA GUMAMIT NANG WIDGET _ SIDEBAR -->
          <div class="news-sidebar sidebar">
            <?php 
              $recent_news = new WP_Query(array(
                "post_type" => 'news',
                "posts_per_page" => 4
              ));
            ?>
            <h3>Recent News</h3>
              <ul>
                <?php if($recent_news->have_posts()) : while($recent_news->have_posts()) : $recent_news->the_post() ?>
                <li class="sidebar-list">
                  <div class="sidebar-item">
                    <?php the_post_thumbnail('news-thumbnails');?>
                    <div class="sidebar-item-meta">
                      <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    <ul>
                      <li>Author: <?php the_author();?></li>
                      <li>Date Posted: <?php the_date('F j, Y');?></li>
                    </ul>
                    </div>
                  </div>
                </li>

                <?php endwhile; else : ?>
                  <p><?php esc_html_e( 'Sorry, no more content to load.' ); ?></p>
                <?php endif; ?>  
              </ul>    
          </div>

        <div class="subscribe-sidebar sidebar">
          <h3>Newsletter</h3>
          <form action="">
          <div class="form-group">
            <input type="email" placeholder="Email Address" class="width-full">
            <button class="btn bg-primary">Subscribe</button>
            </div>
          </form>
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