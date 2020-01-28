<?php get_header(); ?>
<?php if(have_posts() ) : while(have_posts() ) : the_post() ?>

<section class="banner-sm " style="background-image: linear-gradient(to right, white 20%, rgba(255, 255, 255, 0.2)), url(<?php echo get_field('page_banner')['url']; ?>)">
    <div class="container">
        <div class="banner-sm-wrapper text-light" >
            <span class="welcome-span"><?php  the_field('banner_tag')?></span>
            <h1>Two Miles <span><?php the_title() ?></span></h1>
            <!-- <a href="services.html" class="btn bg-primary">View Offices</a> -->
        </div>
    </div>
</section>

<?php the_content(); ?>


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no more page to load.' ); ?></p>
<?php endif; ?>

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