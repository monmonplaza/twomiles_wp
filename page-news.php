<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<section class="banner-sm " style="background-image: linear-gradient(to right, white 20%, rgba(255, 255, 255, 0.2)), url(<?php echo $backgroundImg[0]?>)" >
    <div class="container">
    <div class="banner-sm-wrapper text-light">
        <span class="welcome-span">Latest</span>
        <h1>Two Miles <span>News</span></h1>
    </div>
    </div>
</section>

<section class="blog-list py-5">
    <div class="container">

    <div class="section-header">
          <span><?php the_title(); ?></span>
          <h2>Tax Global News</h2>
        </div>

        <div class="row">
        <?php

         $news1 = New WP_Query(array(
            'post_type' => 'news',
            'posts_per_page' => 6,
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        ));
        ?>
       
        <?php if($news1->have_posts() ) : while($news1->have_posts() ) : $news1->the_post() ?>
            <div class="col-md-4"> 
            <div class="news-item article-box">
                <div class="news-item-img">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="news-item-content article-box-content">
                    <div class="article-box-content-wrapper">
                    <h3><a href="<?php echo the_permalink() ?>">
                       <?php the_title(); ?></a>
                    </h3>

                    <p>
                    <?php 
                      $excerpt = get_the_excerpt();
                      $excerpt = substr($excerpt, 0, 150);
                      $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                      echo $result;
                    ?>
                    </p>
                    </div>

                    <a href="<?php the_permalink();?>" class="text-primary "
                    >Read More <i class="fa fa-angle-right"></i
                    ></a>
                    </div>
                </div>
            </div>
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no more news to load.' ); ?></p>
            <?php endif; ?>

       


        </div>
        <div class="pagination">
            <?php
            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $news1->max_num_pages,
                'prev_text' => 'Prev',
                'next_text' => 'Next',
            ) );
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>  <!-- ROW END -->
</section>

<?php get_footer(); ?>