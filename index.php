<?php get_header(); ?>
<section class="banner-sm " style="background-image: linear-gradient(to right, white 20%, rgba(255, 255, 255, 0.2)), url(<?php echo $backgroundImg[0]; ?>)">
    <div class="container">
        <div class="banner-sm-wrapper text-light">
            <span class="welcome-span">Beginnings</span>
            <h1>Two Miles <span><?php the_title() ?></span></h1>
            <!-- <a href="services.html" class="btn bg-primary">View Offices</a> -->
        </div>
    </div>
</section>
<section class="blog-list">
    <div class="container">

    <div class="section-header">
          <span><?php the_title(); ?></span>
          <h2>Tax Global News</h2>
        </div>

        <div class="row">
        <?php
         $news = New WP_Query(array(
            'post_type' => 'news',
            'posts_per_page' => 1
        ));
        ?>
       
        <?php if($news->have_posts() ) : while($news->have_posts() ) : $news->the_post() ?>
            <div class="col-md-4"> 
            <div class="news-item article-box">
                <div class="news-item-img">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="news-item-content article-box-content">
                    <div class="article-box-content-wrapper">
                    <h3>
                       <?php the_title(); ?>
                    </h3>

                    <p>
                       <?php the_excerpt();?>
                    </p>
                    </div>

                    <a href="<?php the_permalink();?>" class="text-primary"
                    >Read More <i class="fa fa-angle-right"></i
                    ></a>
                    </div>
                </div>
            </div>
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no more news to load.' ); ?></p>
            <?php endif; ?>

        </div>
    </div>
</div>  <!-- ROW END -->
</section>

<?php get_footer(); ?>