<?php get_header(); ?>
<section class="banner-sm bg-search-result" >
    <div class="container">
    <div class="banner-sm-wrapper text-light">
        <span class="welcome-span">Search</span>
        <h1>Two Miles <span>Results</span></h1>
    </div>
    </div>
</section>

<section class="reference-list py-5">
    <div class="container">
    <div class="section-header">
        <span>References</span>
        <h2>Two Miles Materials</h2>
    </div>

      
    
          <div class="row">
          <div class="col-md-8">
          <h3>Search Result for : <span class="keywords"> "<?php echo "$s"; ?>"</span> </h3>  
        <?php if(have_posts() ) : while(have_posts() ) : the_post() ?>

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
                <?php esc_html_e( 'Sorry, we cannot find anything. Try changing your keyword' ); ?>
            <?php endif;
            wp_reset_postdata();
            ?>

        </div>
        <div class="col-md-4">
        <div class="sidebar">
        <h3>Search References</h3>

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
