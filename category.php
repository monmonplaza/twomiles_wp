<?php get_header(); ?>
<section class="banner-sm bg-search-result" >
    <div class="container">
    <div class="banner-sm-wrapper text-light">
        <span class="welcome-span">Search</span>
        <h1>Two Miles <span>Results</span></h1>
    </div>
    </div>
</section>

<section class="category-list py-5" >
    <div class="container">
        <div class="section-header">
            <span>References</span>
            <h2>Two Miles Category</h2>
        </div>


        <div class="row">
          <div class="col-md-8">
          <?php 

                $cat = get_query_var('cat');
                $currentcat = get_category($cat);


                $category = new WP_Query(array (
                    'post_type' => 'references',
                    'posts_per_page' => 5,
                    'cat' => $cat
                ));
          ?>

<h3>Search Result for : <?php echo get_cat_name( $cat ) ?> </h3>  

        <?php if($category->have_posts() ) : while($category->have_posts() ) : $category->the_post() ?>
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
                    <?php esc_html_e( 'Sorry, no post for that category. Please change the catergory name' ); ?>
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