<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<section class="banner-sm " style="background-image: linear-gradient(to right, white 20%, rgba(255, 255, 255, 0.2)), url(<?php echo $backgroundImg[0]?>)" >
    <div class="container">
    <div class="banner-sm-wrapper text-light">
        <span class="welcome-span">Articles</span>
        <h1>Two Miles <span>References</span></h1>
    </div>
    </div>
</section>

<section class="reference-list py-5">
    <div class="container">
    <div class="section-header">
        <span><?php the_title(); ?></span>
        <h2>Two Miles Materials</h2>
    </div>

      
        <?php
         $reference = New WP_Query(array(
            'post_type' => 'references',
            'posts_per_page' => 10,
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1

        ));
        ?>
          <div class="row">
          <div class="col-md-8">
        <?php if($reference->have_posts() ) : while($reference->have_posts() ) : $reference->the_post() ?>
     
        <div class="reference-item">
            <a href="<?php the_permalink();?>"><i class="fas fa-angle-right"></i> <?php the_title(); ?></a>
            <div class="metadata">
                <span class="category">Category: <?php the_category(' ')?> | </span>
                <span class="tags">
                <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                    echo '<ul> Tags:';
                    foreach($posttags as $tag) {
                        echo '<li class="tag-item">' .$tag->name. '</li>'; 
                    }
                    echo '</ul>';
                    }
                    ?>
                </span>
            </div>
            <p>
                 <?php 
                      $excerpt = get_the_excerpt();  
                      $excerpt = substr($excerpt, 0, 120);
                      $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                      echo $result . "...";
                    ?>
                    </p>
         </div>
        
                  
        
            <?php endwhile; else : ?>
                <?php esc_html_e( 'Sorry, no more reference to load.' ); ?>
            <?php endif; ?>

            <div class="pagination">
            <?php
            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $reference->max_num_pages,
                'prev_text' => 'Prev',
                'next_text' => 'Next',
            ) );
            wp_reset_postdata();
            ?>  
        </div>

        </div>
        <div class="col-md-4">
            <div class="sidebar">
                <h3>Look for resources</h3>
                <?php echo do_shortcode( ' [searchandfilter fields="search,category,post_tag"  types="select" headings="Keywords,Categories,Tags" submit_label="Search"]' ); ?>

             </div>
        </div>
            
    </div>

</div>  <!-- ROW END -->
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
